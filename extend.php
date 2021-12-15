<?php

/*
 * This file is part of zerosonesfun/collection.
 *
 * Copyright (c) 2021 Billy Wilcosky.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace ZerosOnesFun\Collection;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[slider one={TEXT1} two={TEXT2;defaultValue=hideslide} three={TEXT3;defaultValue=hideslide} four={TEXT4;defaultValue=hideslide} five={TEXT5;defaultValue=hideslide}]',
                '<h6 class="carousel-instructions" id="si"><i class="fas fa-arrow-left"></i> swipe or click and drag</h6>
                <section class="carousel-bb" aria-label="carousel" tabindex="0">
                <a class="carousel__skip-link" href="#skip-link">Skip the Carousel</a>
                <div class="slides" id="slides-scroll">
                  <div class="slides-item slide-1 {TEXT1}" id="slide-1" aria-label="slide 1 of 5" tabindex="0">{TEXT1}</div>
                  <div class="slides-item slide-2 {TEXT2}" id="slide-2" aria-label="slide 2 of 5" tabindex="0">{TEXT2}</div>
                  <div class="slides-item slide-3 {TEXT3}" id="slide-3" aria-label="slide 3 of 5" tabindex="0">{TEXT3}</div>
                  <div class="slides-item slide-4 {TEXT4}" id="slide-4" aria-label="slide 4 of 5" tabindex="0">{TEXT4}</div>
                  <div class="slides-item slide-5 {TEXT5}" id="slide-5" aria-label="slide 5 of 5" tabindex="0">{TEXT5}</div>       
                </div>
                <div class="carousel__skip-message" id="skip-link" tabindex="0"></div>
              </section>'
            );
        })
];
