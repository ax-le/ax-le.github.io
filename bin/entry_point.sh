#!/bin/bash
set -euo pipefail

echo "Entry point script running"

CONFIG_FILE=_config.yml

# Gemfile.lock handling:
# - if it is tracked by git, restore it (keeps builds reproducible)
# - otherwise KEEP it: deleting it breaks git-sourced gems (jekyll-terser),
#   because `bundle exec` cannot resolve a git gem without a lock file.
manage_gemfile_lock() {
    git config --global --add safe.directory '*' 2>/dev/null || true
    if command -v git &> /dev/null && [ -f Gemfile.lock ] \
       && git ls-files --error-unmatch Gemfile.lock &> /dev/null; then
        echo "Gemfile.lock is tracked by git, keeping it intact"
        git restore Gemfile.lock 2>/dev/null || true
    fi
}

# Make sure every gem in the (mounted) Gemfile is installed, including git
# sources. Fast no-op when everything is already there.
ensure_gems() {
    bundle check > /dev/null 2>&1 || bundle install
}

start_jekyll() {
    manage_gemfile_lock
    ensure_gems
    bundle exec jekyll serve --watch --port=8080 --host=0.0.0.0 --livereload --verbose --trace --force_polling &
}

start_jekyll

while true; do
    inotifywait -q -e modify,move,create,delete $CONFIG_FILE
    if [ $? -eq 0 ]; then
        echo "Change detected to $CONFIG_FILE, restarting Jekyll"
        jekyll_pid=$(pgrep -f jekyll)
        kill -KILL $jekyll_pid
        start_jekyll
    fi
done
