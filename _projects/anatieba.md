---
layout: page
title: ANATIEBA (ANR PRC 2026)
description: Automatic Analysis of the Temperaments of Historical Instruments and Recordings, from Brittany and Elsewhere.
importance: 1
category: funding
---
## TL;DR
The **ANATIEBA** project is a 42-month collaborative research project, funded by ANR (ANR AAPG 2026 - PRC, axis H.15), which aims to characterize the *unequal temperaments* (microtonal scales) used by traditional Breton musicians in the first half of the 20th century, and to extend the resulting methodology to other instruments and oral music traditions.

The consortium gathers four partners: the Université de Bretagne Occidentale (Lab-STICC, Perception Sonore team, coordinator), IMT Atlantique (Lab-STICC, BRAIN team), Le Mans Université (LAUM), and the association Drom. The project is coordinated by Mathieu Paquier (UBO). **I am the scientific lead for IMT Atlantique, and more specifically for task T2**, which develops the automatic transcription tools applied to historical recordings.

# ANATIEBA: Automatic Analysis of the Temperaments of Historical Instruments and Recordings, from Brittany and Elsewhere.

Many of us grew up hearing music built on twelve equal semitones. But equal temperament is a convention, not a law of nature: across the world, countless traditional musics use *unequal temperaments:* scales made of micro-intervals that simply do not fit the chromatic grid of a piano.

This is probably the case for historical and traditional Brittany music! In particular, we focus on recordings from the first half of the 20th century, where the *sonneurs de tradition* played the **bombarde** and the **biniou** in duo, and this is the challenge at the heart of the **ANATIEBA** project (funded by ANR AAPG 2026 - PRC). ANATIEBA is a 42-month research project that brings together acousticians, psychoacousticians, signal processing and machine learning researchers, and ethnomusicologists, around a single question: *what scales did these musicians actually play, and why?*

## Why Is This Hard?
The obvious approach (i.e., **record a musician today playing an old instrument**) is misleading, for three reasons that stack on top of each other.

1. **The instrument body** defines a set of resonances, which can be measured objectively (acoustic impedance), but historical instruments are very rare.
1. **The reed** substantially shifts the played frequencies away from those resonances. Historical reeds had geometries and materials that are no longer used, and their influence was particularly decisive.
1. **The musician** adjusts pitch in real time with breath pressure and lip force. Worse: a contemporary player who does not know the original scale will unconsciously "correct" the notes toward what sounds right to a modern ear.

So the only way to know what the tradition really sounded like is to go back to the **historical recordings** -- and to have tools precise enough to measure them.

## Our Approach: Three Complementary Routes to the Same Scale
ANATIEBA attacks the problem from both ends and cross-checks the results.

- **T1 -- Physical measurements on historical instruments and reeds** (LAUM, UBO). Acoustic impedance measurements on roughly twenty instruments of each type (originals or luthier-made copies), experimental characterization of double reeds using artificial mouths, and a physical model predicting the played frequency as a function of the control parameters. This yields the scale *of the instrument*, free of the musician's influence.
- **T2 -- Exploiting the historical recordings: automatic transcription and domain adaptation** (IMT Atlantique). Extracting the pitches actually played, from a corpus of about fifty historical recordings. This yields the scale *as it was really played*.
- **T3 -- Theorizing the old scales** (UBO, Drom). Combining T1 and T2 to determine how the scales varied with the luthier, the region, the musician, the tune, and even the melodic direction -- and then testing, with listening experiments, whether these differences are actually perceived.
- **T4 -- Extension to other instruments and traditions** (UBO, Drom). Applying the same tools to Breton clarinet, fiddle and singing, then to repertoires from the Massif Central, Galicia, Bulgaria, and the wider *maqâm* world (Middle East, India).

Comparing the scale obtained from the bare instrument body (T1), from the complete instrument played by an artificial mouth (T1), and from the historical recordings (T2) tells us something no single measurement can: how much of the temperament was dictated by the instrument itself, how much by the reed, and how much by the musician.

## Task T2: Automatic Transcription of Microtonal, Polyphonic, Noisy Archives
This is the part I lead, and it sits on a genuinely open problem in Music Information Retrieval.

The target is **multi-f0 estimation** (recovering several simultaneous fundamental frequencies) on recordings where three sources coexist: bombarde, biniou chanter, biniou drone. State-of-the-art deep models are excellent at this on standard corpora. Our data, however, is about as out-of-distribution as it gets:

- the scales are **microtonal**, foreign to models trained on equal-tempered corpora;
- the **instruments are rare** and absent from every common training set;
- the recordings are **heavily noisy**, made under wildly varying technical conditions.

There is good reason to expect existing models to degrade sharply here; similar drops have been reported on Renaissance vocal ensembles and, more broadly, on non-Western corpora. The task is organized in four steps:

- **T2a -- Baseline evaluation.** Quantify how far current multi-f0 models fall short on our corpus, using a small expert-annotated subset and metrics adapted to microtonality (tolerance thresholds on the order of 10 cents). This already requires structural adaptation of the models: very high frequency resolution at the input, and revisiting the internal components that implicitly assume a semitone grid.
- **T2b -- Fine-tuning on non-Breton microtonal music.** Adapt the models with LoRA using existing microtonal corpora (Turkish, Indian, Arab-Andalusian traditions). To our knowledge, LoRA has never been used to adapt multi-f0 estimation models.
- **T2c -- Building a Breton biniou/bombarde dataset.** No annotated dataset of this duo in old scales exists. So we will record one and release it **open source**! It will be multitrack, high quality, fully annotated, using modern copies of historical instruments by different luthiers and players. Data augmentation will help bridge the acoustic gap between clean studio recordings and archival material.
- **T2d -- Specialization and comparative evaluation.** Fine-tune on the new dataset and quantify the gain from context-specific data versus generic microtonal adaptation. The best configuration then transcribes the full historical corpus.

An interesting side question: does fine-tuning on Breton data *also* improve transcription of other microtonal traditions? If so, we may be able to identify structural similarities between musical traditions in a systematic way.

Fallback strategies are in place, in decreasing order of preference: separate-then-transcribe with monophonic f0 estimators (pYIN, PESTO, NMF) on top of a source separation front-end (a supervised DNN, or NMF for its unsupervised generalization), and, in the worst case, manual annotation of the fifty recordings -- suboptimal, but guaranteeing that T2 never blocks T3.

## What We Expect to Find
Earlier pseudo-manual work suggested that historical bombardes had, relative to equal temperament, a low second, a neutral third, and a high fourth. It also suggested that the biniou did *not* share the bombarde's scale, producing a heterophonic ensemble sound. These results were averaged across recordings, hiding the influence of the instrument, the player, and the tune.

With a larger corpus and automatic analysis, we can ask sharper questions: do the scale degrees vary *within* a single recording? Do they depend on the tune or the mode? Is the variability structured, or simply imprecise playing?

## Do Listeners Actually Hear It?
Unequal temperaments only matter musically if someone hears them. Listening tests with several groups of listeners — Breton players, musicians from traditions using comparable scales, and non-musicians — will address a few questions: are these micro-intervals perceptible at all, and by whom? Does hearing them depend on familiarity with the intervals themselves, or with the music they belong to? And does the biniou's drone change how they are perceived?

## Why This Matters?
The immediate goal is patrimonial: reconstructing, with real precision, a musical practice that was never written down and whose transmission was largely broken. No collected interview with a traditional player, as far as we know, ever addressed how they conceived their scale.

But the tools outlive the case study. The reed characterization bench applies to modern oboe making, still a largely empirical craft. The transcription models address a real gap in music informatics -- microtonal music and rare instruments remain badly served by systems trained on Western tempered corpora -- and the dataset we release will be the first of its kind. And the methodology, developed on a well-circumscribed Breton corpus, is meant to travel: to Breton clarinet and fiddle, to Breton singing, to the Massif Central, Galicia, Bulgaria, India, and the Middle East, where the relationship between the scales used, the instruments, and the social status of their players is itself a research question.

The project is strongly committed to open science: algorthms, fine-tuned models, and the multitrack biniou/bombarde dataset  will be released as open-source.

## Dissemination
Beyond publications and conferences, the consortium cares about reaching musicians, instrument makers, and the general public: regular meetings with musicians through Drom's network, presentations at the No Border festival study days in Brest, "scientific concerts" presenting the old scales and instruments, and a **documentary film** retracing the whole project -- from the reed measurements to the deep learning work to the ethnomusicological discussion -- as a major final deliverable.

**We are excited to start this project, and to find out what these recordings have been telling us all along!**
