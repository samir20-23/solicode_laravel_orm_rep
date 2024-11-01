<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
            *, ::after, ::before {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb;
            }
            ::after, ::before {
                --tw-content: '';
            }
            :host, html {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                tab-size: 4;
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
                font-feature-settings: normal;
                font-variation-settings: normal;
                -webkit-tap-highlight-color: transparent;
            }
            body {
                margin: 0;
                line-height: inherit;
            }
            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px;
            }
            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted;
            }
            h1, h2, h3, h4, h5, h6 {
                font-size: inherit;
                font-weight: inherit;
            }
            a {
                color: inherit;
                text-decoration: inherit;
            }
            b, strong {
                font-weight: bolder;
            }
            code, kbd, pre, samp {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                font-feature-settings: normal;
                font-variation-settings: normal;
                font-size: 1em;
            }
            small {
                font-size: 80%;
            }
            sub, sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline;
            }
            sub {
                bottom: -0.25em;
            }
            sup {
                top: -0.5em;
            }
            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse;
            }
            button, input, optgroup, select, textarea {
                font-family: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                font-size: 100%;
                font-weight: inherit;
                line-height: inherit;
                color: inherit;
                margin: 0;
                padding: 0;
            }
            button, select {
                text-transform: none;
            }
            [type=button], [type=reset], [type=submit], button {
                -webkit-appearance: button;
                background-color: transparent;
                background-image: none;
            }
            :-moz-focusring {
                outline: auto;
            }
            :-moz-ui-invalid {
                box-shadow: none;
            }
            progress {
                vertical-align: baseline;
            }
            ::-webkit-inner-spin-button, ::-webkit-outer-spin-button {
                height: auto;
            }
            [type=search] {
                -webkit-appearance: textfield;
                outline-offset: -2px;
            }
            ::-webkit-search-decoration {
                -webkit-appearance: none;
            }
            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit;
            }
            summary {
                display: list-item;
            }
            blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
                margin: 0;
            }
            fieldset {
                margin: 0;
                padding: 0;
            }
            legend {
                padding: 0;
            }
            menu, ol, ul {
                list-style: none;
                margin: 0;
                padding: 0;
            }
            dialog {
                padding: 0;
            }
            textarea {
                resize: vertical;
            }
            input::placeholder, textarea::placeholder {
                opacity: 1;
                color: #9ca3af;
            }
            [role=button], button {
                cursor: pointer;
            }
            :disabled {
                cursor: default;
            }
            audio, canvas, embed, iframe, img, object, svg, video {
                display: block;
                vertical-align: middle;
            }
            img, video {
                max-width: 100%;
                height: auto;
            }
            [hidden] {
                display: none;
            }
            *, ::before, ::after {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / 0.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
            }
            ::backdrop {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / 0.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
            }
            .absolute {
                position: absolute;
            }
            .relative {
                position: relative;
            }
            .inset-0 {
                inset: 0;
            }
            .flex {
                display: flex;
            }
            .grid {
                display: grid;
            }
            .h-1 {
                height: 0.25rem;
            }
            .h-full {
                height: 100%;
            }
            .overflow-hidden {
                overflow: hidden;
            }
            .bg-gray-900 {
                background-color: #111827;
            }
            .bg-gray-800 {
                background-color: #1f2937;
            }
            .bg-gray-700 {
                background-color: #374151;
            }
            .text-gray-300 {
                color: #d1d5db;
            }
            .text-gray-500 {
                color: #6b7280;
            }
            .text-6xl {
                font-size: 4rem;
                line-height: 1;
            }
            .text-4xl {
                font-size: 2.25rem;
            }
            .text-3xl {
                font-size: 1.875rem;
            }
            .leading-tight {
                line-height: 1.25;
            }
            .font-medium {
                font-weight: 500;
            }
            .font-bold {
                font-weight: 700;
            }
            .w-full {
                width: 100%;
            }
            .pt-6 {
                padding-top: 1.5rem;
            }
            .pt-4 {
                padding-top: 1rem;
            }
            .pb-12 {
                padding-bottom: 3rem;
            }
            .mx-auto {
                margin-left: auto;
                margin-right: auto;
            }
            .container {
                max-width: 1280px;
                margin-left: auto;
                margin-right: auto;
                padding-left: 1rem;
                padding-right: 1rem;
                width: 100%;
            }
            @media (min-width: 640px) {
                .sm\:text-7xl {
                    font-size: 5rem;
                }
                .sm\:text-6xl {
                    font-size: 4rem;
                }
                .sm\:text-4xl {
                    font-size: 2.5rem;
                }
            }
            @media (min-width: 768px) {
                .md\:text-7xl {
                    font-size: 5rem;
                }
                .md\:text-6xl {
                    font-size: 4rem;
                }
                .md\:text-4xl {
                    font-size: 2.5rem;
                }
            }
            @media (min-width: 1024px) {
                .lg\:text-8xl {
                    font-size: 6rem;
                }
            }
            @media (min-width: 1280px) {
                .xl\:text-8xl {
                    font-size: 6rem;
                }
            }
        </style>
    @endif
</head>
<body class="font-sans antialiased text-gray-900 bg-gray-100">
    <div class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
        <div class="absolute top-0 left-0 w-full h-1 bg-gray-900"></div>
        <div class="container mx-auto">
            <div class="flex flex-col items-center justify-center pt-6 pb-12">
                <h1 class="text-8xl font-bold text-gray-900">Laravel</h1>
                <h2 class="text-4xl font-medium text-gray-700">Welcome to Laravel</h2>
                <p class="mt-4 text-lg text-gray-600">Your application is ready to go!</p>
            </div>
        </div>
    </div>
</body>
</html>
