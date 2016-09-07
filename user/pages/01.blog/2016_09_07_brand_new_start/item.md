---
title: Reasons for aptcacher 
date : 21:00 09/06/2016
taxonomy:
    category: blog
    tag: post linux
    
---

So, why run an apt-cacher server in your infrastructure?
* You run multiple linux hosts; namely of a specific flavor (in our case, Debian/Ubuntu).
* Manual configuration of sources mirror only gets you so much return; your still at the mercy of upstream provider
* You want the speed of delivery of local-hosted updates -- without the commitment of running a complete mirror
* Bandwidth or disk-space may be a concern
* You (may) run multiple versions of a similar distribution (precise, trusty, xenial) but want your mirrors somewhat separate per versions