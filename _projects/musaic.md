---
layout: page
title: MusAIc (ANR JCJC 2025)
description: Steerable and Interpretable Music Analysis through Hybrid Models.
importance: 1
category: funding
---
## TL;DR
The **MusAIc** project is a 48-month research project, funded by ANR (ANR JCJC 2025 - CE23), that aims to develop Artificial Intelligence (AI) models for music analysis that are efficient, steerable, and interpretable, by bridging low-rank factorization and deep learning methods.

<!--MusAIc's central hypothesis is that by creating novel hybrid models that merge the strengths of low-rank factorization methods (like nonnegative low-rank factorization) with the expressive power of deep learning, it is possible to achieve high performance while embedding user steerability and interpretability by design. The project will focus on tasks such as automatic music transcription, source separation, and structure analysis. Through close collaboration with music professionals, the ultimate goal is to empower musicians, musicologists, and researchers with adaptable and insightful AI tools that bridge the gap between computational efficiency and artistic and analytical needs.-->

The project will fund one master's internship (starting in 2026), one Ph.D. (starting late 2026), and one 18-month post-doctoral position (starting 2028).

# MusAIc: Steerable and Interpretable Music Analysis through Hybrid Models.

Artificial Intelligence has made incredible strides in the world of music. From automatically transcribing piano pieces to separating individual instruments from a finished track, AI tools are rapidly advancing the field of Music Information Retrieval. However, for many developers and practicioners (musicians, musicologists, sound engineers, ...), these tools may feel like a "black box": they produce impressive results, but it is quite hard to decipher how they work or guide them to fit our specific artistic or analytical needs.

This is the challenge at the heart of the **MusAIc** project (funded by ANR AAPG 2025 - JCJC). MusAIc is a 48-month research project (starting Jan. 2026), that I conduct as Principal Investigator. Our goal is to develop AI for music analysis that is not only high-performing but also *steerable* and *interpretable*.

## What Do We Mean by "Steerable" and "Interpretable"?
- Steerability is the ability to actively **guide** a model's output. The objective is here to assist the model, by incorporating prior/posterior knowledge and refine the model to match our needs. It still requires to understand how the model works.

- Interpretability is the ability to **understand**, at least partly, the representations the model learns. Ideally, an interpretable model would allow music practicionners (*i.e.,* musicians, musicologists, ...) to see how the model connects different sections of a song or how it identifies the timbre of a specific instrument, linking computational results to music theory concepts.

## Our Approach: Hybrid models (low-rank factorization + deep learning)
Historically, music analysis has followed two paths. 
1. Low-rank factorization methods on one side, like Nonnegative Matrix Factorization (NMF), which are great for interpretability, but often lack the performance of modern systems. 
1. Deep learning models on the other side, which achieve state-of-the-art performance by learning from vast amounts of data but remain notoriously difficult to interpret and control.

The central idea of MusAIc is to bridge this gap by creating **hybrid models**. We believe that by combining the principled structure of low-rank factorization methods with the expressive power of deep learning, we can design models that are efficient, steerable, and interpretable from the ground up.

The project is organized into four main work packages:

- WP1: Enhance low-rank factorization models by integrating principles from deep learning, like architectural depth (*e.g.,* "Deep NMF"), to make them more powerful.
- WP2: Improve the interpretability of deep learning models by integrating structured constraints, such as nonnegativity and sparsity.
- WP3: Develop entirely new hybrid architectures that natively balance performance, steerability, and interpretability.
- WP4: Collaborate directly with a consortium of musicians, musicologists, and sound engineers to co-design and evaluate these tools, ensuring they are genuinely useful in real-world contexts.

## Which musical tasks could be tackled?
The project roots itself in Music Information Retrieval, and aims at studying tasks such as Automatic Music Transcription, Music Source Separation, and Music Structure Analysis. These tasks are standard and notoriously difficult to solve, even if significant progresses have observed in the recent years. Our personal conviction is that solving these tasks may largely advance musical expressivity, and help music practicionners to study music as a whole (*e.g.,* for improving practice, study historical recordings, assist music production, ...).

## Funded positions
Concretly, the project will fund three positions:
1. A master's internship, which is expected to start in the first half of 2026, and on the subject of improving low-rank factorization using large datasets (batch-wise and epoch-based learning). The offer is available <a href="{{baseurl}}/assets/pdf/postes/MusAIc_master_offer.pdf">here</a>.
1. A Ph.D. (starting late 2026), focusing on WP1 and 3 (*i.e.,* improving low-rank factorization models using deep learning principles). The offer is available <a href="{{baseurl}}/assets/pdf/postes/MusAIc_phd_offer.pdf">here</a>.
1. A 18-month post-doctoral position (expected to start in 2028), focusing on WP2 and 3 (*i.e.,* using low-rank factorization and signal processing principles to enhance the interpretability and steerability of deep learning models).

The master's internship is expected to follow as Ph.D., but this is not mandatory.

## Why This Matters?
By prioritizing steerability and interpretability, we aim to transform AI from a simple tool into a genuine creative and analytical partner. Such advancements could help musicians analyze complex patterns to improve their practice, assist musicologists in their research, and enable new forms of artistic expression.

The **MusAIc** project is a multidisciplinary effort bringing together experts in signal processing, machine learning, and the arts. We are committed to open science, with plans to release open-source code and publications to benefit the entire community.

We are excited to embark on this journey and look forward to sharing our progress as we work to build models that truly understands and empowers the world of music!