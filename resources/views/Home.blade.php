<!DOCTYPE html>
<html lang="en" class="fontawesome-i2svg-active fontawesome-i2svg-complete">

    <head>
        <style type="text/css">
            :host,
            :root {
                --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
                --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
                --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
                --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
                --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
                --fa-font-sharp-solid: normal 900 1em/1 "Font Awesome 6 Sharp";
                --fa-font-sharp-regular: normal 400 1em/1 "Font Awesome 6 Sharp";
                --fa-font-sharp-light: normal 300 1em/1 "Font Awesome 6 Sharp";
                --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands"
            }

            svg:not(:host).svg-inline--fa,
            svg:not(:root).svg-inline--fa {
                overflow: visible;
                box-sizing: content-box
            }

            .svg-inline--fa {
                display: var(--fa-display, inline-block);
                height: 1em;
                overflow: visible;
                vertical-align: -.125em
            }

            .svg-inline--fa.fa-2xs {
                vertical-align: .1em
            }

            .svg-inline--fa.fa-xs {
                vertical-align: 0
            }

            .svg-inline--fa.fa-sm {
                vertical-align: -.0714285705em
            }

            .svg-inline--fa.fa-lg {
                vertical-align: -.2em
            }

            .svg-inline--fa.fa-xl {
                vertical-align: -.25em
            }

            .svg-inline--fa.fa-2xl {
                vertical-align: -.3125em
            }

            .svg-inline--fa.fa-pull-left {
                margin-right: var(--fa-pull-margin, .3em);
                width: auto
            }

            .svg-inline--fa.fa-pull-right {
                margin-left: var(--fa-pull-margin, .3em);
                width: auto
            }

            .svg-inline--fa.fa-li {
                width: var(--fa-li-width, 2em);
                top: .25em
            }

            .svg-inline--fa.fa-fw {
                width: var(--fa-fw-width, 1.25em)
            }

            .fa-layers svg.svg-inline--fa {
                bottom: 0;
                left: 0;
                margin: auto;
                position: absolute;
                right: 0;
                top: 0
            }

            .fa-layers-counter,
            .fa-layers-text {
                display: inline-block;
                position: absolute;
                text-align: center
            }

            .fa-layers {
                display: inline-block;
                height: 1em;
                position: relative;
                text-align: center;
                vertical-align: -.125em;
                width: 1em
            }

            .fa-layers svg.svg-inline--fa {
                -webkit-transform-origin: center center;
                transform-origin: center center
            }

            .fa-layers-text {
                left: 50%;
                top: 50%;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                -webkit-transform-origin: center center;
                transform-origin: center center
            }

            .fa-layers-counter {
                background-color: var(--fa-counter-background-color, #ff253a);
                border-radius: var(--fa-counter-border-radius, 1em);
                box-sizing: border-box;
                color: var(--fa-inverse, #fff);
                line-height: var(--fa-counter-line-height, 1);
                max-width: var(--fa-counter-max-width, 5em);
                min-width: var(--fa-counter-min-width, 1.5em);
                overflow: hidden;
                padding: var(--fa-counter-padding, .25em .5em);
                right: var(--fa-right, 0);
                text-overflow: ellipsis;
                top: var(--fa-top, 0);
                -webkit-transform: scale(var(--fa-counter-scale, .25));
                transform: scale(var(--fa-counter-scale, .25));
                -webkit-transform-origin: top right;
                transform-origin: top right
            }

            .fa-layers-bottom-right {
                bottom: var(--fa-bottom, 0);
                right: var(--fa-right, 0);
                top: auto;
                -webkit-transform: scale(var(--fa-layers-scale, .25));
                transform: scale(var(--fa-layers-scale, .25));
                -webkit-transform-origin: bottom right;
                transform-origin: bottom right
            }

            .fa-layers-bottom-left {
                bottom: var(--fa-bottom, 0);
                left: var(--fa-left, 0);
                right: auto;
                top: auto;
                -webkit-transform: scale(var(--fa-layers-scale, .25));
                transform: scale(var(--fa-layers-scale, .25));
                -webkit-transform-origin: bottom left;
                transform-origin: bottom left
            }

            .fa-layers-top-right {
                top: var(--fa-top, 0);
                right: var(--fa-right, 0);
                -webkit-transform: scale(var(--fa-layers-scale, .25));
                transform: scale(var(--fa-layers-scale, .25));
                -webkit-transform-origin: top right;
                transform-origin: top right
            }

            .fa-layers-top-left {
                left: var(--fa-left, 0);
                right: auto;
                top: var(--fa-top, 0);
                -webkit-transform: scale(var(--fa-layers-scale, .25));
                transform: scale(var(--fa-layers-scale, .25));
                -webkit-transform-origin: top left;
                transform-origin: top left
            }

            .fa-1x {
                font-size: 1em
            }

            .fa-2x {
                font-size: 2em
            }

            .fa-3x {
                font-size: 3em
            }

            .fa-4x {
                font-size: 4em
            }

            .fa-5x {
                font-size: 5em
            }

            .fa-6x {
                font-size: 6em
            }

            .fa-7x {
                font-size: 7em
            }

            .fa-8x {
                font-size: 8em
            }

            .fa-9x {
                font-size: 9em
            }

            .fa-10x {
                font-size: 10em
            }

            .fa-2xs {
                font-size: .625em;
                line-height: .1em;
                vertical-align: .225em
            }

            .fa-xs {
                font-size: .75em;
                line-height: .0833333337em;
                vertical-align: .125em
            }

            .fa-sm {
                font-size: .875em;
                line-height: .0714285718em;
                vertical-align: .0535714295em
            }

            .fa-lg {
                font-size: 1.25em;
                line-height: .05em;
                vertical-align: -.075em
            }

            .fa-xl {
                font-size: 1.5em;
                line-height: .0416666682em;
                vertical-align: -.125em
            }

            .fa-2xl {
                font-size: 2em;
                line-height: .03125em;
                vertical-align: -.1875em
            }

            .fa-fw {
                text-align: center;
                width: 1.25em
            }

            .fa-ul {
                list-style-type: none;
                margin-left: var(--fa-li-margin, 2.5em);
                padding-left: 0
            }

            .fa-ul>li {
                position: relative
            }

            .fa-li {
                left: calc(var(--fa-li-width, 2em) * -1);
                position: absolute;
                text-align: center;
                width: var(--fa-li-width, 2em);
                line-height: inherit
            }

            .fa-border {
                border-color: var(--fa-border-color, #eee);
                border-radius: var(--fa-border-radius, .1em);
                border-style: var(--fa-border-style, solid);
                border-width: var(--fa-border-width, .08em);
                padding: var(--fa-border-padding, .2em .25em .15em)
            }

            .fa-pull-left {
                float: left;
                margin-right: var(--fa-pull-margin, .3em)
            }

            .fa-pull-right {
                float: right;
                margin-left: var(--fa-pull-margin, .3em)
            }

            .fa-beat {
                -webkit-animation-name: fa-beat;
                animation-name: fa-beat;
                -webkit-animation-delay: var(--fa-animation-delay, 0s);
                animation-delay: var(--fa-animation-delay, 0s);
                -webkit-animation-direction: var(--fa-animation-direction, normal);
                animation-direction: var(--fa-animation-direction, normal);
                -webkit-animation-duration: var(--fa-animation-duration, 1s);
                animation-duration: var(--fa-animation-duration, 1s);
                -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
                animation-timing-function: var(--fa-animation-timing, ease-in-out)
            }

            .fa-bounce {
                -webkit-animation-name: fa-bounce;
                animation-name: fa-bounce;
                -webkit-animation-delay: var(--fa-animation-delay, 0s);
                animation-delay: var(--fa-animation-delay, 0s);
                -webkit-animation-direction: var(--fa-animation-direction, normal);
                animation-direction: var(--fa-animation-direction, normal);
                -webkit-animation-duration: var(--fa-animation-duration, 1s);
                animation-duration: var(--fa-animation-duration, 1s);
                -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(.28, .84, .42, 1));
                animation-timing-function: var(--fa-animation-timing, cubic-bezier(.28, .84, .42, 1))
            }

            .fa-fade {
                -webkit-animation-name: fa-fade;
                animation-name: fa-fade;
                -webkit-animation-delay: var(--fa-animation-delay, 0s);
                animation-delay: var(--fa-animation-delay, 0s);
                -webkit-animation-direction: var(--fa-animation-direction, normal);
                animation-direction: var(--fa-animation-direction, normal);
                -webkit-animation-duration: var(--fa-animation-duration, 1s);
                animation-duration: var(--fa-animation-duration, 1s);
                -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1));
                animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1))
            }

            .fa-beat-fade {
                -webkit-animation-name: fa-beat-fade;
                animation-name: fa-beat-fade;
                -webkit-animation-delay: var(--fa-animation-delay, 0s);
                animation-delay: var(--fa-animation-delay, 0s);
                -webkit-animation-direction: var(--fa-animation-direction, normal);
                animation-direction: var(--fa-animation-direction, normal);
                -webkit-animation-duration: var(--fa-animation-duration, 1s);
                animation-duration: var(--fa-animation-duration, 1s);
                -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1));
                animation-timing-function: var(--fa-animation-timing, cubic-bezier(.4, 0, .6, 1))
            }

            .fa-flip {
                -webkit-animation-name: fa-flip;
                animation-name: fa-flip;
                -webkit-animation-delay: var(--fa-animation-delay, 0s);
                animation-delay: var(--fa-animation-delay, 0s);
                -webkit-animation-direction: var(--fa-animation-direction, normal);
                animation-direction: var(--fa-animation-direction, normal);
                -webkit-animation-duration: var(--fa-animation-duration, 1s);
                animation-duration: var(--fa-animation-duration, 1s);
                -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
                animation-timing-function: var(--fa-animation-timing, ease-in-out)
            }

            .fa-shake {
                -webkit-animation-name: fa-shake;
                animation-name: fa-shake;
                -webkit-animation-delay: var(--fa-animation-delay, 0s);
                animation-delay: var(--fa-animation-delay, 0s);
                -webkit-animation-direction: var(--fa-animation-direction, normal);
                animation-direction: var(--fa-animation-direction, normal);
                -webkit-animation-duration: var(--fa-animation-duration, 1s);
                animation-duration: var(--fa-animation-duration, 1s);
                -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                -webkit-animation-timing-function: var(--fa-animation-timing, linear);
                animation-timing-function: var(--fa-animation-timing, linear)
            }

            .fa-spin {
                -webkit-animation-name: fa-spin;
                animation-name: fa-spin;
                -webkit-animation-delay: var(--fa-animation-delay, 0s);
                animation-delay: var(--fa-animation-delay, 0s);
                -webkit-animation-direction: var(--fa-animation-direction, normal);
                animation-direction: var(--fa-animation-direction, normal);
                -webkit-animation-duration: var(--fa-animation-duration, 2s);
                animation-duration: var(--fa-animation-duration, 2s);
                -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                -webkit-animation-timing-function: var(--fa-animation-timing, linear);
                animation-timing-function: var(--fa-animation-timing, linear)
            }

            .fa-spin-reverse {
                --fa-animation-direction: reverse
            }

            .fa-pulse,
            .fa-spin-pulse {
                -webkit-animation-name: fa-spin;
                animation-name: fa-spin;
                -webkit-animation-direction: var(--fa-animation-direction, normal);
                animation-direction: var(--fa-animation-direction, normal);
                -webkit-animation-duration: var(--fa-animation-duration, 1s);
                animation-duration: var(--fa-animation-duration, 1s);
                -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                animation-iteration-count: var(--fa-animation-iteration-count, infinite);
                -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
                animation-timing-function: var(--fa-animation-timing, steps(8))
            }

            @media (prefers-reduced-motion:reduce) {

                .fa-beat,
                .fa-beat-fade,
                .fa-bounce,
                .fa-fade,
                .fa-flip,
                .fa-pulse,
                .fa-shake,
                .fa-spin,
                .fa-spin-pulse {
                    -webkit-animation-delay: -1ms;
                    animation-delay: -1ms;
                    -webkit-animation-duration: 1ms;
                    animation-duration: 1ms;
                    -webkit-animation-iteration-count: 1;
                    animation-iteration-count: 1;
                    -webkit-transition-delay: 0s;
                    transition-delay: 0s;
                    -webkit-transition-duration: 0s;
                    transition-duration: 0s
                }
            }

            @-webkit-keyframes fa-beat {

                0%,
                90% {
                    -webkit-transform: scale(1);
                    transform: scale(1)
                }

                45% {
                    -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                    transform: scale(var(--fa-beat-scale, 1.25))
                }
            }

            @keyframes fa-beat {

                0%,
                90% {
                    -webkit-transform: scale(1);
                    transform: scale(1)
                }

                45% {
                    -webkit-transform: scale(var(--fa-beat-scale, 1.25));
                    transform: scale(var(--fa-beat-scale, 1.25))
                }
            }

            @-webkit-keyframes fa-bounce {
                0% {
                    -webkit-transform: scale(1, 1) translateY(0);
                    transform: scale(1, 1) translateY(0)
                }

                10% {
                    -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0);
                    transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0)
                }

                30% {
                    -webkit-transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em));
                    transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em))
                }

                50% {
                    -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0);
                    transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0)
                }

                57% {
                    -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -.125em));
                    transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -.125em))
                }

                64% {
                    -webkit-transform: scale(1, 1) translateY(0);
                    transform: scale(1, 1) translateY(0)
                }

                100% {
                    -webkit-transform: scale(1, 1) translateY(0);
                    transform: scale(1, 1) translateY(0)
                }
            }

            @keyframes fa-bounce {
                0% {
                    -webkit-transform: scale(1, 1) translateY(0);
                    transform: scale(1, 1) translateY(0)
                }

                10% {
                    -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0);
                    transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, .9)) translateY(0)
                }

                30% {
                    -webkit-transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em));
                    transform: scale(var(--fa-bounce-jump-scale-x, .9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -.5em))
                }

                50% {
                    -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0);
                    transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, .95)) translateY(0)
                }

                57% {
                    -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -.125em));
                    transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -.125em))
                }

                64% {
                    -webkit-transform: scale(1, 1) translateY(0);
                    transform: scale(1, 1) translateY(0)
                }

                100% {
                    -webkit-transform: scale(1, 1) translateY(0);
                    transform: scale(1, 1) translateY(0)
                }
            }

            @-webkit-keyframes fa-fade {
                50% {
                    opacity: var(--fa-fade-opacity, .4)
                }
            }

            @keyframes fa-fade {
                50% {
                    opacity: var(--fa-fade-opacity, .4)
                }
            }

            @-webkit-keyframes fa-beat-fade {

                0%,
                100% {
                    opacity: var(--fa-beat-fade-opacity, .4);
                    -webkit-transform: scale(1);
                    transform: scale(1)
                }

                50% {
                    opacity: 1;
                    -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                    transform: scale(var(--fa-beat-fade-scale, 1.125))
                }
            }

            @keyframes fa-beat-fade {

                0%,
                100% {
                    opacity: var(--fa-beat-fade-opacity, .4);
                    -webkit-transform: scale(1);
                    transform: scale(1)
                }

                50% {
                    opacity: 1;
                    -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
                    transform: scale(var(--fa-beat-fade-scale, 1.125))
                }
            }

            @-webkit-keyframes fa-flip {
                50% {
                    -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                    transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg))
                }
            }

            @keyframes fa-flip {
                50% {
                    -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
                    transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg))
                }
            }

            @-webkit-keyframes fa-shake {
                0% {
                    -webkit-transform: rotate(-15deg);
                    transform: rotate(-15deg)
                }

                4% {
                    -webkit-transform: rotate(15deg);
                    transform: rotate(15deg)
                }

                24%,
                8% {
                    -webkit-transform: rotate(-18deg);
                    transform: rotate(-18deg)
                }

                12%,
                28% {
                    -webkit-transform: rotate(18deg);
                    transform: rotate(18deg)
                }

                16% {
                    -webkit-transform: rotate(-22deg);
                    transform: rotate(-22deg)
                }

                20% {
                    -webkit-transform: rotate(22deg);
                    transform: rotate(22deg)
                }

                32% {
                    -webkit-transform: rotate(-12deg);
                    transform: rotate(-12deg)
                }

                36% {
                    -webkit-transform: rotate(12deg);
                    transform: rotate(12deg)
                }

                100%,
                40% {
                    -webkit-transform: rotate(0);
                    transform: rotate(0)
                }
            }

            @keyframes fa-shake {
                0% {
                    -webkit-transform: rotate(-15deg);
                    transform: rotate(-15deg)
                }

                4% {
                    -webkit-transform: rotate(15deg);
                    transform: rotate(15deg)
                }

                24%,
                8% {
                    -webkit-transform: rotate(-18deg);
                    transform: rotate(-18deg)
                }

                12%,
                28% {
                    -webkit-transform: rotate(18deg);
                    transform: rotate(18deg)
                }

                16% {
                    -webkit-transform: rotate(-22deg);
                    transform: rotate(-22deg)
                }

                20% {
                    -webkit-transform: rotate(22deg);
                    transform: rotate(22deg)
                }

                32% {
                    -webkit-transform: rotate(-12deg);
                    transform: rotate(-12deg)
                }

                36% {
                    -webkit-transform: rotate(12deg);
                    transform: rotate(12deg)
                }

                100%,
                40% {
                    -webkit-transform: rotate(0);
                    transform: rotate(0)
                }
            }

            @-webkit-keyframes fa-spin {
                0% {
                    -webkit-transform: rotate(0);
                    transform: rotate(0)
                }

                100% {
                    -webkit-transform: rotate(360deg);
                    transform: rotate(360deg)
                }
            }

            @keyframes fa-spin {
                0% {
                    -webkit-transform: rotate(0);
                    transform: rotate(0)
                }

                100% {
                    -webkit-transform: rotate(360deg);
                    transform: rotate(360deg)
                }
            }

            .fa-rotate-90 {
                -webkit-transform: rotate(90deg);
                transform: rotate(90deg)
            }

            .fa-rotate-180 {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg)
            }

            .fa-rotate-270 {
                -webkit-transform: rotate(270deg);
                transform: rotate(270deg)
            }

            .fa-flip-horizontal {
                -webkit-transform: scale(-1, 1);
                transform: scale(-1, 1)
            }

            .fa-flip-vertical {
                -webkit-transform: scale(1, -1);
                transform: scale(1, -1)
            }

            .fa-flip-both,
            .fa-flip-horizontal.fa-flip-vertical {
                -webkit-transform: scale(-1, -1);
                transform: scale(-1, -1)
            }

            .fa-rotate-by {
                -webkit-transform: rotate(var(--fa-rotate-angle, none));
                transform: rotate(var(--fa-rotate-angle, none))
            }

            .fa-stack {
                display: inline-block;
                vertical-align: middle;
                height: 2em;
                position: relative;
                width: 2.5em
            }

            .fa-stack-1x,
            .fa-stack-2x {
                bottom: 0;
                left: 0;
                margin: auto;
                position: absolute;
                right: 0;
                top: 0;
                z-index: var(--fa-stack-z-index, auto)
            }

            .svg-inline--fa.fa-stack-1x {
                height: 1em;
                width: 1.25em
            }

            .svg-inline--fa.fa-stack-2x {
                height: 2em;
                width: 2.5em
            }

            .fa-inverse {
                color: var(--fa-inverse, #fff)
            }

            .fa-sr-only,
            .sr-only {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                border-width: 0
            }

            .fa-sr-only-focusable:not(:focus),
            .sr-only-focusable:not(:focus) {
                position: absolute;
                width: 1px;
                height: 1px;
                padding: 0;
                margin: -1px;
                overflow: hidden;
                clip: rect(0, 0, 0, 0);
                white-space: nowrap;
                border-width: 0
            }

            .svg-inline--fa .fa-primary {
                fill: var(--fa-primary-color, currentColor);
                opacity: var(--fa-primary-opacity, 1)
            }

            .svg-inline--fa .fa-secondary {
                fill: var(--fa-secondary-color, currentColor);
                opacity: var(--fa-secondary-opacity, .4)
            }

            .svg-inline--fa.fa-swap-opacity .fa-primary {
                opacity: var(--fa-secondary-opacity, .4)
            }

            .svg-inline--fa.fa-swap-opacity .fa-secondary {
                opacity: var(--fa-primary-opacity, 1)
            }

            .svg-inline--fa mask .fa-primary,
            .svg-inline--fa mask .fa-secondary {
                fill: #000
            }

            .fa-duotone.fa-inverse,
            .fad.fa-inverse {
                color: var(--fa-inverse, #fff)
            }
        </style>
        <style>
            #back-to-top {
                background: #000;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                border-radius: 50%;
                bottom: 15px;
                -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .26);
                -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .26);
                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .26);
                color: #fff;
                cursor: pointer;
                display: block;
                height: 56px;
                opacity: 1;
                outline: 0;
                position: fixed;
                right: 15px;
                -webkit-tap-highlight-color: transparent;
                -webkit-touch-callout: none;
                -webkit-transition: bottom .2s, opacity .2s;
                -o-transition: bottom .2s, opacity .2s;
                -moz-transition: bottom .2s, opacity .2s;
                transition: bottom .2s, opacity .2s;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                width: 56px;
                z-index: 1
            }

            #back-to-top svg {
                display: block;
                fill: currentColor;
                height: 24px;
                margin: 16px auto 0;
                width: 24px
            }

            #back-to-top.hidden {
                bottom: -56px;
                opacity: 0
            }
        </style>
        <title>DevStudio</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="
        ">
        <base href="{{asset('assets')}}/">
        <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600&amp;display=swap"
            rel="stylesheet">
        <!-- FontAwesome JS -->
        <!-- <script defer="" src="assets/fontawesome/js/all.js"></script> -->
        <!-- Global CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="../assets/plugins/tiny-slider/tiny-slider.css">

        <!-- Theme CSS -->
        <style>
            .service-card {
                transition: transform 0.3s ease, box-shadow 0.3s ease;
                height: 100%;
            }

            .service-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            }

            .icon-container {
                width: 80px;
                height: 80px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 20px;
            }

            .mobile-app {
                background-color: rgba(75, 192, 192, 0.1);
                color: #4bc0c0;
            }

            .web-dev {
                background-color: rgba(54, 162, 235, 0.1);
                color: #36a2eb;
            }

            .data-science {
                background-color: rgba(255, 99, 132, 0.1);
                color: #ff6384;
            }
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link id="theme-style" rel="stylesheet" href="../assets/css/theme-1.css">

        <style></style>
    </head>

    <body class="home-page">
        <div class="header-wrapper header-wrapper-home">
            <!-- ******HEADER****** -->
            <!-- <header id="header" class="header fixed-top">
                <div class="container">
                    <h1 class="logo">
                        <a href="/"><span class="highlight">Dev</span>Studio</a>
                    </h1>
                    <nav class="main-nav navbar navbar-expand-md navbar-dark">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="navbar-collapse" class="navbar-collapse collapse justify-content-end">
                            <ul class="nav navbar-nav">
                                <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="/">Work
                                        <svg class="svg-inline--fa fa-angle-down" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="angle-down" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z">
                                            </path>
                                        </svg></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/">Our Work</a></li>
                                        <li><a class="dropdown-item" href="/">Single Case Study 1</a>
                                        </li>
                                        <li> <a class="dropdown-item" href="/">Single Case Study 2</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/">Single Blog Post</a></li>
                                        <li><a class="dropdown-item" href="
                                        ">404 Page</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/">About</a></li>
                                <li class="nav-item"><a class="nav-link" href="/">Blog</a></li>
                                <li class="nav-item last"><a class="nav-link" href="/">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header> -->
            <div class="bg-carousel-wrapper">
                <div id="bg-carousel" class="bg-carousel carousel slide carousel-fade pointer-event"
                    data-bs-ride="carousel" data-bs-interval="6000">
                    <div class="carousel-inner">
                        <div class="carousel-item slide slide-1">
                            <img src="" alt="1">
                        </div>
                        <div class="carousel-item slide slide-2">
                            <img src="" alt="2">
                        </div>
                        <div class="carousel-item slide slide-3 active">
                            <img src="" alt="3">
                        </div>
                    </div>
                </div><!--//bg-carousel-->
            </div><!--//bg-carousel-wrapper-->
            <section id="home-promo" class="home-promo section">
                <div class="container text-center">
                    <h2 class="title">
                        <span class="upper">We build</span>
                        <span class="middle">Web and Mobile Apps</span>
                        <span class="bottom">for startups and agencies</span>
                    </h2>
                    <button class="btn btn-cta btn-cta-primary" type="button" data-bs-toggle="modal"
                        data-bs-target="#modal-contact" data-bs-backdrop="static">Talk to us</button>
                </div><!--//container-->
            </section><!--//promo-->
        </div><!--//header-wrapper-->

        <!-- ******Why Section****** -->
        <section id="who" class="who section">
            <div class="container text-center">
                <h2 class="title text-center">Who We Are</h2>
                <p class="intro text-center">We're a compact team of web developers and designers specializing in
                    JavaScript, AngularJS and Python development. We build digital solutions with precision and passion.
                </p>
                <div class="row benefits text-center">
                    <div class="item col-lg-3 col-md-6 col-12">
                        <div class="item-inner rounded">
                            <!--//You can replace the SVG icon below to your preferred Bootstrap icon - https://icons.getbootstrap.com/ -->
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zm7.973.056v-.002.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z">
                                </path>
                            </svg>
                            <h3 class="sub-title">Skilled team</h3>
                            <div class="desc">
                                <p>Tell your potential client why they should choose your service and how you are
                                    different from your competitors. Lorem ipsum dolor sit amet. </p>
                            </div>
                        </div>
                    </div><!--//item-->
                    <div class="item col-lg-3 col-md-6 col-12">
                        <div class="item-inner rounded">
                            <!--//You can replace the SVG icon below to your preferred Bootstrap icon - https://icons.getbootstrap.com/ -->
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-repeat"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z">
                                </path>
                            </svg>
                            <h3 class="sub-title">Agile approach</h3>
                            <div class="desc">
                                <p>You can change the icon above to any of the 1000+ <a class="text-link"
                                        href="/">Bootstrap SVG icons</a> available. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item col-lg-3 col-md-6 col-12">
                        <div class="item-inner rounded">
                            <!--//You can replace the SVG icon below to your preferred Bootstrap icon - https://icons.getbootstrap.com/ -->
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-code"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z">
                                </path>
                                <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"></path>
                                <path fill-rule="evenodd"
                                    d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z">
                                </path>
                            </svg>
                            <h3 class="sub-title">High quality code</h3>
                            <div class="desc">
                                <p>Morbi sit amet interdum lorem. Donec vel pretium sem, bibendum lobortis ipsum. Fusce
                                    molestie eros eget tortor convallis aliquam. </p>
                            </div>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item col-lg-3 col-md-6 col-12">
                        <div class="item-inner rounded">
                            <!--//You can replace the SVG icon below to your preferred Bootstrap icon - https://icons.getbootstrap.com/ -->
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-graph-down"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z"></path>
                                <path fill-rule="evenodd"
                                    d="M14.39 9.041l-4.349-5.436L7 6.646 3.354 3l-.708.707L7 8.061l2.959-2.959 3.65 4.564.781-.625z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M10 9.854a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-1 0v3.5h-3.5a.5.5 0 0 0-.5.5z">
                                </path>
                            </svg>

                            <h3 class="sub-title">No overheads</h3>
                            <div class="desc">
                                <p>Proin ornare dolor elementum mattis scelerisque. Suspendisse non scelerisque elit.
                                    Morbi ac nibh finibus nibh ultricies placerat.</p>
                            </div>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                </div><!--//row-->
                <!-- <a class="btn btn-cta btn-cta-secondary" href="
                ">More about us</a> -->
            </div><!--//container-->
        </section><!--//who-->
        <div class="container py-5">
            <div class="row g-4">
                <!-- Mobile App Development Card -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center p-4">
                            <div class="icon-container mobile-app">
                                <i class="fas fa-mobile-alt fa-3x"></i>
                            </div>
                            <h3 class="card-title">Mobile App Development</h3>
                            <p class="card-text">
                                Create powerful cross-platform mobile applications with React Native or Flutter for iOS
                                and Android.
                            </p>
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#modal-contact" data-bs-backdrop="static">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Web Development Card -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center p-4">
                            <div class="icon-container web-dev">
                                <i class="fas fa-code fa-3x"></i>
                            </div>
                            <h3 class="card-title">Web Development</h3>
                            <p class="card-text">
                                Build responsive, modern websites and web applications using React, Angular, or Vue.js.
                            </p>
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#modal-contact" data-bs-backdrop="static">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Data Science Card -->
                <div class="col-md-4">
                    <div class="card service-card">
                        <div class="card-body text-center p-4">
                            <div class="icon-container data-science">
                                <i class="fas fa-chart-line fa-3x"></i>
                            </div>
                            <h3 class="card-title">Data Science</h3>
                            <p class="card-text">
                                Extract insights from your data with machine learning, statistical analysis, and
                                visualization.
                            </p>
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#modal-contact" data-bs-backdrop="static">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ******Latest work section****** -->
        <section id="latest-work" class="latest-work section">
            <div class="container-fluid text-center">
                <h2 class="title text-center">Our Latest Work</h2>
                <div class="tns-outer" id="work-slider-ow">
                    <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span
                            class="current">5</span> of 3</div>
                    <div id="work-slider-mw" class="tns-ovh">
                        <div class="tns-inner" id="work-slider-iw">
                            <div id="work-slider"
                                class="items work-slider  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                style="transform: translate3d(-80%, 0px, 0px);">
                                <div class="item item-3 tns-item tns-slide-cloned" aria-hidden="true" tabindex="-1">
                                    <div class="row">
                                        <figure class="figure-container col-lg-6 col-12">
                                            <a class="img-link" href="/"></a>
                                        </figure>
                                        <div class="content col-lg-6 col-12">
                                            <div class="content-inner">
                                                <h3 class="project-title"><a class="text-link" href="/">Case Study Three
                                                        Heading</a></h3>
                                                <ul class="meta list-unstyled">
                                                    <li><strong class="me-1">Client:</strong> Dropbox</li>
                                                    <li><strong class="me-1">What we did:</strong> Site design &amp;
                                                        development</li>
                                                </ul><!--//meta-->
                                                <div class="desc">
                                                    <p>Sed ornare suscipit risus, sed elementum justo porta ac. Duis
                                                        ultricies lobortis nibh sed facilisis. Etiam eu leo sapien.
                                                        Integer gravida at urna ac bibendum. Nullam eu orci at felis
                                                        fermentum lobortis...</p>
                                                    <p class="link mb-2"><svg class="svg-inline--fa fa-briefcase"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="briefcase" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-briefcase"></i> Font Awesome fontawesome.com -->
                                                        <a class="more-link text-link" href="/">Read
                                                            full case study</a>
                                                    </p>
                                                    <p class="link"><svg class="svg-inline--fa fa-up-right-from-square"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="up-right-from-square" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V32c0-17.7-14.3-32-32-32H352zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-external-link-alt"></i> Font Awesome fontawesome.com -->
                                                        <a class="site-link text-link" href="/">Website link</a>
                                                    </p>
                                                </div><!--//desc-->
                                            </div><!--//conten-inner-->
                                        </div><!--//content-->
                                    </div><!--//row-->
                                </div>
                                <div class="item item-1 tns-item" id="work-slider-item0" aria-hidden="true"
                                    tabindex="-1">
                                    <div class="row">
                                        <figure class="figure-container col-lg-6 col-12">
                                            <a href="/"></a>
                                        </figure>
                                        <div class="content col-lg-6 col-12">
                                            <div class="content-inner">
                                                <h3 class="project-title"><a class="text-link" href="/">Case Study One
                                                        Heading</a></h3>
                                                <ul class="meta list-unstyled">
                                                    <li><strong class="me-1">Client:</strong> Google</li>
                                                    <li><strong class="me-1">What we did:</strong> SaaS development, UX
                                                        design</li>
                                                </ul><!--//meta-->
                                                <div class="desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                                        sodales dolor ut ligula faucibus, nec mattis nibh eleifend. Duis
                                                        et enim at lacus pharetra mollis molestie nec magna. Maecenas
                                                        tristique laoreet tristique...</p>
                                                </div><!--//desc-->
                                                <p class="link mb-2"><svg class="svg-inline--fa fa-briefcase"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="briefcase" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-briefcase"></i> Font Awesome fontawesome.com -->
                                                    <a class="more-link text-link" href="/">Read full
                                                        case study</a>
                                                </p>
                                                <p class="link"><svg class="svg-inline--fa fa-up-right-from-square"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="up-right-from-square" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V32c0-17.7-14.3-32-32-32H352zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-external-link-alt"></i> Font Awesome fontawesome.com -->
                                                    <a class="site-link text-link" href="/">Website
                                                        link</a>
                                                </p>
                                            </div><!--//content-inner-->
                                        </div><!--//content-->
                                    </div><!--//row-->
                                </div><!--//item-->
                                <div class="item item-2 tns-item" id="work-slider-item1" aria-hidden="true"
                                    tabindex="-1">
                                    <div class="row">
                                        <figure class="figure-container col-lg-6 col-12">
                                            <a class="img-link" href="/"></a>
                                        </figure>
                                        <div class="content col-lg-6 col-12">
                                            <div class="content-inner">
                                                <h3 class="project-title"><a class="text-link" href="
                                                        ">Case Study Two Heading</a></h3>
                                                <ul class="meta list-unstyled">
                                                    <li><strong class="me-1">Client:</strong> Amazon</li>
                                                    <li><strong class="me-1">What we did:</strong> App development</li>
                                                </ul><!--//meta-->
                                                <div class="desc">
                                                    <p>Mauris in vestibulum ex. Donec vel malesuada tortor. Etiam
                                                        consequat semper pulvinar. Integer sit amet felis nisl. Proin
                                                        leo metus, volutpat vel fringilla vel, faucibus et mi. Duis
                                                        finibus erat erat, quis mollis...</p>
                                                </div><!--//desc-->
                                                <p class="link mb-2"><svg class="svg-inline--fa fa-briefcase"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="briefcase" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-briefcase"></i> Font Awesome fontawesome.com -->
                                                    <a class="more-link text-link" href="/">Read full
                                                        case study</a>
                                                </p>
                                                <p class="link"><svg class="svg-inline--fa fa-up-right-from-square"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="up-right-from-square" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V32c0-17.7-14.3-32-32-32H352zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-external-link-alt"></i> Font Awesome fontawesome.com -->
                                                    <a class="site-link text-link" href="/">Website
                                                        link</a>
                                                </p>
                                            </div><!--//content-inner-->
                                        </div><!--//content-->
                                    </div><!--//row-->
                                </div><!--//item-->
                                <div class="item item-3 tns-item" id="work-slider-item2" aria-hidden="true"
                                    tabindex="-1">
                                    <div class="row">
                                        <figure class="figure-container col-lg-6 col-12">
                                            <a class="img-link" href="/"></a>
                                        </figure>
                                        <div class="content col-lg-6 col-12">
                                            <div class="content-inner">
                                                <h3 class="project-title"><a class="text-link" href="
                                                        ">Case Study Three Heading</a></h3>
                                                <ul class="meta list-unstyled">
                                                    <li><strong class="me-1">Client:</strong> Dropbox</li>
                                                    <li><strong class="me-1">What we did:</strong> Site design &amp;
                                                        development</li>
                                                </ul><!--//meta-->
                                                <div class="desc">
                                                    <p>Sed ornare suscipit risus, sed elementum justo porta ac. Duis
                                                        ultricies lobortis nibh sed facilisis. Etiam eu leo sapien.
                                                        Integer gravida at urna ac bibendum. Nullam eu orci at felis
                                                        fermentum lobortis...</p>
                                                    <p class="link mb-2"><svg class="svg-inline--fa fa-briefcase"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="briefcase" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-briefcase"></i> Font Awesome fontawesome.com -->
                                                        <a class="more-link text-link" href="/">Read
                                                            full case study</a>
                                                    </p>
                                                    <p class="link"><svg class="svg-inline--fa fa-up-right-from-square"
                                                            aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="up-right-from-square" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V32c0-17.7-14.3-32-32-32H352zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-external-link-alt"></i> Font Awesome fontawesome.com -->
                                                        <a class="site-link text-link" href="/">Website link</a>
                                                    </p>
                                                </div><!--//desc-->
                                            </div><!--//conten-inner-->
                                        </div><!--//content-->
                                    </div><!--//row-->
                                </div><!--//item-->
                                <div class="item item-1 tns-item tns-slide-cloned tns-slide-active">
                                    <div class="row">
                                        <figure class="figure-container col-lg-6 col-12">
                                            <a href="/"></a>
                                        </figure>
                                        <div class="content col-lg-6 col-12">
                                            <div class="content-inner">
                                                <h3 class="project-title"><a class="text-link" href="
                                                        ">Case Study One Heading</a></h3>
                                                <ul class="meta list-unstyled">
                                                    <li><strong class="me-1">Client:</strong> Google</li>
                                                    <li><strong class="me-1">What we did:</strong> SaaS development, UX
                                                        design</li>
                                                </ul><!--//meta-->
                                                <div class="desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                                        sodales dolor ut ligula faucibus, nec mattis nibh eleifend. Duis
                                                        et enim at lacus pharetra mollis molestie nec magna. Maecenas
                                                        tristique laoreet tristique...</p>
                                                </div><!--//desc-->
                                                <p class="link mb-2"><svg class="svg-inline--fa fa-briefcase"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="briefcase" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 320 512V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM512 288H320v32c0 17.7-14.3 32-32 32H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V288z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-briefcase"></i> Font Awesome fontawesome.com -->
                                                    <a class="more-link text-link" href="/">Read full
                                                        case study</a>
                                                </p>
                                                <p class="link"><svg class="svg-inline--fa fa-up-right-from-square"
                                                        aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="up-right-from-square" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M352 0c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9L370.7 96 201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L416 141.3l41.4 41.4c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V32c0-17.7-14.3-32-32-32H352zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z">
                                                        </path>
                                                    </svg><!-- <i class="fas fa-external-link-alt"></i> Font Awesome fontawesome.com -->
                                                    <a class="site-link text-link" href="/">Website
                                                        link</a>
                                                </p>
                                            </div><!--//content-inner-->
                                        </div><!--//content-->
                                    </div><!--//row-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="tns-nav" aria-label="Carousel Pagination"><button type="button" data-nav="0"
                            aria-controls="work-slider" style="" aria-label="Carousel Page 1 (Current Slide)"
                            class="tns-nav-active"></button><button type="button" data-nav="1"
                            aria-controls="work-slider" style="" aria-label="Carousel Page 2" class=""
                            tabindex="-1"></button><button type="button" data-nav="2" aria-controls="work-slider"
                            style="" aria-label="Carousel Page 3" class="" tabindex="-1"></button></div>
                </div> -->
                    <!-- <a class="btn btn-cta btn-cta-secondary" href="
                    ">View all case studies</a> -->
                </div><!--container-fluid-->
        </section>

        <!-- ******Testimonials Section****** -->
        <!-- <section id="testimonials" class="testimonials section">
            <div class="container">
                <h2 class="title text-center">Testimonials</h2>
                <p class="intro text-center">Don’t just take our word for it – see what our clients are saying</p>
                <div class="row">
                    <div class="item col-lg-6 col-12 px-5">
                        <div class="item-inner">
                            <div class="quote-container">
                                <svg class="svg-inline--fa fa-quote-left" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="quote-left" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z">
                                    </path>
                                </svg>
                                <blockquote class="quote">We had great experience working with Phasellus ut cursus
                                    tellus. Etiam ullamcorper varius diam, nec consequat dolor gravida non. Nullam
                                    commodo feugiat arcu, ut scelerisque nisl vulputate eget. Cras a euismod elit.

                                </blockquote>
                            </div>
                            <div class="meta row">
                                <div class="profile col-8">
                                    <img src="{{ asset('./assets/images/client/client-profile-1.png') }}" alt="">
                                    <p class="name">Katherine Hamilton<br>
                                        <span class="source-title">Product Manager</span>
                                    </p>
                                </div>
                                <div class="client-logo col align-self-center">
                                    <img src="{{ asset('./assets/images/client/client-logo-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item col-lg-6 col-12 px-5">
                        <div class="item-inner">
                            <div class="quote-container">
                                <svg class="svg-inline--fa fa-quote-left" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="quote-left" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z">
                                    </path>
                                </svg>
                                <blockquote class="quote">Cras condimentum erat vel quam dignissim, eu venenatis velit
                                    porta. Praesent fermentum, mi sit amet mollis fringilla, ex risus condimentum
                                    mauris, at dapibus ipsum turpis non ipsum.
                                </blockquote>
                            </div>
                            <div class="meta row">
                                <div class="profile col-8">
                                    <img src="{{ asset('assets/images/client/client-profile-2.png') }}" alt="">
                                    <p class="name">Aaron Brown<br>
                                        <span class="source-title">Marketing Director</span>
                                    </p>
                                </div>
                                <div class="client-logo col align-self-center">
                                    <img src="{{ asset('assets/images/client/client-logo-2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="item col-lg-6 col-12 px-5">
                        <div class="item-inner">
                            <div class="quote-container">
                                <svg class="svg-inline--fa fa-quote-left" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="quote-left" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z">
                                    </path>
                                </svg>
                                <blockquote class="quote">Pellentesque nec maximus justo, a ultrices ligula. Duis
                                    sollicitudin suscipit arcu eget interdum. Nullam et porttitor sem, id iaculis eros.
                                    Sed feugiat leo et ligula pulvinar, et lobortis velit pretium.
                                </blockquote>
                            </div>
                            <div class="meta row">
                                <div class="profile col-8">
                                    <img src="{{ asset('assets/images/client/client-profile-3.png') }}" alt="">
                                    <p class="name">Phillip Perry<br>
                                        <span class="source-title">Product Manager</span>
                                    </p>
                                </div>
                                <div class="client-logo col align-self-center">
                                    <img src="{{ asset('assets/images/client/client-logo-3.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item col-lg-6 col-12 px-5">
                        <div class="item-inner">
                            <div class="quote-container">
                                <svg class="svg-inline--fa fa-quote-left" aria-hidden="true" focusable="false"
                                    data-prefix="fas" data-icon="quote-left" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z">
                                    </path>
                                </svg>
                                <blockquote class="quote">We are impressed by lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Maecenas tellus nisi, maximus vel risus vel, fermentum faucibus
                                    magna. Aliquam sed aliquet eros. Nunc nec aliquet ligula.
                                </blockquote>
                            </div>
                            <div class="meta row">
                                <div class="profile col-8">
                                    <img src="{{ asset('assets/images/client/client-profile-4.png') }}" alt="">
                                    <p class="name">Victoria Simmons<br>
                                        <span class="source-title">Product Designer</span>
                                    </p>
                                </div>
                                <div class="client-logo col align-self-center">
                                    <img src="{{ asset('assets/images/client/client-logo-4.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section> -->

        <!-- ******Logos Section****** -->
        <section id="logos" class="logos section">
            <div class="container text-center">
                <h2 class="title">Who we have worked with</h2>
                <ul class="logo-list list-inline row">
                    <li class="col-md-3 col-6"><img class="img-fluid"
                            src="{{ asset('assets/images/logos/logo-1.png') }}" alt=""></li>
                    <li class="col-md-3 col-6"><img class="img-fluid"
                            src="{{ asset('assets/images/logos/logo-2.png') }}" alt=""></li>
                    <li class="col-md-3 col-6"><img class="img-fluid"
                            src="{{ asset('assets/images/logos/logo-3.png') }}" alt=""></li>
                    <li class="col-md-3 col-6"><img class="img-fluid"
                            src="{{ asset('assets/images/logos/logo-4.png') }}" alt=""></li>
                </ul><!--//logo-list-->
                <ul class="logo-list list-inline row last">
                    <li class="col-md-3 col-6"><img class="img-fluid"
                            src="{{ asset('assets/images/logos/logo-5.png') }}" alt=""></li>
                    <li class="col-md-3 col-6"><img class="img-fluid"
                            src="{{ asset('assets/images/logos/logo-6.png') }}" alt=""></li>
                    <li class="col-md-3 col-6"><img class="img-fluid"
                            src="{{ asset('assets/images/logos/logo-7.png') }}" alt=""></li>
                    <li class="col-md-3 col-6"><img class="img-fluid"
                            src="{{ asset('assets/images/logos/logo-8.png') }}" alt=""></li>
                </ul><!--//logos-list-->
            </div><!--//container-->
        </section><!--//logos-->

        <!-- ******CTA Section****** -->
        <section id="cta-section" class="cta-section section text-center home-cta-section">
            <div class="container">
                <h2 class="title">Want to have a quick chat?</h2>
                <p class="phone contact-info">
                    <span class="intro">We are only a phone call away</span>
                    <span class="info"><a class="text-link" href="tel:+918882930328">+91-8882 (930)-328</a></span>
                </p><!--//phone-->
                <p class="email contact-info">
                    <span class="intro">You can also email us</span>
                    <span class="info"><a class="text-link"
                            href="mailto:infytechsolutions08@gmail.com">infytechsolutions08@gmail.com</a></span>
                </p><!--//phone-->
            </div><!--//container-->
        </section><!--//cta-section-->

        <!-- ******Latest blog Section****** -->
        <section id="latest-blog" class="latest-blog section">
            <div class="container">
                <h2 class="title text-center">Latest Blog Posts</h2>
                <div class="row justify-content-center">
                    <div class="item col-xl-4 col-md-6 col-12">
                        <div class="item-inner rounded">
                            <figure class="figure rounded-top">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/blog-thumb-1.jpg') }}" alt="">
                            </figure>
                            <div class="content-wrapper text-center">
                                <h3 class="sub-title">DevStudio Helps XYZ
                                        Launch</h3>
                                <div class="desc">
                                    <p>ur team successfully launched a cutting-edge mobile solution designed to
                                        streamline data insights and enhance user engagement. Explore the intuitive UI
                                        and smart analytics built to scale.</p>
                                </div><!--//desc-->
                            </div><!--//content-wrapper text-center-->
                        </div><!--//item-inner-->
                    </div><!--//item-->

                    <div class="item col-xl-4 col-md-6 col-12">
                        <div class="item-inner rounded">
                            <figure class="figure rounded-top">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/blog-thumb-2.jpg') }}" alt="">
                            </figure>
                            <div class="content-wrapper text-center">
                                <h3 class="sub-title">Free Bootstrap
                                        Themes</h3>
                                <div class="desc">
                                    <p>Download sleek, responsive themes powered by Bootstrap. Built for developers and
                                        designers who value aesthetics, speed, and flexibility Download now vitae tincidunt lacus scelerisque.</p>
                                </div><!--//desc-->
                            </div><!--//content-wrapper text-center-->
                        </div><!--//item-inner-->
                    </div><!--//item-->

                    <div class="item col-xl-4 col-md-6 col-12">
                        <div class="item-inner rounded">
                            <figure class="figure rounded-top">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/blog-thumb-3.jpg') }}" alt="">
                            </figure>
                            <div class="content-wrapper text-center">
                                <h3 class="sub-title">DevStudio Launches Innovative App</h3>
                                <div class="desc">
                                    <p>Behind every pixel-perfect product is a passionate team. At DevStudio, our
                                        engineers, designers, and strategists work together to deliver seamless digital
                                        experiences.</p>
                                </div><!--//desc-->
                            </div><!--//content-wrapper text-center-->
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item col-xl-4 col-md-6 col-12">
                        <div class="item-inner rounded">
                            <figure class="figure rounded-top">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/blog-thumb-4.jpg') }}" alt="">
                            </figure>
                            <div class="content-wrapper text-center">
                                <h3 class="sub-title">Insights from Industry Bestsellers</h3>
                                <div class="desc">
                                    <p>Gain wisdom from top business and leadership books — from growth strategies to
                                        innovation frameworks. Perfect for entrepreneurs and professionals ready to
                                        level up.
                                    </p>
                                </div><!--//desc-->
                            </div><!--//content-wrapper text-center-->
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item col-xl-4 col-md-6 col-12">
                        <div class="item-inner rounded">
                            <figure class="figure rounded-top">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/blog-thumb-5.jpg') }}" alt="">
                            </figure>
                            <div class="content-wrapper text-center">
                                <h3 class="sub-title">Design That Delivers
                                </h3>
                                <div class="desc">
                                    <p>Collaborate. Prototype. Iterate. We empower teams to bring bold ideas to life
                                        with seamless design systems and real-time collaboration tools.
                                    </p>
                                </div><!--//desc-->
                            </div><!--//content-wrapper text-center-->
                        </div><!--//item-inner-->
                    </div><!--//item-->
                    <div class="item col-xl-4 col-md-6 col-12">
                        <div class="item-inner rounded">
                            <figure class="figure rounded-top">
                                <img class="img-fluid" src="{{ asset('assets/images/blog/blog-thumb-6.jpg') }}" alt="">
                            </figure>
                            <div class="content-wrapper text-center">
                                <h3 class="sub-title">Master Mobile UX Principles
                                </h3>
                                <div class="desc">
                                    <p>Master Mobile UX Principles
                                    </p>
                                </div><!--//desc-->
                            </div><!--//content-wrapper text-center-->
                        </div><!--//item-inner-->
                    </div><!--//item-->
                </div><!--//row-->
            </div><!--//container-->
        </section><!--//latest-blog-->

        <!-- ******FOOTER****** -->
        <footer class="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        
                        <div class="footer-col col-lg-6 col-md-8 col-12 blog-col">
                            <div class="footer-col-inner">
                                <h3 class="sub-title">Latest From Our Blog</h3>
                                <div class="item">
                                    <figure class="figure">
                                        <img class="img-fluid rounded"
                                            src="{{ asset('assets/images/blog/blog-tiny-thumb-1.jpg') }}" alt="">
                                    </figure>
                                    <div class="content">
                                        <h4 class="post-title">DevStudio helps XYZ launch
                                        </h4>
                                        <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                                            sodales dolor ut ligula faucibus...</p>
                                        <ul class="meta list-inline">
                                            <li class="list-inline-item">18 Feb</li>
                                            <li class="list-inline-item">|</li>
                                            <li class="list-inline-item">James Lee</li>
                                        </ul>
                                    </div><!--//content-->
                                </div>
                                <div class="item">
                                    <figure class="figure">
                                        <img class="img-fluid rounded"
                                            src="{{ asset('assets/images/blog/blog-tiny-thumb-2.jpg') }}" alt="">
                                    </figure>
                                    <div class="content">
                                        <h4 class="post-title"><a href="
                                        ">Free Bootstrap Themes</a></h4>
                                        <p class="intro">Mauris libero leo, dapibus a congue ut, mollis sed nulla. Lorem
                                            ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus augue nec nulla
                                            ultricies...</p>
                                        <ul class="meta list-inline">
                                            <li class="list-inline-item">21 Dec</li>
                                            <li class="list-inline-item">|</li>
                                            <li class="list-inline-item">Vincent Fowler</li>
                                        </ul>
                                    </div><!--//content-->
                                </div>
                            </div><!--//footer-col-inner-->
                        </div><!--//foooter-col-->
                        <div class="footer-col col-lg-3 col-12 contact-col">
                            <div class="footer-col-inner">
                                <h3 class="sub-title">Get In Touch</h3>
                                <p class="intro"></p>
                                <div class="row">
                                    <p class="adr clearfix col-lg-12 col-md-4">
                                        <!--//You can replace the SVG icon below to your preferred Bootstrap icon - https://icons.getbootstrap.com/ -->
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-geo me-2"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 4a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                            <path d="M7.5 4h1v9a.5.5 0 0 1-1 0V4z"></path>
                                            <path fill-rule="evenodd"
                                                d="M6.489 12.095a.5.5 0 0 1-.383.594c-.565.123-1.003.292-1.286.472-.302.192-.32.321-.32.339 0 .013.005.085.146.21.14.124.372.26.701.382.655.246 1.593.408 2.653.408s1.998-.162 2.653-.408c.329-.123.56-.258.701-.382.14-.125.146-.197.146-.21 0-.018-.018-.147-.32-.339-.283-.18-.721-.35-1.286-.472a.5.5 0 1 1 .212-.977c.63.137 1.193.34 1.61.606.4.253.784.645.784 1.182 0 .402-.219.724-.483.958-.264.235-.618.423-1.013.57-.793.298-1.855.472-3.004.472s-2.21-.174-3.004-.471c-.395-.148-.749-.336-1.013-.571-.264-.234-.483-.556-.483-.958 0-.537.384-.929.783-1.182.418-.266.98-.47 1.611-.606a.5.5 0 0 1 .595.383z">
                                            </path>
                                        </svg>
                                        <span class="adr-group">
                                            <span class="street-address">56 College Green Road</span><br>
                                            <span class="city">London</span><br>
                                            <span class="postal-code">SW1Y 4GG</span><br>
                                            <span class="country-name">UK</span>
                                        </span>
                                    </p>
                                    <p class="tel col-lg-12 col-md-4 col-12">
                                        <!--//You can replace the SVG icon below to your preferred Bootstrap icon - https://icons.getbootstrap.com/ -->
                                        <svg width="1.25em" height="1.25em" viewBox="0 0 16 16"
                                            class="bi bi-headset me-2" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 1a5 5 0 0 0-5 5v4.5H2V6a6 6 0 1 1 12 0v4.5h-1V6a5 5 0 0 0-5-5z">
                                            </path>
                                            <path
                                                d="M11 8a1 1 0 0 1 1-1h2v4a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V8zM5 8a1 1 0 0 0-1-1H2v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V8z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M13.5 8.5a.5.5 0 0 1 .5.5v3a2.5 2.5 0 0 1-2.5 2.5H8a.5.5 0 0 1 0-1h3.5A1.5 1.5 0 0 0 13 12V9a.5.5 0 0 1 .5-.5z">
                                            </path>
                                            <path d="M6.5 14a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1z"></path>
                                        </svg>
                                        <a href="tel:+918882930328">+91-8882 (930)-328</a>
                                    </p>
                                    <p class="email col-lg-12 col-md-4 col-12">
                                        <!--//You can replace the SVG icon below to your preferred Bootstrap icon - https://icons.getbootstrap.com/ -->
                                        <svg width="1.25em" height="1.25em" viewBox="0 0 16 16"
                                            class="bi bi-envelope me-2" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z">
                                            </path>
                                        </svg><a href="#">infytechsolutions08@gmail.com</a>
                                    </p>
                                </div>
                            </div><!--//footer-col-inner-->
                        </div><!--//foooter-col-->
                    </div>
                </div>
            </div><!--//footer-content-->
            <div class="bottom-bar">
                <div class="container center">
                    <ul class="social-icons list-inline">
                        <li class="list-inline-item"><a href="
                        "><svg class="svg-inline--fa fa-x-twitter" aria-hidden="true" focusable="false"
                                    data-prefix="fab" data-icon="x-twitter" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z">
                                    </path>
                                </svg><!-- <i class="fa-brands fa-x-twitter"></i> Font Awesome fontawesome.com --></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><svg class="svg-inline--fa fa-facebook-f"
                                    aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                    data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                                    </path>
                                </svg><!-- <i class="fa-brands fa-facebook-f"></i> Font Awesome fontawesome.com --></a>
                        </li>
                        <li class="list-inline-item"><a href="
                        "><svg class="svg-inline--fa fa-github-alt" aria-hidden="true" focusable="false"
                                    data-prefix="fab" data-icon="github-alt" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M186.1 328.7c0 20.9-10.9 55.1-36.7 55.1s-36.7-34.2-36.7-55.1 10.9-55.1 36.7-55.1 36.7 34.2 36.7 55.1zM480 278.2c0 31.9-3.2 65.7-17.5 95-37.9 76.6-142.1 74.8-216.7 74.8-75.8 0-186.2 2.7-225.6-74.8-14.6-29-20.2-63.1-20.2-95 0-41.9 13.9-81.5 41.5-113.6-5.2-15.8-7.7-32.4-7.7-48.8 0-21.5 4.9-32.3 14.6-51.8 45.3 0 74.3 9 108.8 36 29-6.9 58.8-10 88.7-10 27 0 54.2 2.9 80.4 9.2 34-26.7 63-35.2 107.8-35.2 9.8 19.5 14.6 30.3 14.6 51.8 0 16.4-2.6 32.7-7.7 48.2 27.5 32.4 39 72.3 39 114.2zm-64.3 50.5c0-43.9-26.7-82.6-73.5-82.6-18.9 0-37 3.4-56 6-14.9 2.3-29.8 3.2-45.1 3.2-15.2 0-30.1-.9-45.1-3.2-18.7-2.6-37-6-56-6-46.8 0-73.5 38.7-73.5 82.6 0 87.8 80.4 101.3 150.4 101.3h48.2c70.3 0 150.6-13.4 150.6-101.3zm-82.6-55.1c-25.8 0-36.7 34.2-36.7 55.1s10.9 55.1 36.7 55.1 36.7-34.2 36.7-55.1-10.9-55.1-36.7-55.1z">
                                    </path>
                                </svg><!-- <i class="fa-brands fa-github-alt"></i> Font Awesome fontawesome.com --></a>
                        </li>
                        <li class="list-inline-item last"><a href="#"><svg class="svg-inline--fa fa-linkedin-in"
                                    aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                    data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                    </path>
                                </svg><!-- <i class="fa-brands fa-linkedin-in"></i> Font Awesome fontawesome.com --></a>
                        </li>
                    </ul>
                    <small class="copyright text-center">Template Copyright @ <a href="
                    " target="_blank">3rd Wave Media</a></small>
                </div><!--//container-->
            </div><!--//bottom-bar-->
        </footer>

        <!-- Contact Modal -->
        <div class="modal modal-contact" id="modal-contact" tabindex="-1" role="dialog"
            aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        <h5 id="contactModalLabel" class="modal-title">Start your project today</h5>
                    </div>
                    <div class="modal-body">
                        <p class="intro text-center">Tell us about your vision and let’s build something exceptional together. Whether you need a new website, a mobile app, or a custom solution — our team is here to help.</p>
                        <ul class="contact-info list-inline text-center">
                            <li class="tel list-inline-item">
                                <div class="icon-holder mb-3">

                                    <!--//You can replace the SVG icon below to your preferred Bootstrap icon - https://icons.getbootstrap.com/ -->
                                    <svg width="1.25em" height="1.25em" viewBox="0 0 16 16"
                                        class="bi bi-telephone-inbound" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M3.925 1.745a.636.636 0 0 0-.951-.059l-.97.97c-.453.453-.62 1.095-.421 1.658A16.47 16.47 0 0 0 5.49 10.51a16.47 16.47 0 0 0 6.196 3.907c.563.198 1.205.032 1.658-.421l.97-.97a.636.636 0 0 0-.06-.951l-2.162-1.682a.636.636 0 0 0-.544-.115l-2.052.513a1.636 1.636 0 0 1-1.554-.43L5.64 8.058a1.636 1.636 0 0 1-.43-1.554l.513-2.052a.636.636 0 0 0-.115-.544L3.925 1.745zM2.267.98a1.636 1.636 0 0 1 2.448.153l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.471 17.471 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z">
                                        </path>
                                    </svg>

                                </div>
                                <div>
                                    <a class="text-link" href="+918882930328">+91-8882 (930)-328</a>
                                </div>
                            </li>
                            <li class="email list-inline-item">
                                <div class="icon-holder mb-3">
                                    <!--//You can replace the SVG icon below to your preferred Bootstrap icon - https://icons.getbootstrap.com/ -->
                                    <svg width="1.25em" height="1.25em" viewBox="0 0 16 16" class="bi bi-envelope"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <a class="text-link" href="#">infytechsolutions08@gmail.com</a>
                                </div>
                            </li>
                        </ul>
                        <form id="whatsappForm" class="contact-form">
                            <div class="row text-center">
                                <div class="contact-form-inner">
                                    <div class="row g-3">

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label class="sr-only" for="cname">Your name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Your name" minlength="2" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <label class="sr-only" for="cemail">Email address</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Your email address" required="">
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <label class="sr-only" for="cmessage">Your message</label>
                                            <textarea class="form-control" id="message" name="message"
                                                placeholder="Enter your message" rows="12" required=""></textarea>
                                        </div>
                                        <div class="col-lg-12 col-12">
                                            <button type="submit" class="btn w-100 btn-cta btn-cta-primary">Send
                                                Message</button>
                                        </div>
                                    </div><!--//row-->
                                </div>
                            </div><!--//row-->
                        </form><!--//contact-form-->
                    </div><!--//modal-body-->
                </div><!--//modal-content-->
            </div><!--//modal-dialog-->
        </div><!--//modal-->

        <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->
        <div id="config-panel" class="config-panel config-panel-hide d-none d-lg-block">
            <div class="panel-inner">
                <a id="config-trigger" class="config-trigger" href="#">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-sliders" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M14 3.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM11.5 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM7 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM4.5 10a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9.5 3.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0zM11.5 15a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z">
                        </path>
                        <path fill-rule="evenodd"
                            d="M9.5 4H0V3h9.5v1zM16 4h-2.5V3H16v1zM9.5 14H0v-1h9.5v1zm6.5 0h-2.5v-1H16v1zM6.5 9H16V8H6.5v1zM0 9h2.5V8H0v1z">
                        </path>
                    </svg></a>
                <h5>Choose Colour</h5>
                <ul id="color-options" class="list-unstyled list-inline">
                    <li class="list-inline-item theme-1 active"><a data-style="assets/css/theme-1.css" href="#"></a>
                    </li>
                    <li class="list-inline-item theme-2"><a data-style="assets/css/theme-2.css" href="#"></a></li>
                    <li class="list-inline-item theme-3"><a data-style="assets/css/theme-3.css" href="#"></a></li>
                    <li class="list-inline-item theme-4"><a data-style="assets/css/theme-4.css" href="#"></a></li>
                    <li class="list-inline-item theme-5"><a data-style="assets/css/theme-5.css" href="#"></a></li>
                    <li class="list-inline-item theme-6"><a data-style="assets/css/theme-6.css" href="#"></a></li>
                    <li class="list-inline-item theme-7"><a data-style="assets/css/theme-7.css" href="#"></a></li>
                    <li class="list-inline-item theme-8"><a data-style="assets/css/theme-8.css" href="#"></a></li>
                    <li class="list-inline-item theme-9"><a data-style="assets/css/theme-9.css" href="#"></a></li>
                    <li class="list-inline-item theme-10"><a data-style="assets/css/theme-10.css" href="#"></a></li>
                </ul><!--//color-options-->
                <a id="config-close" class="close" href="#"><svg class="svg-inline--fa fa-circle-xmark"
                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle-xmark" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z">
                        </path>
                    </svg><!-- <i class="fas fa-times-circle"></i> Font Awesome fontawesome.com --></a>
            </div><!--//panel-inner-->
        </div><!--//config-panel-->

        <!-- Main Javascript -->
        <script>
            document.getElementById('whatsappForm').addEventListener('submit', function (e) {
                e.preventDefault();
              
                // Get form values
                const name = document.getElementById('name').value;
                const phone = document.getElementById('email').value;
                const message = document.getElementById('message').value;
                
                // Validate inputs (optional)
                if (!name || !phone || !message) {
                    alert("Please fill all fields!");
                    return;
                }
              
                // WhatsApp number (replace with your number)
                const whatsappNumber = '918882930328'; // Example: 91 (India) + 9721445005

                // Format message (URI encoding for special characters)
                const finalMessage = `*New Message*%0A%0A` +
                    `*Name:* ${encodeURIComponent(name)}%0A` +
                    `*Phone:* ${encodeURIComponent(phone)}%0A` +
                    `*Message:* ${encodeURIComponent(message)}`;
                
                // Generate WhatsApp URL
                const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${finalMessage}`;

                // Open WhatsApp in a new tab
                window.open(whatsappUrl);
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <script src="../assets/plugins/popper.min.js"></script>

        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/plugins/vanilla-back-to-top.min.js"></script>

        <script src="../assets/js/main.js"></script>
        <div id="back-to-top" class="hidden"><svg viewBox="0 0 24 24">
                <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path>
            </svg></div>


        <!-- Tiny Slider -->

        <script src="../assets/plugins/tiny-slider/min/tiny-slider.js"></script>
        <script src="../assets/js/tinyslider-custom.js"></script>



        <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->

        <script src="../assets/js/demo/style-switcher.js"></script>




    </body>

</html>