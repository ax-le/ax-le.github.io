---
layout: page
title: AutoMashup
description: Automatically creating mashup songs.
importance: 1
category: students
---

# Automashup: Automatically creating mashup songs

## TL;DR: Making a Music Mashup Bot

A musical mashup, where an artist blends two or more songs into one, is a great example of creative remixing. It's a process I've been exploring with students through a project I supervise called *AutoMashup*, which aims to get a computer to do this automatically. We have run two projects (for now), and it has led to a [scientific publication at GRETSI 2025](https://hal.science/hal-05191030), a French national Signal Processing conference.

The results is that it is very hard to make convicing mashups, but we are progressing!

## (2023-2024) The First Idea: Can a Computer Make a Mashup?

The initial project proposal, which I co-supervised with Nicolas Farrugia, laid out the basic plan. The goal was to build an algorithm that could automatically generate a mashup. To do this, the students needed to use clever tools that could:

- Split a song into parts: This is called source separation, where an algorithm can pull out the vocals, bass, drums, and other instruments from a track. To this aim, we use the *Demucs* open-source and SOTA algorithm.

- Mix the parts together: Once you have the separate instrumental and vocal tracks, the system needs to blend them into a new song. This part actually requires that both songs share many musical properties: rhythm, tonal content, structure, etc. Hence, most of the work actually consisted in finding signal processing tools to adapt both songs before bleding. This was made during the group project, and during a summer internship carried by a single student (Michael Moreno).

The goal was for the students to build a working prototype where a user could provide the songs. The project also allowed them to explore creating a user interface or even attempt to build the core algorithms themselves from scratch.

## (2024-2025) A Refinement: Making the Mashups Sound Better

After the first group of students created a functional version, we needed to improve it. The next year's project, which I co-supervised with Bastien Pasdeloup, focused on the challenges we discovered:

- They sometimes sound weird: The first mashups occasionally had clashing sounds, or what musicians call "dissonances". The new plan was to fix this by aligning the musical keys of the tracks section by section, instead of just once for the whole song. For this task, it was preferable to have students with some basic musical training. We managed to solve this problem, leading to more pleasant mashups in the signal processing sense (not always in the musical one).

- You had to pick the songs yourself: The process was still very manual. The next goal was for the algorithm to suggest which songs would mix well together. This meant the students needed to develop a "similarity metric," likely using deep learning models to analyze and compare tracks for compatibility. Our study was partly deceiving: we found a (perceptually and qualitatively) accurate deep learning method (COCOLA), which doesn't scale with big datasets ; our attemps to use deep learning methods that could scale to massive datasets was infructuful. You can find more details in [this scientific publication](https://hal.science/hal-05191030).


## (2025-2026) Leveraging Creativity: Using Generative AI
For our upcoming project, we're setting our sights on leveraging the power of generative AI to take AutoMashup to the next level. We've identified two key avenues for improvement:

- Refining the Mix: We're exploring the use of advanced deep learning models for audio mixing. Early tests indicate that these models can significantly improve the overall sound quality and cohesiveness of our mashups. This "easy win" promises to make our automated creations even more polished and professional.

- Creative Blending with Generative AI: The more ambitious goal involves using cutting-edge generative AI models to not just combine, but creatively blend songs. Imagine an AI that can intelligently fill in musical gaps, add transitional elements, or even generate new melodic lines that seamlessly connect the mashed-up tracks. This approach aims to imbue the mashups with a true sense of musical expression, pushing beyond simple concatenation to genuinely artistic fusion.

For now, this is TODO.

## People involved in the project:
### IMT Atlantique students
#### PROCOM 2024-2025
- Marine Delabaere
- Léa Miqueu
- Michael Moreno 

#### Summer internship in 2024
- Michael Moreno 

#### PROCOM 2023-2024
- Gautier Bigois 
- Hoang Duong 
- Ella Fernandez
- Flavie Manent
- Maria Salgado-Herrera 

### Colleagues that also supervised the project
- Nicolas Farrugia
- Bastien Pasdeloup