---
layout: page
title: Automatic Karaoke
description: Could we automatically create karaokes?
importance: 2
category: students
---

This project was an attempt at automatically creating karaoke tracks directly from a song's audio signal.

The core idea was quite simple: leverage state-of-the-art (SOTA) deep learning models to achieve key steps. 
1. Perform source sepration (we used Demucs);
1. Automatically transcribe lyrics (we used Whsiper);
1. Align both audio and transcription (we failed here, because we were never able to install forced-alignments alogrithms).

Overall, it was fun and interesting. I supervised the project, that was realized by [Mathis Fajeau](https://www.linkedin.com/in/mathis-f-210793259/) as part of his courses at IMT Atlantique. You may find the developments [here](https://github.com/ZWhimsi/karaoke). 

I should reactivate this project in the future to:
- Make a working algorithm after all;
- Make a nice GUI and deploy the interface online.

Nowadays, this is TODO.