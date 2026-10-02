---
layout: page
title: BarMusComp
description: Barwise music compression schemes. It's a toolbox that regroups most methods used/developed during my PhD.
importance: 3
category: toolbox
github: https://gitlab.imt-atlantique.fr/a23marmo/barmuscomp
related_publications: true
toc:
  sidebar: left
---

[Link to the toolbox](https://gitlab.imt-atlantique.fr/a23marmo/barmuscomp)

## BarMusComp: Encoding songs with linear and nonlinear compression methods to reveal structure

Hello, and welcome on this repository!

This project aims at compressing all bars in a song, and studies the compressed representations of every bar to infer its structure. It is related to my PhD thesis {% cite marmoret2022unsupervised %}.

This repository contains code for the NTD, PCA, NMF, and Autoencoders (developed in PyTorch), as presented in {% cite marmoret2022barwise %}.

This project is an extension of the toolbox as_seg [3], which computes the segmentation of an autosimilarity matrix.

It can be installed with pip using `pip install barmuscomp`.

This is a first release, and may contain bug. Comments are welcomed!

## Listen to the NTD patterns

NTD decomposes a song into a handful of recurring patterns. Here is one, reconstructed under two different divergences, next to the original bar it approximates:

{% include audio.liquid path="assets/audio/a_bar_original.wav" caption="Original bar" controls=true %}
{% include audio.liquid path="assets/audio/NTD_pattern_kl.wav" caption="NTD pattern (KL divergence)" controls=true %}
{% include audio.liquid path="assets/audio/NTD_recons_kl.wav" caption="Reconstruction from that pattern (KL divergence)" controls=true %}

More examples, across divergences and songs, are on the [ISMIR 2020 companion page](/resources/ISMIR2020) and the [Listening to NTD](/resources/listening_NTD) page.

## Software version ##

This code was developed with Python 3.8.5, and some external libraries detailed in dependencies.txt. They should be installed automatically if this project is downloaded using pip.

## Tutorial Notebook ##

4 tutorial notebooks are available in the folder "Notebooks", and present the different compression methods on the song 'Come Together'.

They are only present if you downloaded the project from git (e.g. https://gitlab.inria.fr/amarmore/barmuscomp), and are not available in the pip version (which is in general not accessible easily in the file tree).

## How to cite ##

You should cite the package `BarMusComp`, available on HAL (https://hal.archives-ouvertes.fr/hal-03782914).

Here are two styles of citations:

As a bibtex format, this should be cited as: @softwareversion{marmoret2022barmuscomp, title={BarMusComp: module for computing barwise compressed representations of music}, author={Marmoret, Axel and Cohen, J{\'e}r{\'e}my and Bimbot, Fr{\'e}d{\'e}ric}, URL={https://gitlab.inria.fr/amarmore/barmuscomp}, LICENSE = {BSD 3-Clause ''New'' or ''Revised'' License}, year={2022}}

In the IEEE style, this should be cited as: A. Marmoret, J.E. Cohen, and F. Bimbot, BarMusComp: module for computing barwise compressed representations of music, 2022, url: https://gitlab.inria.fr/amarmore/barmuscomp.

## Credits ##

Code was created by Axel Marmoret (<axel.marmoret@gmail.com>), and strongly supported by Jeremy E. Cohen (<jeremy.cohen@cnrs.fr>).

The technique in itself was also developed by Frédéric Bimbot (<bimbot@irisa.fr>).

## References ##

[3] A. Marmoret, J.E. Cohen, and F. Bimbot, "as_seg: module for computing and segmenting autosimilarity matrices", 2022, url: https://gitlab.inria.fr/amarmore/autosimilarity_segmentation.