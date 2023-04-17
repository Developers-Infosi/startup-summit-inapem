<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <meta name="robots" content="noindex, nofollow" />
    <meta name="title" content="Portal do 1º Fórum e Expo sobre cibersegurança" />
    <meta name="description"
        content="O Fórum – Uma iniciativa do Ministério das Telecomunicações, Tecnologias de Informação e Comunicação Social, agregadora de muitas vontades." />
    <meta name="keywords"
        content="1º Fórum e Expo sobre cibersegurança, Ministério das Telecomunicações, Minttics, Ministério das Telecomunicações, Tecnologias de Informação e Comunicação Social, Fórum, Angola" />
    <meta name="author" content="infosi.gov.ao" />

    <meta property="og:title" content="Portal do 1º Fórum e Expo sobre cibersegurança" />
    <meta property="og:site_name" content="Fórum" />
    <meta property="og:description"
        content="O Fórum – Uma iniciativa do Ministério das Telecomunicações, Tecnologias de Informação e Comunicação Social, agregadora de muitas vontades." />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="http://forumciberseguranca.ao/site/images/logo/logo.png" />
    <meta property="og:url" content="http://forumciberseguranca.ao" />
    <link rel="icon" type="image/png" sizes="50x50" href="/site/images/icons/favicons/favicon-50x.png">


    <title>@yield('titulo') - Fórum</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Protecção contra clickJacking --}}
    {!! header('X-Frame-Options: SAMEORIGIN') !!}


    <script>
        document.documentElement.className =
            document.documentElement.className + " yes-js js_active js";
    </script>
    <script>
        function loadAsync(e, t) {
            var a,
                n = !1;
            (a = document.createElement("script")),
            (a.type = "text/javascript"),
            (a.src = e),
            (a.onreadystatechange = function() {
                n ||
                    (this.readyState && "complete" != this.readyState) ||
                    ((n = !0), "function" == typeof t && t());
            }),
            (a.onload = a.onreadystatechange),
            document.getElementsByTagName("head")[0].appendChild(a);
        }
    </script>


    <link rel="stylesheet" id="layerslider-css" href="/site/layerslider/css/layerslider.css" type="text/css"
        media="all" />
    <link rel="stylesheet" id="wp-block-library-css" href="/site/layerslider/css/dist/block-library/style.min.css"
        type="text/css" media="all" />
    <style id="wp-block-library-theme-inline-css" type="text/css">
        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-audio {
            margin: 0 0 1em;
        }

        .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: 0.8em 1em;
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-embed {
            margin: 0 0 1em;
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-image {
            margin: 0 0 1em;
        }

        .wp-block-pullquote {
            border-top: 4px solid;
            border-bottom: 4px solid;
            margin-bottom: 1.75em;
            color: currentColor;
        }

        .wp-block-pullquote__citation,
        .wp-block-pullquote cite,
        .wp-block-pullquote footer {
            color: currentColor;
            text-transform: uppercase;
            font-size: 0.8125em;
            font-style: normal;
        }

        .wp-block-quote {
            border-left: 0.25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em;
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: 0.8125em;
            position: relative;
            font-style: normal;
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: 0.25em solid;
            padding-left: 0;
            padding-right: 1em;
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0;
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        .wp-block-quote.is-style-plain {
            border: none;
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700;
        }

        .wp-block-search__button {
            border: 1px solid #ccc;
            padding: 0.375em 0.625em;
        }

        :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em;
        }

        .wp-block-separator.has-css-opacity {
            opacity: 0.4;
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto;
        }

        .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1;
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px;
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px;
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px;
        }

        .wp-block-table {
            margin: "0 0 1em 0";
        }

        .wp-block-table thead {
            border-bottom: 3px solid;
        }

        .wp-block-table tfoot {
            border-top: 3px solid;
        }

        .wp-block-table td,
        .wp-block-table th {
            word-break: normal;
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center;
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, 0.65);
        }

        .wp-block-video {
            margin: 0 0 1em;
        }

        .wp-block-template-part.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0;
        }
    </style>
    <link rel="stylesheet" id="wc-blocks-vendors-style-css"
        href="/site/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css" type="text/css"
        media="all" />
    <link rel="stylesheet" id="wc-blocks-style-css"
        href="/site/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css" type="text/css" media="all" />
    <link rel="stylesheet" id="classic-theme-styles-css" href="/site/wp-includes/css/classic-themes.min.css"
        type="text/css" media="all" />



    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--strong-magenta: #a156b4;
            --wp--preset--color--light-grayish-magenta: #d0a5db;
            --wp--preset--color--very-light-gray: #eee;
            --wp--preset--color--very-dark-gray: #444;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
                    rgba(6, 147, 227, 1) 0%,
                    rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
                    rgb(122, 220, 180) 0%,
                    rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
                    rgba(252, 185, 0, 1) 0%,
                    rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
                    rgba(255, 105, 0, 1) 0%,
                    rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
                    rgb(238, 238, 238) 0%,
                    rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
                    rgb(74, 234, 220) 0%,
                    rgb(151, 120, 209) 20%,
                    rgb(207, 42, 186) 40%,
                    rgb(238, 44, 130) 60%,
                    rgb(251, 105, 98) 80%,
                    rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
                    rgb(255, 206, 236) 0%,
                    rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
                    rgb(254, 205, 165) 0%,
                    rgb(254, 45, 45) 50%,
                    rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
                    rgb(255, 203, 112) 0%,
                    rgb(199, 81, 192) 50%,
                    rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
                    rgb(255, 245, 203) 0%,
                    rgb(182, 227, 212) 50%,
                    rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg,
                    rgb(202, 248, 128) 0%,
                    rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg,
                    rgb(2, 3, 129) 0%,
                    rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url("#wp-duotone-dark-grayscale");
            --wp--preset--duotone--grayscale: url("#wp-duotone-grayscale");
            --wp--preset--duotone--purple-yellow: url("#wp-duotone-purple-yellow");
            --wp--preset--duotone--blue-red: url("#wp-duotone-blue-red");
            --wp--preset--duotone--midnight: url("#wp-duotone-midnight");
            --wp--preset--duotone--magenta-yellow: url("#wp-duotone-magenta-yellow");
            --wp--preset--duotone--purple-green: url("#wp-duotone-purple-green");
            --wp--preset--duotone--blue-orange: url("#wp-duotone-blue-orange");
            --wp--preset--font-size--small: 12px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--huge: 50px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" id="contact-form-7-css"
        href="/site/wp-content/plugins/contact-form-7/includes/css/styles.css" type="text/css" media="all" />
    <style id="extendify-gutenberg-patterns-and-templates-utilities-inline-css" type="text/css">
        .ext-absolute {
            position: absolute !important;
        }

        .ext-relative {
            position: relative !important;
        }

        .ext-top-base {
            top: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-top-lg {
            top: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext--top-base {
            top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .ext--top-lg {
            top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .ext-right-base {
            right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-right-lg {
            right: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext--right-base {
            right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .ext--right-lg {
            right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .ext-bottom-base {
            bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-bottom-lg {
            bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext--bottom-base {
            bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .ext--bottom-lg {
            bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .ext-left-base {
            left: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-left-lg {
            left: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext--left-base {
            left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .ext--left-lg {
            left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .ext-order-1 {
            order: 1 !important;
        }

        .ext-order-2 {
            order: 2 !important;
        }

        .ext-col-auto {
            grid-column: auto !important;
        }

        .ext-col-span-1 {
            grid-column: span 1 / span 1 !important;
        }

        .ext-col-span-2 {
            grid-column: span 2 / span 2 !important;
        }

        .ext-col-span-3 {
            grid-column: span 3 / span 3 !important;
        }

        .ext-col-span-4 {
            grid-column: span 4 / span 4 !important;
        }

        .ext-col-span-5 {
            grid-column: span 5 / span 5 !important;
        }

        .ext-col-span-6 {
            grid-column: span 6 / span 6 !important;
        }

        .ext-col-span-7 {
            grid-column: span 7 / span 7 !important;
        }

        .ext-col-span-8 {
            grid-column: span 8 / span 8 !important;
        }

        .ext-col-span-9 {
            grid-column: span 9 / span 9 !important;
        }

        .ext-col-span-10 {
            grid-column: span 10 / span 10 !important;
        }

        .ext-col-span-11 {
            grid-column: span 11 / span 11 !important;
        }

        .ext-col-span-12 {
            grid-column: span 12 / span 12 !important;
        }

        .ext-col-span-full {
            grid-column: 1 / -1 !important;
        }

        .ext-col-start-1 {
            grid-column-start: 1 !important;
        }

        .ext-col-start-2 {
            grid-column-start: 2 !important;
        }

        .ext-col-start-3 {
            grid-column-start: 3 !important;
        }

        .ext-col-start-4 {
            grid-column-start: 4 !important;
        }

        .ext-col-start-5 {
            grid-column-start: 5 !important;
        }

        .ext-col-start-6 {
            grid-column-start: 6 !important;
        }

        .ext-col-start-7 {
            grid-column-start: 7 !important;
        }

        .ext-col-start-8 {
            grid-column-start: 8 !important;
        }

        .ext-col-start-9 {
            grid-column-start: 9 !important;
        }

        .ext-col-start-10 {
            grid-column-start: 10 !important;
        }

        .ext-col-start-11 {
            grid-column-start: 11 !important;
        }

        .ext-col-start-12 {
            grid-column-start: 12 !important;
        }

        .ext-col-start-13 {
            grid-column-start: 13 !important;
        }

        .ext-col-start-auto {
            grid-column-start: auto !important;
        }

        .ext-col-end-1 {
            grid-column-end: 1 !important;
        }

        .ext-col-end-2 {
            grid-column-end: 2 !important;
        }

        .ext-col-end-3 {
            grid-column-end: 3 !important;
        }

        .ext-col-end-4 {
            grid-column-end: 4 !important;
        }

        .ext-col-end-5 {
            grid-column-end: 5 !important;
        }

        .ext-col-end-6 {
            grid-column-end: 6 !important;
        }

        .ext-col-end-7 {
            grid-column-end: 7 !important;
        }

        .ext-col-end-8 {
            grid-column-end: 8 !important;
        }

        .ext-col-end-9 {
            grid-column-end: 9 !important;
        }

        .ext-col-end-10 {
            grid-column-end: 10 !important;
        }

        .ext-col-end-11 {
            grid-column-end: 11 !important;
        }

        .ext-col-end-12 {
            grid-column-end: 12 !important;
        }

        .ext-col-end-13 {
            grid-column-end: 13 !important;
        }

        .ext-col-end-auto {
            grid-column-end: auto !important;
        }

        .ext-row-auto {
            grid-row: auto !important;
        }

        .ext-row-span-1 {
            grid-row: span 1 / span 1 !important;
        }

        .ext-row-span-2 {
            grid-row: span 2 / span 2 !important;
        }

        .ext-row-span-3 {
            grid-row: span 3 / span 3 !important;
        }

        .ext-row-span-4 {
            grid-row: span 4 / span 4 !important;
        }

        .ext-row-span-5 {
            grid-row: span 5 / span 5 !important;
        }

        .ext-row-span-6 {
            grid-row: span 6 / span 6 !important;
        }

        .ext-row-span-full {
            grid-row: 1 / -1 !important;
        }

        .ext-row-start-1 {
            grid-row-start: 1 !important;
        }

        .ext-row-start-2 {
            grid-row-start: 2 !important;
        }

        .ext-row-start-3 {
            grid-row-start: 3 !important;
        }

        .ext-row-start-4 {
            grid-row-start: 4 !important;
        }

        .ext-row-start-5 {
            grid-row-start: 5 !important;
        }

        .ext-row-start-6 {
            grid-row-start: 6 !important;
        }

        .ext-row-start-7 {
            grid-row-start: 7 !important;
        }

        .ext-row-start-auto {
            grid-row-start: auto !important;
        }

        .ext-row-end-1 {
            grid-row-end: 1 !important;
        }

        .ext-row-end-2 {
            grid-row-end: 2 !important;
        }

        .ext-row-end-3 {
            grid-row-end: 3 !important;
        }

        .ext-row-end-4 {
            grid-row-end: 4 !important;
        }

        .ext-row-end-5 {
            grid-row-end: 5 !important;
        }

        .ext-row-end-6 {
            grid-row-end: 6 !important;
        }

        .ext-row-end-7 {
            grid-row-end: 7 !important;
        }

        .ext-row-end-auto {
            grid-row-end: auto !important;
        }

        .ext-m-0:not([style*="margin"]) {
            margin: 0 !important;
        }

        .ext-m-auto:not([style*="margin"]) {
            margin: auto !important;
        }

        .ext-m-base:not([style*="margin"]) {
            margin: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-m-lg:not([style*="margin"]) {
            margin: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext--m-base:not([style*="margin"]) {
            margin: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .ext--m-lg:not([style*="margin"]) {
            margin: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .ext-mx-0:not([style*="margin"]) {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .ext-mx-auto:not([style*="margin"]) {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .ext-mx-base:not([style*="margin"]) {
            margin-left: var(--wp--style--block-gap, 1.75rem) !important;
            margin-right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-mx-lg:not([style*="margin"]) {
            margin-left: var(--extendify--spacing--large, 3rem) !important;
            margin-right: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext--mx-base:not([style*="margin"]) {
            margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .ext--mx-lg:not([style*="margin"]) {
            margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .ext-my-0:not([style*="margin"]) {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .ext-my-auto:not([style*="margin"]) {
            margin-top: auto !important;
            margin-bottom: auto !important;
        }

        .ext-my-base:not([style*="margin"]) {
            margin-top: var(--wp--style--block-gap, 1.75rem) !important;
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-my-lg:not([style*="margin"]) {
            margin-top: var(--extendify--spacing--large, 3rem) !important;
            margin-bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext--my-base:not([style*="margin"]) {
            margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .ext--my-lg:not([style*="margin"]) {
            margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .ext-mt-0:not([style*="margin"]) {
            margin-top: 0 !important;
        }

        .ext-mt-auto:not([style*="margin"]) {
            margin-top: auto !important;
        }

        .ext-mt-base:not([style*="margin"]) {
            margin-top: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-mt-lg:not([style*="margin"]) {
            margin-top: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext--mt-base:not([style*="margin"]) {
            margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .ext--mt-lg:not([style*="margin"]) {
            margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .ext-mr-0:not([style*="margin"]) {
            margin-right: 0 !important;
        }

        .ext-mr-auto:not([style*="margin"]) {
            margin-right: auto !important;
        }

        .ext-mr-base:not([style*="margin"]) {
            margin-right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-mr-lg:not([style*="margin"]) {
            margin-right: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext--mr-base:not([style*="margin"]) {
            margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .ext--mr-lg:not([style*="margin"]) {
            margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .ext-mb-0:not([style*="margin"]) {
            margin-bottom: 0 !important;
        }

        .ext-mb-auto:not([style*="margin"]) {
            margin-bottom: auto !important;
        }

        .ext-mb-base:not([style*="margin"]) {
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-mb-lg:not([style*="margin"]) {
            margin-bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext--mb-base:not([style*="margin"]) {
            margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .ext--mb-lg:not([style*="margin"]) {
            margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .ext-ml-0:not([style*="margin"]) {
            margin-left: 0 !important;
        }

        .ext-ml-auto:not([style*="margin"]) {
            margin-left: auto !important;
        }

        .ext-ml-base:not([style*="margin"]) {
            margin-left: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-ml-lg:not([style*="margin"]) {
            margin-left: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext--ml-base:not([style*="margin"]) {
            margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
        }

        .ext--ml-lg:not([style*="margin"]) {
            margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
        }

        .ext-block {
            display: block !important;
        }

        .ext-inline-block {
            display: inline-block !important;
        }

        .ext-inline {
            display: inline !important;
        }

        .ext-flex {
            display: flex !important;
        }

        .ext-inline-flex {
            display: inline-flex !important;
        }

        .ext-grid {
            display: grid !important;
        }

        .ext-inline-grid {
            display: inline-grid !important;
        }

        .ext-hidden {
            display: none !important;
        }

        .ext-w-auto {
            width: auto !important;
        }

        .ext-w-full {
            width: 100% !important;
        }

        .ext-max-w-full {
            max-width: 100% !important;
        }

        .ext-flex-1 {
            flex: 1 1 0% !important;
        }

        .ext-flex-auto {
            flex: 1 1 auto !important;
        }

        .ext-flex-initial {
            flex: 0 1 auto !important;
        }

        .ext-flex-none {
            flex: none !important;
        }

        .ext-flex-shrink-0 {
            flex-shrink: 0 !important;
        }

        .ext-flex-shrink {
            flex-shrink: 1 !important;
        }

        .ext-flex-grow-0 {
            flex-grow: 0 !important;
        }

        .ext-flex-grow {
            flex-grow: 1 !important;
        }

        .ext-list-none {
            list-style-type: none !important;
        }

        .ext-grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
        }

        .ext-grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        }

        .ext-grid-cols-3 {
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
        }

        .ext-grid-cols-4 {
            grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
        }

        .ext-grid-cols-5 {
            grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
        }

        .ext-grid-cols-6 {
            grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
        }

        .ext-grid-cols-7 {
            grid-template-columns: repeat(7, minmax(0, 1fr)) !important;
        }

        .ext-grid-cols-8 {
            grid-template-columns: repeat(8, minmax(0, 1fr)) !important;
        }

        .ext-grid-cols-9 {
            grid-template-columns: repeat(9, minmax(0, 1fr)) !important;
        }

        .ext-grid-cols-10 {
            grid-template-columns: repeat(10, minmax(0, 1fr)) !important;
        }

        .ext-grid-cols-11 {
            grid-template-columns: repeat(11, minmax(0, 1fr)) !important;
        }

        .ext-grid-cols-12 {
            grid-template-columns: repeat(12, minmax(0, 1fr)) !important;
        }

        .ext-grid-cols-none {
            grid-template-columns: none !important;
        }

        .ext-grid-rows-1 {
            grid-template-rows: repeat(1, minmax(0, 1fr)) !important;
        }

        .ext-grid-rows-2 {
            grid-template-rows: repeat(2, minmax(0, 1fr)) !important;
        }

        .ext-grid-rows-3 {
            grid-template-rows: repeat(3, minmax(0, 1fr)) !important;
        }

        .ext-grid-rows-4 {
            grid-template-rows: repeat(4, minmax(0, 1fr)) !important;
        }

        .ext-grid-rows-5 {
            grid-template-rows: repeat(5, minmax(0, 1fr)) !important;
        }

        .ext-grid-rows-6 {
            grid-template-rows: repeat(6, minmax(0, 1fr)) !important;
        }

        .ext-grid-rows-none {
            grid-template-rows: none !important;
        }

        .ext-flex-row {
            flex-direction: row !important;
        }

        .ext-flex-row-reverse {
            flex-direction: row-reverse !important;
        }

        .ext-flex-col {
            flex-direction: column !important;
        }

        .ext-flex-col-reverse {
            flex-direction: column-reverse !important;
        }

        .ext-flex-wrap {
            flex-wrap: wrap !important;
        }

        .ext-flex-wrap-reverse {
            flex-wrap: wrap-reverse !important;
        }

        .ext-flex-nowrap {
            flex-wrap: nowrap !important;
        }

        .ext-items-start {
            align-items: flex-start !important;
        }

        .ext-items-end {
            align-items: flex-end !important;
        }

        .ext-items-center {
            align-items: center !important;
        }

        .ext-items-baseline {
            align-items: baseline !important;
        }

        .ext-items-stretch {
            align-items: stretch !important;
        }

        .ext-justify-start {
            justify-content: flex-start !important;
        }

        .ext-justify-end {
            justify-content: flex-end !important;
        }

        .ext-justify-center {
            justify-content: center !important;
        }

        .ext-justify-between {
            justify-content: space-between !important;
        }

        .ext-justify-around {
            justify-content: space-around !important;
        }

        .ext-justify-evenly {
            justify-content: space-evenly !important;
        }

        .ext-justify-items-start {
            justify-items: start !important;
        }

        .ext-justify-items-end {
            justify-items: end !important;
        }

        .ext-justify-items-center {
            justify-items: center !important;
        }

        .ext-justify-items-stretch {
            justify-items: stretch !important;
        }

        .ext-gap-0 {
            gap: 0 !important;
        }

        .ext-gap-base {
            gap: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-gap-lg {
            gap: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext-gap-x-0 {
            -moz-column-gap: 0 !important;
            column-gap: 0 !important;
        }

        .ext-gap-x-base {
            -moz-column-gap: var(--wp--style--block-gap, 1.75rem) !important;
            column-gap: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-gap-x-lg {
            -moz-column-gap: var(--extendify--spacing--large, 3rem) !important;
            column-gap: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext-gap-y-0 {
            row-gap: 0 !important;
        }

        .ext-gap-y-base {
            row-gap: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-gap-y-lg {
            row-gap: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext-justify-self-auto {
            justify-self: auto !important;
        }

        .ext-justify-self-start {
            justify-self: start !important;
        }

        .ext-justify-self-end {
            justify-self: end !important;
        }

        .ext-justify-self-center {
            justify-self: center !important;
        }

        .ext-justify-self-stretch {
            justify-self: stretch !important;
        }

        .ext-rounded-none {
            border-radius: 0px !important;
        }

        .ext-rounded-full {
            border-radius: 9999px !important;
        }

        .ext-rounded-t-none {
            border-top-left-radius: 0px !important;
            border-top-right-radius: 0px !important;
        }

        .ext-rounded-t-full {
            border-top-left-radius: 9999px !important;
            border-top-right-radius: 9999px !important;
        }

        .ext-rounded-r-none {
            border-top-right-radius: 0px !important;
            border-bottom-right-radius: 0px !important;
        }

        .ext-rounded-r-full {
            border-top-right-radius: 9999px !important;
            border-bottom-right-radius: 9999px !important;
        }

        .ext-rounded-b-none {
            border-bottom-right-radius: 0px !important;
            border-bottom-left-radius: 0px !important;
        }

        .ext-rounded-b-full {
            border-bottom-right-radius: 9999px !important;
            border-bottom-left-radius: 9999px !important;
        }

        .ext-rounded-l-none {
            border-top-left-radius: 0px !important;
            border-bottom-left-radius: 0px !important;
        }

        .ext-rounded-l-full {
            border-top-left-radius: 9999px !important;
            border-bottom-left-radius: 9999px !important;
        }

        .ext-rounded-tl-none {
            border-top-left-radius: 0px !important;
        }

        .ext-rounded-tl-full {
            border-top-left-radius: 9999px !important;
        }

        .ext-rounded-tr-none {
            border-top-right-radius: 0px !important;
        }

        .ext-rounded-tr-full {
            border-top-right-radius: 9999px !important;
        }

        .ext-rounded-br-none {
            border-bottom-right-radius: 0px !important;
        }

        .ext-rounded-br-full {
            border-bottom-right-radius: 9999px !important;
        }

        .ext-rounded-bl-none {
            border-bottom-left-radius: 0px !important;
        }

        .ext-rounded-bl-full {
            border-bottom-left-radius: 9999px !important;
        }

        .ext-border-0 {
            border-width: 0px !important;
        }

        .ext-border-t-0 {
            border-top-width: 0px !important;
        }

        .ext-border-r-0 {
            border-right-width: 0px !important;
        }

        .ext-border-b-0 {
            border-bottom-width: 0px !important;
        }

        .ext-border-l-0 {
            border-left-width: 0px !important;
        }

        .ext-p-0:not([style*="padding"]) {
            padding: 0 !important;
        }

        .ext-p-base:not([style*="padding"]) {
            padding: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-p-lg:not([style*="padding"]) {
            padding: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext-px-0:not([style*="padding"]) {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .ext-px-base:not([style*="padding"]) {
            padding-left: var(--wp--style--block-gap, 1.75rem) !important;
            padding-right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-px-lg:not([style*="padding"]) {
            padding-left: var(--extendify--spacing--large, 3rem) !important;
            padding-right: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext-py-0:not([style*="padding"]) {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .ext-py-base:not([style*="padding"]) {
            padding-top: var(--wp--style--block-gap, 1.75rem) !important;
            padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-py-lg:not([style*="padding"]) {
            padding-top: var(--extendify--spacing--large, 3rem) !important;
            padding-bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext-pt-0:not([style*="padding"]) {
            padding-top: 0 !important;
        }

        .ext-pt-base:not([style*="padding"]) {
            padding-top: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-pt-lg:not([style*="padding"]) {
            padding-top: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext-pr-0:not([style*="padding"]) {
            padding-right: 0 !important;
        }

        .ext-pr-base:not([style*="padding"]) {
            padding-right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-pr-lg:not([style*="padding"]) {
            padding-right: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext-pb-0:not([style*="padding"]) {
            padding-bottom: 0 !important;
        }

        .ext-pb-base:not([style*="padding"]) {
            padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-pb-lg:not([style*="padding"]) {
            padding-bottom: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext-pl-0:not([style*="padding"]) {
            padding-left: 0 !important;
        }

        .ext-pl-base:not([style*="padding"]) {
            padding-left: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .ext-pl-lg:not([style*="padding"]) {
            padding-left: var(--extendify--spacing--large, 3rem) !important;
        }

        .ext-text-left {
            text-align: left !important;
        }

        .ext-text-center {
            text-align: center !important;
        }

        .ext-text-right {
            text-align: right !important;
        }

        .ext-leading-none {
            line-height: 1 !important;
        }

        .ext-leading-tight {
            line-height: 1.25 !important;
        }

        .ext-leading-snug {
            line-height: 1.375 !important;
        }

        .ext-leading-normal {
            line-height: 1.5 !important;
        }

        .ext-leading-relaxed {
            line-height: 1.625 !important;
        }

        .ext-leading-loose {
            line-height: 2 !important;
        }

        .ext-aspect-square img {
            aspect-ratio: 1 / 1 !important;
            -o-object-fit: cover !important;
            object-fit: cover !important;
        }

        .ext-aspect-landscape img {
            aspect-ratio: 4 / 3 !important;
            -o-object-fit: cover !important;
            object-fit: cover !important;
        }

        .ext-aspect-landscape-wide img {
            aspect-ratio: 16 / 9 !important;
            -o-object-fit: cover !important;
            object-fit: cover !important;
        }

        .ext-aspect-portrait img {
            aspect-ratio: 3 / 4 !important;
            -o-object-fit: cover !important;
            object-fit: cover !important;
        }

        .ext-aspect-square .components-resizable-box__container,
        .ext-aspect-landscape .components-resizable-box__container,
        .ext-aspect-landscape-wide .components-resizable-box__container,
        .ext-aspect-portrait .components-resizable-box__container {
            height: auto !important;
        }

        .clip-path--rhombus img {
            -webkit-clip-path: polygon(15% 6%,
                    80% 29%,
                    84% 93%,
                    23% 69%) !important;
            clip-path: polygon(15% 6%, 80% 29%, 84% 93%, 23% 69%) !important;
        }

        .clip-path--diamond img {
            -webkit-clip-path: polygon(5% 29%, 60% 2%, 91% 64%, 36% 89%) !important;
            clip-path: polygon(5% 29%, 60% 2%, 91% 64%, 36% 89%) !important;
        }

        .clip-path--rhombus-alt img {
            -webkit-clip-path: polygon(14% 9%,
                    85% 24%,
                    91% 89%,
                    19% 76%) !important;
            clip-path: polygon(14% 9%, 85% 24%, 91% 89%, 19% 76%) !important;
        }

        /*
      The .ext utility is a top-level class that we use to target contents within our patterns.
      We use it here to ensure columns blocks display well across themes.
      */

        .wp-block-columns[class*="fullwidth-cols"] {
            /* no suggestion */
            margin-bottom: unset !important;
        }

        .wp-block-column.editor\:pointer-events-none {
            /* no suggestion */
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .is-root-container.block-editor-block-list__layout>[data-align="full"]:not(:first-of-type)>.wp-block-column.editor\:pointer-events-none,
        .is-root-container.block-editor-block-list__layout>[data-align="wide"]>.wp-block-column.editor\:pointer-events-none {
            /* no suggestion */
            margin-top: calc(-1 * var(--wp--style--block-gap, 28px)) !important;
        }

        .is-root-container.block-editor-block-list__layout>[data-align="full"]:not(:first-of-type)>.ext-my-0,
        .is-root-container.block-editor-block-list__layout>[data-align="wide"]>.ext-my-0:not([style*="margin"]) {
            /* no suggestion */
            margin-top: calc(-1 * var(--wp--style--block-gap, 28px)) !important;
        }

        /* Some popular themes use padding instead of core margin for columns; remove it */

        .ext .wp-block-columns .wp-block-column[style*="padding"] {
            /* no suggestion */
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        /* Some popular themes add double spacing between columns; remove it */

        .ext .wp-block-columns+.wp-block-columns:not([class*="mt-"]):not([class*="my-"]):not([style*="margin"]) {
            /* no suggestion */
            margin-top: 0 !important;
        }

        [class*="fullwidth-cols"] .wp-block-column:first-child,
        [class*="fullwidth-cols"] .wp-block-group:first-child {
            /* no suggestion */
        }

        [class*="fullwidth-cols"] .wp-block-column:first-child,
        [class*="fullwidth-cols"] .wp-block-group:first-child {
            margin-top: 0 !important;
        }

        [class*="fullwidth-cols"] .wp-block-column:last-child,
        [class*="fullwidth-cols"] .wp-block-group:last-child {
            /* no suggestion */
        }

        [class*="fullwidth-cols"] .wp-block-column:last-child,
        [class*="fullwidth-cols"] .wp-block-group:last-child {
            margin-bottom: 0 !important;
        }

        [class*="fullwidth-cols"] .wp-block-column:first-child>* {
            /* no suggestion */
            margin-top: 0 !important;
        }

        [class*="fullwidth-cols"] .wp-block-column>*:first-child {
            /* no suggestion */
            margin-top: 0 !important;
        }

        [class*="fullwidth-cols"] .wp-block-column>*:last-child {
            /* no suggestion */
            margin-bottom: 0 !important;
        }

        .ext .is-not-stacked-on-mobile .wp-block-column {
            /* no suggestion */
            margin-bottom: 0 !important;
        }

        /* Add base margin bottom to all columns */

        .wp-block-columns[class*="fullwidth-cols"]:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
            /* no suggestion */
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        @media (min-width: 782px) {
            .wp-block-columns[class*="fullwidth-cols"]:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
                /* no suggestion */
                margin-bottom: 0 !important;
            }
        }

        /* Remove margin bottom from "not-stacked" columns */

        .wp-block-columns[class*="fullwidth-cols"].is-not-stacked-on-mobile>.wp-block-column {
            /* no suggestion */
            margin-bottom: 0 !important;
        }

        @media (min-width: 600px) and (max-width: 781px) {
            .wp-block-columns[class*="fullwidth-cols"]:not(.is-not-stacked-on-mobile)>.wp-block-column:nth-child(even) {
                /* no suggestion */
                margin-left: var(--wp--style--block-gap, 2em) !important;
            }
        }

        /*
          The `tablet:fullwidth-cols` and `desktop:fullwidth-cols` utilities are used
          to counter the core/columns responsive for at our breakpoints.
      */

        @media (max-width: 781px) {
            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) {
                flex-wrap: wrap !important;
            }

            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                margin-left: 0 !important;
            }

            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not([style*="margin"]) {
                /* no suggestion */
                margin-left: 0 !important;
            }

            .tablet\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                flex-basis: 100% !important;
                /* Required to negate core/columns flex-basis */
            }
        }

        @media (max-width: 1079px) {
            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile) {
                flex-wrap: wrap !important;
            }

            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                margin-left: 0 !important;
            }

            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not([style*="margin"]) {
                /* no suggestion */
                margin-left: 0 !important;
            }

            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column {
                flex-basis: 100% !important;
                /* Required to negate core/columns flex-basis */
            }

            .desktop\:fullwidth-cols.wp-block-columns:not(.is-not-stacked-on-mobile)>.wp-block-column:not(:last-child) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            }
        }

        .direction-rtl {
            direction: rtl !important;
        }

        .direction-ltr {
            direction: ltr !important;
        }

        /* Use "is-style-" prefix to support adding this style to the core/list block */

        .is-style-inline-list {
            padding-left: 0 !important;
        }

        .is-style-inline-list li {
            /* no suggestion */
            list-style-type: none !important;
        }

        @media (min-width: 782px) {
            .is-style-inline-list li {
                margin-right: var(--wp--style--block-gap, 1.75rem) !important;
                display: inline !important;
            }
        }

        .is-style-inline-list li:first-child {
            /* no suggestion */
        }

        @media (min-width: 782px) {
            .is-style-inline-list li:first-child {
                margin-left: 0 !important;
            }
        }

        .is-style-inline-list li:last-child {
            /* no suggestion */
        }

        @media (min-width: 782px) {
            .is-style-inline-list li:last-child {
                margin-right: 0 !important;
            }
        }

        .bring-to-front {
            position: relative !important;
            z-index: 10 !important;
        }

        .text-stroke {
            -webkit-text-stroke-width: var(--wp--custom--typography--text-stroke-width,
                    2px) !important;
            -webkit-text-stroke-color: var(--wp--preset--color--background) !important;
        }

        .text-stroke--primary {
            -webkit-text-stroke-width: var(--wp--custom--typography--text-stroke-width,
                    2px) !important;
            -webkit-text-stroke-color: var(--wp--preset--color--primary) !important;
        }

        .text-stroke--secondary {
            -webkit-text-stroke-width: var(--wp--custom--typography--text-stroke-width,
                    2px) !important;
            -webkit-text-stroke-color: var(--wp--preset--color--secondary) !important;
        }

        .editor\:no-caption .block-editor-rich-text__editable {
            display: none !important;
        }

        .editor\:no-inserter>.block-list-appender,
        .editor\:no-inserter .wp-block-group__inner-container>.block-list-appender {
            display: none !important;
        }

        .editor\:no-inserter .wp-block-cover__inner-container>.block-list-appender {
            display: none !important;
        }

        .editor\:no-inserter .wp-block-column:not(.is-selected)>.block-list-appender {
            display: none !important;
        }

        .editor\:no-resize .components-resizable-box__handle::after,
        .editor\:no-resize .components-resizable-box__side-handle::before,
        .editor\:no-resize .components-resizable-box__handle {
            display: none !important;
            pointer-events: none !important;
        }

        .editor\:no-resize .components-resizable-box__container {
            display: block !important;
        }

        .editor\:pointer-events-none {
            pointer-events: none !important;
        }

        .is-style-angled {
            /* no suggestion */
            align-items: center !important;
            justify-content: flex-end !important;
        }

        .ext .is-style-angled>[class*="_inner-container"] {
            align-items: center !important;
        }

        .is-style-angled .wp-block-cover__image-background,
        .is-style-angled .wp-block-cover__video-background {
            /* no suggestion */
            -webkit-clip-path: polygon(0 0, 30% 0%, 50% 100%, 0% 100%) !important;
            clip-path: polygon(0 0, 30% 0%, 50% 100%, 0% 100%) !important;
            z-index: 1 !important;
        }

        @media (min-width: 782px) {

            .is-style-angled .wp-block-cover__image-background,
            .is-style-angled .wp-block-cover__video-background {
                /* no suggestion */
                -webkit-clip-path: polygon(0 0, 55% 0%, 65% 100%, 0% 100%) !important;
                clip-path: polygon(0 0, 55% 0%, 65% 100%, 0% 100%) !important;
            }
        }

        .has-foreground-color {
            /* no suggestion */
            color: var(--wp--preset--color--foreground, #000) !important;
        }

        .has-foreground-background-color {
            /* no suggestion */
            background-color: var(--wp--preset--color--foreground, #000) !important;
        }

        .has-background-color {
            /* no suggestion */
            color: var(--wp--preset--color--background, #fff) !important;
        }

        .has-background-background-color {
            /* no suggestion */
            background-color: var(--wp--preset--color--background, #fff) !important;
        }

        .has-primary-color {
            /* no suggestion */
            color: var(--wp--preset--color--primary, #4b5563) !important;
        }

        .has-primary-background-color {
            /* no suggestion */
            background-color: var(--wp--preset--color--primary, #4b5563) !important;
        }

        .has-secondary-color {
            /* no suggestion */
            color: var(--wp--preset--color--secondary, #9ca3af) !important;
        }

        .has-secondary-background-color {
            /* no suggestion */
            background-color: var(--wp--preset--color--secondary,
                    #9ca3af) !important;
        }

        /* Ensure themes that target specific elements use the right colors */

        .ext.has-text-color p,
        .ext.has-text-color h1,
        .ext.has-text-color h2,
        .ext.has-text-color h3,
        .ext.has-text-color h4,
        .ext.has-text-color h5,
        .ext.has-text-color h6 {
            /* no suggestion */
            color: currentColor !important;
        }

        .has-white-color {
            /* no suggestion */
            color: var(--wp--preset--color--white, #fff) !important;
        }

        .has-black-color {
            /* no suggestion */
            color: var(--wp--preset--color--black, #000) !important;
        }

        .has-ext-foreground-background-color {
            /* no suggestion */
            background-color: var(--wp--preset--color--foreground,
                    var(--wp--preset--color--black, #000)) !important;
        }

        .has-ext-primary-background-color {
            /* no suggestion */
            background-color: var(--wp--preset--color--primary,
                    var(--wp--preset--color--cyan-bluish-gray, #000)) !important;
        }

        /* Fix button borders with specified background colors */

        .wp-block-button__link.has-black-background-color {
            /* no suggestion */
            border-color: var(--wp--preset--color--black, #000) !important;
        }

        .wp-block-button__link.has-white-background-color {
            /* no suggestion */
            border-color: var(--wp--preset--color--white, #fff) !important;
        }

        .has-ext-small-font-size {
            /* no suggestion */
            font-size: var(--wp--preset--font-size--ext-small) !important;
        }

        .has-ext-medium-font-size {
            /* no suggestion */
            font-size: var(--wp--preset--font-size--ext-medium) !important;
        }

        .has-ext-large-font-size {
            /* no suggestion */
            font-size: var(--wp--preset--font-size--ext-large) !important;
            line-height: 1.2 !important;
        }

        .has-ext-x-large-font-size {
            /* no suggestion */
            font-size: var(--wp--preset--font-size--ext-x-large) !important;
            line-height: 1 !important;
        }

        .has-ext-xx-large-font-size {
            /* no suggestion */
            font-size: var(--wp--preset--font-size--ext-xx-large) !important;
            line-height: 1 !important;
        }

        /* Line height */

        .has-ext-x-large-font-size:not([style*="line-height"]) {
            /* no suggestion */
            line-height: 1.1 !important;
        }

        .has-ext-xx-large-font-size:not([style*="line-height"]) {
            /* no suggestion */
            line-height: 1.1 !important;
        }

        .ext .wp-block-group>* {
            /* Line height */
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        .ext .wp-block-group>*+* {
            margin-top: var(--wp--style--block-gap, 1.75rem) !important;
            margin-bottom: 0 !important;
        }

        .ext h2 {
            margin-top: var(--wp--style--block-gap, 1.75rem) !important;
            margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
        }

        .has-ext-x-large-font-size+p,
        .has-ext-x-large-font-size+h3 {
            margin-top: 0.5rem !important;
        }

        .ext .wp-block-buttons>.wp-block-button.wp-block-button__width-25 {
            width: calc(25% - var(--wp--style--block-gap, 0.5em) * 0.75) !important;
            min-width: 12rem !important;
        }

        /* Classic themes use an inner [class*="_inner-container"] that our utilities cannot directly target, so we need to do so with a few */

        .ext .ext-grid>[class*="_inner-container"] {
            /* no suggestion */
            display: grid !important;
        }

        /* Unhinge grid for container blocks in classic themes, and < 5.9 */

        .ext>[class*="_inner-container"]>.ext-grid:not([class*="columns"]),
        .ext>[class*="_inner-container"]>.wp-block>.ext-grid:not([class*="columns"]) {
            /* no suggestion */
            display: initial !important;
        }

        /* Grid Columns */

        .ext .ext-grid-cols-1>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-cols-2>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-cols-3>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-cols-4>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-cols-5>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-cols-6>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-cols-7>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-columns: repeat(7, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-cols-8>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-columns: repeat(8, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-cols-9>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-columns: repeat(9, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-cols-10>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-columns: repeat(10, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-cols-11>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-columns: repeat(11, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-cols-12>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-columns: repeat(12, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-cols-13>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-columns: repeat(13, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-cols-none>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-columns: none !important;
        }

        /* Grid Rows */

        .ext .ext-grid-rows-1>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-rows: repeat(1, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-rows-2>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-rows: repeat(2, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-rows-3>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-rows: repeat(3, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-rows-4>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-rows: repeat(4, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-rows-5>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-rows: repeat(5, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-rows-6>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-rows: repeat(6, minmax(0, 1fr)) !important;
        }

        .ext .ext-grid-rows-none>[class*="_inner-container"] {
            /* no suggestion */
            grid-template-rows: none !important;
        }

        /* Align */

        .ext .ext-items-start>[class*="_inner-container"] {
            align-items: flex-start !important;
        }

        .ext .ext-items-end>[class*="_inner-container"] {
            align-items: flex-end !important;
        }

        .ext .ext-items-center>[class*="_inner-container"] {
            align-items: center !important;
        }

        .ext .ext-items-baseline>[class*="_inner-container"] {
            align-items: baseline !important;
        }

        .ext .ext-items-stretch>[class*="_inner-container"] {
            align-items: stretch !important;
        }

        .ext.wp-block-group>*:last-child {
            /* no suggestion */
            margin-bottom: 0 !important;
        }

        /* For <5.9 */

        .ext .wp-block-group__inner-container {
            /* no suggestion */
            padding: 0 !important;
        }

        .ext.has-background {
            /* no suggestion */
            padding-left: var(--wp--style--block-gap, 1.75rem) !important;
            padding-right: var(--wp--style--block-gap, 1.75rem) !important;
        }

        /* Fallback for classic theme group blocks */

        .ext *[class*="inner-container"]>.alignwide *[class*="inner-container"],
        .ext *[class*="inner-container"]>[data-align="wide"] *[class*="inner-container"] {
            /* no suggestion */
            max-width: var(--responsive--alignwide-width, 120rem) !important;
        }

        .ext *[class*="inner-container"]>.alignwide *[class*="inner-container"]>*,
        .ext *[class*="inner-container"]>[data-align="wide"] *[class*="inner-container"]>* {
            /* no suggestion */
        }

        .ext *[class*="inner-container"]>.alignwide *[class*="inner-container"]>*,
        .ext *[class*="inner-container"]>[data-align="wide"] *[class*="inner-container"]>* {
            max-width: 100% !important;
        }

        /* Ensure image block display is standardized */

        .ext .wp-block-image {
            /* no suggestion */
            position: relative !important;
            text-align: center !important;
        }

        .ext .wp-block-image img {
            /* no suggestion */
            display: inline-block !important;
            vertical-align: middle !important;
        }

        body {
            /* no suggestion */
            /* We need to abstract this out of tailwind.config because clamp doesnt translate with negative margins */
            --extendify--spacing--large: var(--wp--custom--spacing--large,
                    clamp(2em, 8vw, 8em)) !important;
            /* Add pattern preset font sizes */
            --wp--preset--font-size--ext-small: 1rem !important;
            --wp--preset--font-size--ext-medium: 1.125rem !important;
            --wp--preset--font-size--ext-large: clamp(1.65rem,
                    3.5vw,
                    2.15rem) !important;
            --wp--preset--font-size--ext-x-large: clamp(3rem,
                    6vw,
                    4.75rem) !important;
            --wp--preset--font-size--ext-xx-large: clamp(3.25rem,
                    7.5vw,
                    5.75rem) !important;
            /* Fallbacks for pre 5.9 themes */
            --wp--preset--color--black: #000 !important;
            --wp--preset--color--white: #fff !important;
        }

        .ext * {
            box-sizing: border-box !important;
        }

        /* Astra: Remove spacer block visuals in the library */

        .block-editor-block-preview__content-iframe .ext [data-type="core/spacer"] .components-resizable-box__container {
            /* no suggestion */
            background: transparent !important;
        }

        .block-editor-block-preview__content-iframe .ext [data-type="core/spacer"] .block-library-spacer__resize-container::before {
            /* no suggestion */
            display: none !important;
        }

        /* Twenty Twenty adds a lot of margin automatically to blocks. We only want our own margin added to our patterns. */

        .ext .wp-block-group__inner-container figure.wp-block-gallery.alignfull {
            /* no suggestion */
            margin-top: unset !important;
            margin-bottom: unset !important;
        }

        /* Ensure no funky business is assigned to alignwide */

        .ext .alignwide {
            /* no suggestion */
            margin-left: auto !important;
            margin-right: auto !important;
        }

        /* Negate blockGap being inappropriately assigned in the editor */

        .is-root-container.block-editor-block-list__layout>[data-align="full"]:not(:first-of-type)>.ext-my-0,
        .is-root-container.block-editor-block-list__layout>[data-align="wide"]>.ext-my-0:not([style*="margin"]) {
            /* no suggestion */
            margin-top: calc(-1 * var(--wp--style--block-gap, 28px)) !important;
        }

        /* Ensure vh content in previews looks taller */

        .block-editor-block-preview__content-iframe .preview\:min-h-50 {
            /* no suggestion */
            min-height: 50vw !important;
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-60 {
            /* no suggestion */
            min-height: 60vw !important;
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-70 {
            /* no suggestion */
            min-height: 70vw !important;
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-80 {
            /* no suggestion */
            min-height: 80vw !important;
        }

        .block-editor-block-preview__content-iframe .preview\:min-h-100 {
            /* no suggestion */
            min-height: 100vw !important;
        }

        /*  Removes excess margin when applied to the alignfull parent div in Block Themes */

        .ext-mr-0.alignfull:not([style*="margin"]):not([style*="margin"]) {
            /* no suggestion */
            margin-right: 0 !important;
        }

        .ext-ml-0:not([style*="margin"]):not([style*="margin"]) {
            /* no suggestion */
            margin-left: 0 !important;
        }

        /*  Ensures fullwidth blocks display properly in the editor when margin is zeroed out */

        .is-root-container .wp-block[data-align="full"]>.ext-mx-0:not([style*="margin"]):not([style*="margin"]) {
            /* no suggestion */
            margin-right: calc(1 * var(--wp--custom--spacing--outer, 0)) !important;
            margin-left: calc(1 * var(--wp--custom--spacing--outer, 0)) !important;
            overflow: hidden !important;
            width: unset !important;
        }

        @media (min-width: 782px) {
            .tablet\:ext-absolute {
                position: absolute !important;
            }

            .tablet\:ext-relative {
                position: relative !important;
            }

            .tablet\:ext-top-base {
                top: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-top-lg {
                top: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext--top-base {
                top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .tablet\:ext--top-lg {
                top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .tablet\:ext-right-base {
                right: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-right-lg {
                right: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext--right-base {
                right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .tablet\:ext--right-lg {
                right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .tablet\:ext-bottom-base {
                bottom: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-bottom-lg {
                bottom: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext--bottom-base {
                bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .tablet\:ext--bottom-lg {
                bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .tablet\:ext-left-base {
                left: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-left-lg {
                left: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext--left-base {
                left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .tablet\:ext--left-lg {
                left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .tablet\:ext-order-1 {
                order: 1 !important;
            }

            .tablet\:ext-order-2 {
                order: 2 !important;
            }

            .tablet\:ext-m-0:not([style*="margin"]) {
                margin: 0 !important;
            }

            .tablet\:ext-m-auto:not([style*="margin"]) {
                margin: auto !important;
            }

            .tablet\:ext-m-base:not([style*="margin"]) {
                margin: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-m-lg:not([style*="margin"]) {
                margin: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext--m-base:not([style*="margin"]) {
                margin: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .tablet\:ext--m-lg:not([style*="margin"]) {
                margin: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .tablet\:ext-mx-0:not([style*="margin"]) {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .tablet\:ext-mx-auto:not([style*="margin"]) {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .tablet\:ext-mx-base:not([style*="margin"]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important;
                margin-right: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-mx-lg:not([style*="margin"]) {
                margin-left: var(--extendify--spacing--large, 3rem) !important;
                margin-right: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext--mx-base:not([style*="margin"]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
                margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .tablet\:ext--mx-lg:not([style*="margin"]) {
                margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
                margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .tablet\:ext-my-0:not([style*="margin"]) {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .tablet\:ext-my-auto:not([style*="margin"]) {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .tablet\:ext-my-base:not([style*="margin"]) {
                margin-top: var(--wp--style--block-gap, 1.75rem) !important;
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-my-lg:not([style*="margin"]) {
                margin-top: var(--extendify--spacing--large, 3rem) !important;
                margin-bottom: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext--my-base:not([style*="margin"]) {
                margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .tablet\:ext--my-lg:not([style*="margin"]) {
                margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
                margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .tablet\:ext-mt-0:not([style*="margin"]) {
                margin-top: 0 !important;
            }

            .tablet\:ext-mt-auto:not([style*="margin"]) {
                margin-top: auto !important;
            }

            .tablet\:ext-mt-base:not([style*="margin"]) {
                margin-top: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-mt-lg:not([style*="margin"]) {
                margin-top: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext--mt-base:not([style*="margin"]) {
                margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .tablet\:ext--mt-lg:not([style*="margin"]) {
                margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .tablet\:ext-mr-0:not([style*="margin"]) {
                margin-right: 0 !important;
            }

            .tablet\:ext-mr-auto:not([style*="margin"]) {
                margin-right: auto !important;
            }

            .tablet\:ext-mr-base:not([style*="margin"]) {
                margin-right: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-mr-lg:not([style*="margin"]) {
                margin-right: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext--mr-base:not([style*="margin"]) {
                margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .tablet\:ext--mr-lg:not([style*="margin"]) {
                margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .tablet\:ext-mb-0:not([style*="margin"]) {
                margin-bottom: 0 !important;
            }

            .tablet\:ext-mb-auto:not([style*="margin"]) {
                margin-bottom: auto !important;
            }

            .tablet\:ext-mb-base:not([style*="margin"]) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-mb-lg:not([style*="margin"]) {
                margin-bottom: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext--mb-base:not([style*="margin"]) {
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .tablet\:ext--mb-lg:not([style*="margin"]) {
                margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .tablet\:ext-ml-0:not([style*="margin"]) {
                margin-left: 0 !important;
            }

            .tablet\:ext-ml-auto:not([style*="margin"]) {
                margin-left: auto !important;
            }

            .tablet\:ext-ml-base:not([style*="margin"]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-ml-lg:not([style*="margin"]) {
                margin-left: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext--ml-base:not([style*="margin"]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .tablet\:ext--ml-lg:not([style*="margin"]) {
                margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .tablet\:ext-block {
                display: block !important;
            }

            .tablet\:ext-inline-block {
                display: inline-block !important;
            }

            .tablet\:ext-inline {
                display: inline !important;
            }

            .tablet\:ext-flex {
                display: flex !important;
            }

            .tablet\:ext-inline-flex {
                display: inline-flex !important;
            }

            .tablet\:ext-grid {
                display: grid !important;
            }

            .tablet\:ext-inline-grid {
                display: inline-grid !important;
            }

            .tablet\:ext-hidden {
                display: none !important;
            }

            .tablet\:ext-w-auto {
                width: auto !important;
            }

            .tablet\:ext-w-full {
                width: 100% !important;
            }

            .tablet\:ext-max-w-full {
                max-width: 100% !important;
            }

            .tablet\:ext-flex-1 {
                flex: 1 1 0% !important;
            }

            .tablet\:ext-flex-auto {
                flex: 1 1 auto !important;
            }

            .tablet\:ext-flex-initial {
                flex: 0 1 auto !important;
            }

            .tablet\:ext-flex-none {
                flex: none !important;
            }

            .tablet\:ext-flex-shrink-0 {
                flex-shrink: 0 !important;
            }

            .tablet\:ext-flex-shrink {
                flex-shrink: 1 !important;
            }

            .tablet\:ext-flex-grow-0 {
                flex-grow: 0 !important;
            }

            .tablet\:ext-flex-grow {
                flex-grow: 1 !important;
            }

            .tablet\:ext-list-none {
                list-style-type: none !important;
            }

            .tablet\:ext-grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
            }

            .tablet\:ext-grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }

            .tablet\:ext-grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
            }

            .tablet\:ext-grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
            }

            .tablet\:ext-grid-cols-5 {
                grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
            }

            .tablet\:ext-grid-cols-6 {
                grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
            }

            .tablet\:ext-grid-cols-7 {
                grid-template-columns: repeat(7, minmax(0, 1fr)) !important;
            }

            .tablet\:ext-grid-cols-8 {
                grid-template-columns: repeat(8, minmax(0, 1fr)) !important;
            }

            .tablet\:ext-grid-cols-9 {
                grid-template-columns: repeat(9, minmax(0, 1fr)) !important;
            }

            .tablet\:ext-grid-cols-10 {
                grid-template-columns: repeat(10, minmax(0, 1fr)) !important;
            }

            .tablet\:ext-grid-cols-11 {
                grid-template-columns: repeat(11, minmax(0, 1fr)) !important;
            }

            .tablet\:ext-grid-cols-12 {
                grid-template-columns: repeat(12, minmax(0, 1fr)) !important;
            }

            .tablet\:ext-grid-cols-none {
                grid-template-columns: none !important;
            }

            .tablet\:ext-flex-row {
                flex-direction: row !important;
            }

            .tablet\:ext-flex-row-reverse {
                flex-direction: row-reverse !important;
            }

            .tablet\:ext-flex-col {
                flex-direction: column !important;
            }

            .tablet\:ext-flex-col-reverse {
                flex-direction: column-reverse !important;
            }

            .tablet\:ext-flex-wrap {
                flex-wrap: wrap !important;
            }

            .tablet\:ext-flex-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .tablet\:ext-flex-nowrap {
                flex-wrap: nowrap !important;
            }

            .tablet\:ext-items-start {
                align-items: flex-start !important;
            }

            .tablet\:ext-items-end {
                align-items: flex-end !important;
            }

            .tablet\:ext-items-center {
                align-items: center !important;
            }

            .tablet\:ext-items-baseline {
                align-items: baseline !important;
            }

            .tablet\:ext-items-stretch {
                align-items: stretch !important;
            }

            .tablet\:ext-justify-start {
                justify-content: flex-start !important;
            }

            .tablet\:ext-justify-end {
                justify-content: flex-end !important;
            }

            .tablet\:ext-justify-center {
                justify-content: center !important;
            }

            .tablet\:ext-justify-between {
                justify-content: space-between !important;
            }

            .tablet\:ext-justify-around {
                justify-content: space-around !important;
            }

            .tablet\:ext-justify-evenly {
                justify-content: space-evenly !important;
            }

            .tablet\:ext-justify-items-start {
                justify-items: start !important;
            }

            .tablet\:ext-justify-items-end {
                justify-items: end !important;
            }

            .tablet\:ext-justify-items-center {
                justify-items: center !important;
            }

            .tablet\:ext-justify-items-stretch {
                justify-items: stretch !important;
            }

            .tablet\:ext-justify-self-auto {
                justify-self: auto !important;
            }

            .tablet\:ext-justify-self-start {
                justify-self: start !important;
            }

            .tablet\:ext-justify-self-end {
                justify-self: end !important;
            }

            .tablet\:ext-justify-self-center {
                justify-self: center !important;
            }

            .tablet\:ext-justify-self-stretch {
                justify-self: stretch !important;
            }

            .tablet\:ext-p-0:not([style*="padding"]) {
                padding: 0 !important;
            }

            .tablet\:ext-p-base:not([style*="padding"]) {
                padding: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-p-lg:not([style*="padding"]) {
                padding: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext-px-0:not([style*="padding"]) {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .tablet\:ext-px-base:not([style*="padding"]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important;
                padding-right: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-px-lg:not([style*="padding"]) {
                padding-left: var(--extendify--spacing--large, 3rem) !important;
                padding-right: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext-py-0:not([style*="padding"]) {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .tablet\:ext-py-base:not([style*="padding"]) {
                padding-top: var(--wp--style--block-gap, 1.75rem) !important;
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-py-lg:not([style*="padding"]) {
                padding-top: var(--extendify--spacing--large, 3rem) !important;
                padding-bottom: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext-pt-0:not([style*="padding"]) {
                padding-top: 0 !important;
            }

            .tablet\:ext-pt-base:not([style*="padding"]) {
                padding-top: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-pt-lg:not([style*="padding"]) {
                padding-top: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext-pr-0:not([style*="padding"]) {
                padding-right: 0 !important;
            }

            .tablet\:ext-pr-base:not([style*="padding"]) {
                padding-right: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-pr-lg:not([style*="padding"]) {
                padding-right: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext-pb-0:not([style*="padding"]) {
                padding-bottom: 0 !important;
            }

            .tablet\:ext-pb-base:not([style*="padding"]) {
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-pb-lg:not([style*="padding"]) {
                padding-bottom: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext-pl-0:not([style*="padding"]) {
                padding-left: 0 !important;
            }

            .tablet\:ext-pl-base:not([style*="padding"]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .tablet\:ext-pl-lg:not([style*="padding"]) {
                padding-left: var(--extendify--spacing--large, 3rem) !important;
            }

            .tablet\:ext-text-left {
                text-align: left !important;
            }

            .tablet\:ext-text-center {
                text-align: center !important;
            }

            .tablet\:ext-text-right {
                text-align: right !important;
            }
        }

        @media (min-width: 1080px) {
            .desktop\:ext-absolute {
                position: absolute !important;
            }

            .desktop\:ext-relative {
                position: relative !important;
            }

            .desktop\:ext-top-base {
                top: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-top-lg {
                top: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext--top-base {
                top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .desktop\:ext--top-lg {
                top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .desktop\:ext-right-base {
                right: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-right-lg {
                right: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext--right-base {
                right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .desktop\:ext--right-lg {
                right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .desktop\:ext-bottom-base {
                bottom: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-bottom-lg {
                bottom: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext--bottom-base {
                bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .desktop\:ext--bottom-lg {
                bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .desktop\:ext-left-base {
                left: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-left-lg {
                left: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext--left-base {
                left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .desktop\:ext--left-lg {
                left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .desktop\:ext-order-1 {
                order: 1 !important;
            }

            .desktop\:ext-order-2 {
                order: 2 !important;
            }

            .desktop\:ext-m-0:not([style*="margin"]) {
                margin: 0 !important;
            }

            .desktop\:ext-m-auto:not([style*="margin"]) {
                margin: auto !important;
            }

            .desktop\:ext-m-base:not([style*="margin"]) {
                margin: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-m-lg:not([style*="margin"]) {
                margin: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext--m-base:not([style*="margin"]) {
                margin: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .desktop\:ext--m-lg:not([style*="margin"]) {
                margin: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .desktop\:ext-mx-0:not([style*="margin"]) {
                margin-left: 0 !important;
                margin-right: 0 !important;
            }

            .desktop\:ext-mx-auto:not([style*="margin"]) {
                margin-left: auto !important;
                margin-right: auto !important;
            }

            .desktop\:ext-mx-base:not([style*="margin"]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important;
                margin-right: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-mx-lg:not([style*="margin"]) {
                margin-left: var(--extendify--spacing--large, 3rem) !important;
                margin-right: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext--mx-base:not([style*="margin"]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
                margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .desktop\:ext--mx-lg:not([style*="margin"]) {
                margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
                margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .desktop\:ext-my-0:not([style*="margin"]) {
                margin-top: 0 !important;
                margin-bottom: 0 !important;
            }

            .desktop\:ext-my-auto:not([style*="margin"]) {
                margin-top: auto !important;
                margin-bottom: auto !important;
            }

            .desktop\:ext-my-base:not([style*="margin"]) {
                margin-top: var(--wp--style--block-gap, 1.75rem) !important;
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-my-lg:not([style*="margin"]) {
                margin-top: var(--extendify--spacing--large, 3rem) !important;
                margin-bottom: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext--my-base:not([style*="margin"]) {
                margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .desktop\:ext--my-lg:not([style*="margin"]) {
                margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
                margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .desktop\:ext-mt-0:not([style*="margin"]) {
                margin-top: 0 !important;
            }

            .desktop\:ext-mt-auto:not([style*="margin"]) {
                margin-top: auto !important;
            }

            .desktop\:ext-mt-base:not([style*="margin"]) {
                margin-top: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-mt-lg:not([style*="margin"]) {
                margin-top: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext--mt-base:not([style*="margin"]) {
                margin-top: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .desktop\:ext--mt-lg:not([style*="margin"]) {
                margin-top: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .desktop\:ext-mr-0:not([style*="margin"]) {
                margin-right: 0 !important;
            }

            .desktop\:ext-mr-auto:not([style*="margin"]) {
                margin-right: auto !important;
            }

            .desktop\:ext-mr-base:not([style*="margin"]) {
                margin-right: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-mr-lg:not([style*="margin"]) {
                margin-right: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext--mr-base:not([style*="margin"]) {
                margin-right: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .desktop\:ext--mr-lg:not([style*="margin"]) {
                margin-right: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .desktop\:ext-mb-0:not([style*="margin"]) {
                margin-bottom: 0 !important;
            }

            .desktop\:ext-mb-auto:not([style*="margin"]) {
                margin-bottom: auto !important;
            }

            .desktop\:ext-mb-base:not([style*="margin"]) {
                margin-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-mb-lg:not([style*="margin"]) {
                margin-bottom: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext--mb-base:not([style*="margin"]) {
                margin-bottom: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .desktop\:ext--mb-lg:not([style*="margin"]) {
                margin-bottom: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .desktop\:ext-ml-0:not([style*="margin"]) {
                margin-left: 0 !important;
            }

            .desktop\:ext-ml-auto:not([style*="margin"]) {
                margin-left: auto !important;
            }

            .desktop\:ext-ml-base:not([style*="margin"]) {
                margin-left: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-ml-lg:not([style*="margin"]) {
                margin-left: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext--ml-base:not([style*="margin"]) {
                margin-left: calc(var(--wp--style--block-gap, 1.75rem) * -1) !important;
            }

            .desktop\:ext--ml-lg:not([style*="margin"]) {
                margin-left: calc(var(--extendify--spacing--large, 3rem) * -1) !important;
            }

            .desktop\:ext-block {
                display: block !important;
            }

            .desktop\:ext-inline-block {
                display: inline-block !important;
            }

            .desktop\:ext-inline {
                display: inline !important;
            }

            .desktop\:ext-flex {
                display: flex !important;
            }

            .desktop\:ext-inline-flex {
                display: inline-flex !important;
            }

            .desktop\:ext-grid {
                display: grid !important;
            }

            .desktop\:ext-inline-grid {
                display: inline-grid !important;
            }

            .desktop\:ext-hidden {
                display: none !important;
            }

            .desktop\:ext-w-auto {
                width: auto !important;
            }

            .desktop\:ext-w-full {
                width: 100% !important;
            }

            .desktop\:ext-max-w-full {
                max-width: 100% !important;
            }

            .desktop\:ext-flex-1 {
                flex: 1 1 0% !important;
            }

            .desktop\:ext-flex-auto {
                flex: 1 1 auto !important;
            }

            .desktop\:ext-flex-initial {
                flex: 0 1 auto !important;
            }

            .desktop\:ext-flex-none {
                flex: none !important;
            }

            .desktop\:ext-flex-shrink-0 {
                flex-shrink: 0 !important;
            }

            .desktop\:ext-flex-shrink {
                flex-shrink: 1 !important;
            }

            .desktop\:ext-flex-grow-0 {
                flex-grow: 0 !important;
            }

            .desktop\:ext-flex-grow {
                flex-grow: 1 !important;
            }

            .desktop\:ext-list-none {
                list-style-type: none !important;
            }

            .desktop\:ext-grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
            }

            .desktop\:ext-grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }

            .desktop\:ext-grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
            }

            .desktop\:ext-grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr)) !important;
            }

            .desktop\:ext-grid-cols-5 {
                grid-template-columns: repeat(5, minmax(0, 1fr)) !important;
            }

            .desktop\:ext-grid-cols-6 {
                grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
            }

            .desktop\:ext-grid-cols-7 {
                grid-template-columns: repeat(7, minmax(0, 1fr)) !important;
            }

            .desktop\:ext-grid-cols-8 {
                grid-template-columns: repeat(8, minmax(0, 1fr)) !important;
            }

            .desktop\:ext-grid-cols-9 {
                grid-template-columns: repeat(9, minmax(0, 1fr)) !important;
            }

            .desktop\:ext-grid-cols-10 {
                grid-template-columns: repeat(10, minmax(0, 1fr)) !important;
            }

            .desktop\:ext-grid-cols-11 {
                grid-template-columns: repeat(11, minmax(0, 1fr)) !important;
            }

            .desktop\:ext-grid-cols-12 {
                grid-template-columns: repeat(12, minmax(0, 1fr)) !important;
            }

            .desktop\:ext-grid-cols-none {
                grid-template-columns: none !important;
            }

            .desktop\:ext-flex-row {
                flex-direction: row !important;
            }

            .desktop\:ext-flex-row-reverse {
                flex-direction: row-reverse !important;
            }

            .desktop\:ext-flex-col {
                flex-direction: column !important;
            }

            .desktop\:ext-flex-col-reverse {
                flex-direction: column-reverse !important;
            }

            .desktop\:ext-flex-wrap {
                flex-wrap: wrap !important;
            }

            .desktop\:ext-flex-wrap-reverse {
                flex-wrap: wrap-reverse !important;
            }

            .desktop\:ext-flex-nowrap {
                flex-wrap: nowrap !important;
            }

            .desktop\:ext-items-start {
                align-items: flex-start !important;
            }

            .desktop\:ext-items-end {
                align-items: flex-end !important;
            }

            .desktop\:ext-items-center {
                align-items: center !important;
            }

            .desktop\:ext-items-baseline {
                align-items: baseline !important;
            }

            .desktop\:ext-items-stretch {
                align-items: stretch !important;
            }

            .desktop\:ext-justify-start {
                justify-content: flex-start !important;
            }

            .desktop\:ext-justify-end {
                justify-content: flex-end !important;
            }

            .desktop\:ext-justify-center {
                justify-content: center !important;
            }

            .desktop\:ext-justify-between {
                justify-content: space-between !important;
            }

            .desktop\:ext-justify-around {
                justify-content: space-around !important;
            }

            .desktop\:ext-justify-evenly {
                justify-content: space-evenly !important;
            }

            .desktop\:ext-justify-items-start {
                justify-items: start !important;
            }

            .desktop\:ext-justify-items-end {
                justify-items: end !important;
            }

            .desktop\:ext-justify-items-center {
                justify-items: center !important;
            }

            .desktop\:ext-justify-items-stretch {
                justify-items: stretch !important;
            }

            .desktop\:ext-justify-self-auto {
                justify-self: auto !important;
            }

            .desktop\:ext-justify-self-start {
                justify-self: start !important;
            }

            .desktop\:ext-justify-self-end {
                justify-self: end !important;
            }

            .desktop\:ext-justify-self-center {
                justify-self: center !important;
            }

            .desktop\:ext-justify-self-stretch {
                justify-self: stretch !important;
            }

            .desktop\:ext-p-0:not([style*="padding"]) {
                padding: 0 !important;
            }

            .desktop\:ext-p-base:not([style*="padding"]) {
                padding: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-p-lg:not([style*="padding"]) {
                padding: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext-px-0:not([style*="padding"]) {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }

            .desktop\:ext-px-base:not([style*="padding"]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important;
                padding-right: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-px-lg:not([style*="padding"]) {
                padding-left: var(--extendify--spacing--large, 3rem) !important;
                padding-right: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext-py-0:not([style*="padding"]) {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .desktop\:ext-py-base:not([style*="padding"]) {
                padding-top: var(--wp--style--block-gap, 1.75rem) !important;
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-py-lg:not([style*="padding"]) {
                padding-top: var(--extendify--spacing--large, 3rem) !important;
                padding-bottom: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext-pt-0:not([style*="padding"]) {
                padding-top: 0 !important;
            }

            .desktop\:ext-pt-base:not([style*="padding"]) {
                padding-top: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-pt-lg:not([style*="padding"]) {
                padding-top: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext-pr-0:not([style*="padding"]) {
                padding-right: 0 !important;
            }

            .desktop\:ext-pr-base:not([style*="padding"]) {
                padding-right: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-pr-lg:not([style*="padding"]) {
                padding-right: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext-pb-0:not([style*="padding"]) {
                padding-bottom: 0 !important;
            }

            .desktop\:ext-pb-base:not([style*="padding"]) {
                padding-bottom: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-pb-lg:not([style*="padding"]) {
                padding-bottom: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext-pl-0:not([style*="padding"]) {
                padding-left: 0 !important;
            }

            .desktop\:ext-pl-base:not([style*="padding"]) {
                padding-left: var(--wp--style--block-gap, 1.75rem) !important;
            }

            .desktop\:ext-pl-lg:not([style*="padding"]) {
                padding-left: var(--extendify--spacing--large, 3rem) !important;
            }

            .desktop\:ext-text-left {
                text-align: left !important;
            }

            .desktop\:ext-text-center {
                text-align: center !important;
            }

            .desktop\:ext-text-right {
                text-align: right !important;
            }
        }
    </style>
    <link rel="stylesheet" id="woocommerce-layout-css" href="/site/css/woocommerce-layout.css" type="text/css"
        media="all" />
    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="/site/css/woocommerce-smallscreen.css" type="text/css"
        media="only screen and (max-width: 767px)" />
    <link rel="stylesheet" id="woocommerce-general-css" href="/site/css/woocommerce.css" type="text/css"
        media="all" />
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" id="yith-quick-view-css" href="/site/css/yith-quick-view.css" type="text/css"
        media="all" />
    <style id="yith-quick-view-inline-css" type="text/css">
        #yith-quick-view-modal .yith-wcqv-main {
            background: #ffffff;
        }

        #yith-quick-view-close {
            color: #cdcdcd;
        }

        #yith-quick-view-close:hover {
            color: #ff0000;
        }
    </style>
    <link rel="stylesheet" id="elementor-icons-css" href="/site/lib/eicons/css/elementor-icons.min.css"
        type="text/css" media="all" />
    <link rel="stylesheet" id="elementor-frontend-css" href="/site/css/frontend.min.css" type="text/css"
        media="all" />
    <style id="elementor-frontend-inline-css" type="text/css">
        .elementor-kit-2717 {
            --e-global-color-primary: #6ec1e4;
            --e-global-color-secondary: #54595f;
            --e-global-color-text: #7a7a7a;
            --e-global-color-accent: #61ce70;
            --e-global-color-466c8451: #4054b2;
            --e-global-color-3df188f7: #23a455;
            --e-global-color-664c72b0: #000;
            --e-global-color-59a836b1: #fff;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Roboto Slab";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1240px;
        }

            {}

        h1.entry-title {
            display: var(--page-title-display);
        }

        @media (max-width: 1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px;
            }
        }

        @media (max-width: 767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px;
            }
        }

        .elementor-1247 .elementor-element.elementor-element-56941cdd {
            transition: background 0.3s, border 0.3s, border-radius 0.3s,
                box-shadow 0.3s;
        }

        .elementor-1247 .elementor-element.elementor-element-56941cdd>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-1247 .elementor-element.elementor-element-2a5ad96 {
            padding: 110px 0px 110px 0px;
        }

        .elementor-1247 .elementor-element.elementor-element-14e5960f:not(.elementor-motion-effects-element-type-background),
        .elementor-1247 .elementor-element.elementor-element-14e5960f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("/site/images/background/figure2.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-1247 .elementor-element.elementor-element-14e5960f>.elementor-background-overlay {
            background-image: url("/site/images/background/figure-icon3.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.5;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-1247 .elementor-element.elementor-element-14e5960f {
            transition: background 0.3s, border 0.3s, border-radius 0.3s,
                box-shadow 0.3s;
            padding: 106px 0px 58px 0px;
        }

        .elementor-1247 .elementor-element.elementor-element-789bf829 .rtin-title {
            color: #ffffff;
        }

        .elementor-1247 .elementor-element.elementor-element-789bf829 .rtin-subtitle {
            color: #f9f9f9;
        }

        .elementor-1247 .elementor-element.elementor-element-9d95030 {
            padding: 106px 0px 110px 0px;
        }

        .elementor-1247 .elementor-element.elementor-element-f58bbc8 .rtin-title {
            color: #282828;
        }

        .elementor-1247 .elementor-element.elementor-element-f58bbc8 .rtin-subtitle {
            color: #444444;
        }

        .elementor-1247 .elementor-element.elementor-element-bc8b1ca:not(.elementor-motion-effects-element-type-background),
        .elementor-1247 .elementor-element.elementor-element-bc8b1ca>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #263238;
            background-image: url("/site/images/background/Layer-485.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .elementor-1247 .elementor-element.elementor-element-bc8b1ca {
            transition: background 0.3s, border 0.3s, border-radius 0.3s,
                box-shadow 0.3s;
            padding: 105px 0px 105px 0px;
        }

        .elementor-1247 .elementor-element.elementor-element-bc8b1ca>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-1247 .elementor-element.elementor-element-c2f5084 {
            padding: 104px 0px 110px 0px;
        }

        .elementor-1247 .elementor-element.elementor-element-7592e789 .rtin-title {
            color: #282828;
        }

        .elementor-1247 .elementor-element.elementor-element-7592e789 .rtin-subtitle {
            color: #444444;
        }

        .elementor-1247 .elementor-element.elementor-element-31eeb272>.elementor-widget-container {
            padding: 0px 0px 15px 0px;
            border-style: solid;
            border-width: 0px 0px 1px 0px;
            border-color: #dcdcdc;
        }

        .elementor-1247 .elementor-element.elementor-element-6dfec7f0>.elementor-widget-container {
            padding: 30px 0px 0px 0px;
        }

        .elementor-1247 .elementor-element.elementor-element-17defc22:not(.elementor-motion-effects-element-type-background),
        .elementor-1247 .elementor-element.elementor-element-17defc22>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #f8f8f8;
            background-image: url("/site/images/background/figure3.png");
        }

        .elementor-1247 .elementor-element.elementor-element-17defc22 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s,
                box-shadow 0.3s;
            padding: 106px 0px 80px 0px;
        }

        .elementor-1247 .elementor-element.elementor-element-17defc22>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-1247 .elementor-element.elementor-element-15394e8c .rtin-title {
            color: #282828;
        }

        .elementor-1247 .elementor-element.elementor-element-15394e8c .rtin-subtitle {
            color: #444444;
        }

        .elementor-1247 .elementor-element.elementor-element-24432544:not(.elementor-motion-effects-element-type-background),
        .elementor-1247 .elementor-element.elementor-element-24432544>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #e5e3df;
        }

        .elementor-1247 .elementor-element.elementor-element-24432544 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s,
                box-shadow 0.3s;
        }

        .elementor-1247 .elementor-element.elementor-element-24432544>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-1247 .elementor-element.elementor-element-7a272ef0:not(.elementor-motion-effects-element-type-background),
        .elementor-1247 .elementor-element.elementor-element-7a272ef0>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("/site/images/background/figure1.jpg");
        }

        .elementor-1247 .elementor-element.elementor-element-7a272ef0>.elementor-background-overlay {
            background-color: #0e3650;
            background-image: url("/site/images/background/figure-icon1.png");
            background-position: center center;
            background-repeat: repeat;
            background-size: cover;
            opacity: 0.89;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-1247 .elementor-element.elementor-element-7a272ef0 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s,
                box-shadow 0.3s;
            padding: 105px 0px 110px 0px;
        }

        @media (min-width: 1025px) {

            .elementor-1247 .elementor-element.elementor-element-bc8b1ca:not(.elementor-motion-effects-element-type-background),
            .elementor-1247 .elementor-element.elementor-element-bc8b1ca>.elementor-motion-effects-container>.elementor-motion-effects-layer {
                background-attachment: fixed;
            }
        }

        @media (max-width: 1024px) {
            .elementor-1247 .elementor-element.elementor-element-2a5ad96 {
                padding: 65px 0px 90px 0px;
            }

            .elementor-1247 .elementor-element.elementor-element-14e5960f {
                padding: 86px 0px 50px 0px;
            }

            .elementor-1247 .elementor-element.elementor-element-9d95030 {
                padding: 88px 0px 70px 0px;
            }

            .elementor-1247 .elementor-element.elementor-element-bc8b1ca {
                padding: 85px 0px 84px 0px;
            }

            .elementor-1247 .elementor-element.elementor-element-c2f5084 {
                padding: 88px 0px 90px 0px;
            }

            .elementor-1247 .elementor-element.elementor-element-17defc22 {
                padding: 80px 0px 68px 0px;
            }

            .elementor-1247 .elementor-element.elementor-element-7a272ef0 {
                padding: 65px 0px 72px 0px;
            }
        }

        @media (max-width: 767px) {
            .elementor-1247 .elementor-element.elementor-element-6ab1ddd6>.elementor-element-populated {
                padding: 35px 0px 35px 0px;
            }

            .elementor-1247 .elementor-element.elementor-element-2a5ad96 {
                padding: 64px 0px 90px 0px;
            }

            .elementor-1247 .elementor-element.elementor-element-14e5960f {
                padding: 80px 0px 55px 0px;
            }

            .elementor-1247 .elementor-element.elementor-element-9d95030 {
                padding: 82px 0px 70px 0px;
            }

            .elementor-1247 .elementor-element.elementor-element-bc8b1ca {
                padding: 84px 0px 84px 0px;
            }

            .elementor-1247 .elementor-element.elementor-element-17defc22 {
                padding: 78px 0px 75px 0px;
            }

            .elementor-1247 .elementor-element.elementor-element-7a272ef0 {
                padding: 45px 0px 60px 0px;
            }
        }
    </style>
    <link rel="stylesheet" id="font-awesome-css" href="/site/css/font-awesome.min.css" type="text/css"
        media="all" />
    <style id="font-awesome-inline-css" type="text/css">
        [data-font="FontAwesome"]:before {
            font-family: "FontAwesome" !important;
            content: attr(data-icon) !important;
            speak: none !important;
            font-weight: normal !important;
            font-variant: normal !important;
            text-transform: none !important;
            line-height: 1 !important;
            font-style: normal !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }
    </style>
    <link rel="stylesheet" id="bootstrap-css" href="/site/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" id="animate-css" href="/site/css/animate.min.css" type="text/css" media="all" />
    <link rel="stylesheet" id="eventalk-style-css" href="/site/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" id="eventalk-elementor-css" href="/site/css/elementor.css" type="text/css"
        media="all" />
    <link rel="stylesheet" id="eventalk-update-css-css" href="/site/css/update-css.css" type="text/css"
        media="all" />
    <style id="eventalk-dynamic-inline-css" type="text/css">
        .entry-banner {
            background-image: url(/site/images/background/banner.jpg);
        }

        .content-area {
            padding-top: 0px;
        }

        .content-area {
            padding-bottom: 0px;
        }

        .entry-banner {
            background-attachment: fixed;
        }

        .mobile-stick .mean-container .mean-bar {
            background-color: #ffffff;
        }

        .primary-color {
            color: #0e3650;
        }

        .secondery-color {
            color: #3A98DC;
        }

        .primary-bgcolor,
        .bg-primary {
            background-color: #0e3650 !important;
        }

        .secondery-bgcolor,
        .bg-secondary {
            background-color: #9900cc !important;
        }

        .site-wrp .color-primary {
            color: #0e3650;
        }

        .overlay-primary80:before {
            background-color: rgba(23, 53, 91, 0.8);
        }

        .overlay-primary90:before {
            background-color: rgba(23, 53, 91, 0.9);
        }

        body #preloader {
            background-color: #0e3650;
        }

        #tophead {
            background-color: #ffffff;
        }

        #tophead .tophead-contact .fa,
        #tophead .tophead-address .fa {
            color: #0e3650;
        }

        #tophead,
        #tophead a,
        #tophead .tophead-social li a,
        #tophead .tophead-social li a:hover {
            color: #444444;
        }

        #tophead .tophead-contact .fa,
        #tophead .tophead-address .fa {
            color: #3A98DC;
        }

        .trheader #tophead {
            background-color: rgba(255, 255, 255, 0.8);
        }

        .trheader #tophead,
        .trheader #tophead a,
        .trheader #tophead .tophead-social li a,
        .trheader #tophead .tophead-social li a:hover {
            color: #444444;
        }

        .topbar-style-5 #tophead .tophead-social li a:hover,
        .trheader.topbar-style-5 #tophead .tophead-social li a:hover {
            color: #3A98DC;
        }

        .site-wrp .ls-v6 .ls-nav-prev:after,
        .site-wrp .ls-v6 .ls-nav-next:after {
            color: #3A98DC !important;
        }

        .site-wrp .ls-v6 .ls-nav-prev,
        .site-wrp .ls-v6 .ls-nav-next {
            border: 2px solid #3A98DC !important;
        }

        .site-wrp .ls-v6 .ls-nav-next:hover,
        .site-wrp .ls-v6 .ls-nav-prev:hover {
            border: 2px solid #3A98DC !important;
            background-color: #3A98DC !important;
        }

        .site-wrp .ls-v6 .ls-nav-next:after {
            border-right: 3px solid #3A98DC !important;
        }

        .site-wrp .ls-v6 .ls-nav-prev:after,
        .site-wrp .ls-v6 .ls-nav-next:after {
            border-top: 3px solid #3A98DC !important;
        }

        .site-wrp .ls-v6 .ls-nav-prev:after {
            border-left: 3px solid #3A98DC !important;
        }

        .header-icon-area .search-box .search-button i {
            color: #0e3650;
        }

        .search-form .custom-search-input button.btn {
            background-color: #3A98DC;
        }

        .site-header .main-navigation ul li a {
            font-family: Poppins, sans-serif;
            font-size: 15px;
            font-weight: 600;
            line-height: 22px;
            color: #111111;
            text-transform: uppercase;
            font-style: normal;
        }

        .site-header .main-navigation ul.menu>li>a:hover,
        .site-header .main-navigation ul.menu>li.current-menu-item>a,
        .site-header .main-navigation ul.menu>li.current>a {
            color: #3A98DC;
        }

        .trheader.non-stick .site-header .main-navigation ul.menu>li>a,
        .trheader.non-stick .site-header .search-box .search-button i,
        .trheader.non-stick .header-icon-seperator,
        .trheader.non-stick .header-icon-area .cart-icon-area>a,
        .trheader.non-stick .additional-menu-area a.side-menu-trigger {
            color: #ffffff;
        }

        .trheader.non-stick .site-header .main-navigation ul.menu>li>a:hover,
        .trheader.non-stick .site-header .main-navigation ul.menu>li.current-menu-item>a,
        .trheader.non-stick .site-header .main-navigation ul.menu>li.current>a {
            color: #3A98DC;
        }

        .site-header .main-navigation ul li ul {
            border-top: 1px solid #3A98DC;
        }

        .site-header .main-navigation ul li ul li:hover>a {
            background-color: #3A98DC;
        }

        .site-header .main-navigation ul li ul li a {
            font-family: Poppins, sans-serif;
            font-size: 15px;
            font-weight: 500;
            line-height: 22px;
            color: #111111;
            text-transform: none;
            font-style: normal;
        }

        .stick .site-header {
            border-color: #0e3650;
        }

        .site-header .main-navigation ul li.mega-menu>ul.sub-menu {
            background-color: #3A98DC;
        }

        .site-header .main-navigation ul li.mega-menu ul.sub-menu li a {
            color: #111111;
        }

        .site-header .main-navigation ul li.mega-menu ul.sub-menu li a:hover {
            background-color: #3A98DC;
            color: #111111;
        }

        .mean-container a.meanmenu-reveal,
        .mean-container .mean-nav ul li a.mean-expand {
            color: #3A98DC;
        }

        .mean-container a.meanmenu-reveal span {
            background-color: #3A98DC;
        }

        .mean-container .mean-bar {
            border-color: #3A98DC;
        }

        .mean-container .mean-nav ul li a {
            font-family: Poppins, sans-serif;
            font-size: 14px;
            font-weight: 500;
            line-height: 22px;
            color: #111111;
            text-transform: none;
            font-style: normal;
        }

        .mean-container .mean-nav ul li a:hover,
        .mean-container .mean-nav>ul>li.current-menu-item>a {
            color: #3A98DC;
        }

        .header-icon-area .cart-icon-area .cart-icon-num {
            background-color: #3A98DC;
        }

        .site-header .search-box .search-text {
            border-color: #3A98DC;
        }

        .header-style-3 .header-social li a:hover {
            color: #3A98DC;
        }

        .header-style-3.trheader .header-contact li a,
        .header-style-3.trheader .header-social li a {
            color: #ffffff;
        }

        .header-style-3.trheader .header-social li a:hover {
            color: #3A98DC;
        }

        .header-style-4 .header-social li a:hover {
            color: #3A98DC;
        }

        .header-style-4.trheader .header-contact li a,
        .header-style-4.trheader .header-social li a {
            color: #ffffff;
        }

        .header-style-4.trheader .header-social li a:hover {
            color: #3A98DC;
        }

        .entry-banner .entry-banner-content h1 {
            color: #ffffff;
        }

        .breadcrumb-area .entry-breadcrumb span a,
        .breadcrumb-area .entry-breadcrumb span a span {
            color: #3A98DC;
        }

        .breadcrumb-area .entry-breadcrumb span a:hover,
        .breadcrumb-area .entry-breadcrumb span a:hover span {
            color: #ffffff;
        }

        .breadcrumb-area .entry-breadcrumb {
            color: #ffffff;
        }

        .breadcrumb-area .entry-breadcrumb>span {
            color: #ffffff;
        }

        < !-- .footer-layout1.bg-light {
            background-color: #0e3650 !important;
        }

        .footer-layout1.bg-light .widget>h3 {
            color: #ffffff;
        }

        .footer-layout1.bg-light .widget {
            color: #b3b3b3;
        }

        .footer-layout1.bg-light a:link,
        .footer-layout1.bg-light a:visited,
        .footer-layout1.bg-light widget_nav_menu ul.menu li:before {
            color: #b3b3b3;
        }

        .footer-layout1.bg-light .widget a:hover,
        .footer-layout1.bg-light .widget a:active {
            color: #3A98DC;
        }

        .footer-layout2 .footer-top-area .widget .btn-fill.size-md,
        .footer-layout2 .footer-top-area .widget .btn-ghost.size-md {
            background-color: #3A98DC;
        }

        .footer-layout2 .footer-top-area .widget .footer-widget-contact a:hover {
            color: #3A98DC;
        }

        .widget_eventalk_info.widget ul li i,
        .footer-layout2 .footer-top-area .widget .footer-widget-contact:before,
        .footer-layout2 .footer-bottom-area a:hover {
            color: #3A98DC;
        }

        .widget.widget_eventalk_about ul li a:hover {
            color: #0e3650;
        }

        .kebo-tweets .ktweet .kmeta a {
            color: #0e3650;
        }

        .footer-top-area .widget ul li:before {
            color: #3A98DC;
        }

        .footer-top-area .widget a:hover,
        .footer-top-area .widget a:active {
            color: #0e3650;
        }

        .footer-top-area {
            background-color: #0e3650 !important;
        }

        .footer-top-area .widget>h3 {
            color: #ffffff;
        }

        .footer-top-area .widget {
            color: #b3b3b3;
        }

        .footer-top-area a:link,
        .footer-top-area a:visited,
        .footer-top-area widget_nav_menu ul.menu li:before {
            color: #b3b3b3;
        }

        .footer-top-area .widget a:hover,
        .footer-top-area .widget a:active {
            color: #3A98DC;
        }

        .footer-bottom-area {
            background-color: #0e3650;
            color: #8f8f8f;
        }

        a.scrollToTop {
            background-color: rgba(23, 53, 91, 0.3);
            color: #0e3650;
            border-color: #0e3650;
        }

        a.scrollToTop:hover,
        a.scrollToTop:focus,
        .sidebar-widget-area .widget_eventalk_info {
            background-color: #0e3650;
        }

        .footer-top-area .widget.widget_eventalk_info ul li i {
            color: #3A98DC;
        }

        .widget .category-type ul li:before {
            color: #0e3650;
        }

        .widget h3:after {
            background-color: #3A98DC;
        }

        footer .widget h3:after {
            background-color: #3A98DC;
        }

        .widget ul li:before {
            color: #3A98DC;
        }

        .widget ul li a:hover {
            color: #3A98DC;
        }

        .widget_tag_cloud a:hover {
            border-color: #3A98DC;
            background-color: #3A98DC;
        }

        .footer-top-area .widget.widget_tag_cloud a:hover {
            border-color: #0e3650;
        }

        .widget.widget_eventalk_about ul li a {
            border-color: #0e3650;
        }

        .widget.widget_eventalk_info ul li i {
            color: #0e3650;
        }

        .widget.widget_eventalk_menu ul li a i {
            color: #0e3650;
        }

        body,
        ul li {
            font-family: "Roboto", sans-serif;
            font-size: 16px;
            line-height: 28px;
            font-weight: 400;
            font-style: normal;
        }



        h1 {
            font-family: "itgest";
            font-size: 52px;
            line-height: 50px;
            font-weight: 700;
            font-style: normal;
        }

        h2 {
            font-family: "itgest";
            font-size: 36px;
            line-height: 38px;
            font-weight: 700;
            font-style: normal;
        }

        h3 {
            font-family: "itgest";
            font-size: 28px;
            line-height: 36px;
            font-weight: 700;
            font-style: normal;
        }

        h4 {
            font-family: "itgest";
            font-size: 22px;
            line-height: 30px;
            font-weight: 700;
            font-style: normal;
        }

        h5 {
            font-family: "itgest";
            font-size: 18px;
            line-height: 26px;
            font-weight: 700;
            font-style: normal;
        }

        h6 {
            font-family: "itgest";
            font-size: 16px;
            line-height: 24px;
            font-weight: 500;
            font-style: normal;
        }

        .pagination-area ul li.active a,
        .pagination-area ul li a:hover,
        .pagination-area ul li span.current {
            background-color: #3A98DC;
        }

        .price-table-layout2:hover .tpt-footer .tpt-footer-btn:hover {
            background-color: #3A98DC;
        }

        .btn-ghost.color-light.hover-yellow:hover {
            border-color: #3A98DC;
            color: #3A98DC;
        }

        .profile-social li a:hover {
            border: 1px solid #0e3650;
            background: #0e3650;
        }

        .profile-social li a:hover {
            border: 1px solid #0e3650;
            background-color: #0e3650;
        }

        .rt-el-slider .nivo-directionNav a.nivo-prevNav,
        .rt-el-slider .nivo-directionNav a.nivo-nextNav {
            border: 1px solid #3A98DC;
        }

        .site-wrp .btn-fill.color-primary {
            background-color: #0e3650;
            border-color: #0e3650;
            color: #ffffff;
        }

        .site-wrp .btn-fill.color-primary:hover {
            color: #0e3650;
        }

        .site-wrp .btn-fill.color-yellow {
            background-color: #3A98DC;
            border-color: #3A98DC;
        }

        .btn-ghost.color-yellow {
            border-color: #3A98DC;
            color: #3A98DC;
        }

        .btn-ghost.color-yellow:hover {
            background-color: #3A98DC;
        }

        .schedule-layout1 .schedule-time i {
            color: #3A98DC;
        }

        .site-wrp .btn-fill.color-yellow:hover {
            border-color: #0e3650;
            background-color: #0e3650;
            color: #ffffff;
        }

        .site-wrp .btn-fill.color-yellow.gust:hover {
            border-color: #3A98DC;
            background-color: transparent;
            color: #3A98DC;
        }

        .site-wrp .rtin-light .btn-fill.color-yellow.gust:hover {
            border-color: #0e3650;
            background-color: #0e3650;
            color: #ffffff;
        }

        .blog-layout1 .item-img .item-date {
            background-color: #3A98DC;
        }

        .site-wrp .btn-text:hover:before {
            color: #3A98DC;
        }

        .site-wrp .btn-text:hover {
            color: #3A98DC;
        }

        .rt-el-info-box.rtin-style1.rtin-dark .rtin-title a {
            color: #3A98DC;
        }

        .footer-layout1 .footer-social ul li a:before,
        .footer-layout1 .footer-social ul li a:after {
            background-color: #3A98DC;
        }

        .footer-layout1 .footer-social ul li a:hover {
            color: #3A98DC;
        }

        .rt-el-cta-1.style2 .rtin-button a {
            color: #0e3650;
        }

        .rdtheme-button-1,
        .rdtheme-button-ghost-1 {
            background-color: #0e3650;
        }

        .rdtheme-button-1:hover {
            background-color: #3A98DC;
        }

        .rdtheme-button-ghost-1 {
            border-color: #0e3650;
        }

        .rdtheme-button-2:hover {
            border-color: #0e3650;
            background-color: #0e3650;
        }

        .rdtheme-button-ghost-1:hover {
            color: #0e3650;
        }

        .rdtheme-button-4 {
            border: 2px solid #0e3650;
        }

        .rdtheme-button-4:hover {
            background-color: #0e3650;
        }

        .rt-el-services-box.rtin-style3:hover {
            -webkit-box-shadow: inset 2px 0px 73px 0px rgba(23, 53, 91, 0.5);
            -moz-box-shadow: inset 2px 0px 73px 0px rgba(23, 53, 91, 0.5);
            box-shadow: inset 2px 0px 73px 0px rgba(23, 53, 91, 0.5);
        }

        .rdtheme-button-2 {
            border: 2px solid #0e3650;
        }

        .schedule-layout1 .schedule-title a:hover {
            color: #3A98DC;
        }

        a {
            color: #0e3650;
        }

        a:hover,
        a:focus,
        a:active {
            color: #3A98DC;
        }

        button,
        input[type="button"],
        input[type="reset"],
        input[type="submit"],
        .primary-list li:before {
            background-color: #0e3650;
        }

        .post-each .entry-thumbnail-area .entry-meta-1 li i,
        .post-each .entry-thumbnail-area .entry-meta-1 li a:hover,
        .post-each .entry-content-area .entry-header a.entry-title:hover,
        .post-each .entry-content-area .read-more-btn i,
        .post-each .entry-content-area .read-more-btn:hover,
        .post-each.post-each-single .entry-content-area .entry-tags a:hover {
            color: #3A98DC;
        }

        .site-index .sticky {
            border-color: #0e3650;
        }

        .comments-area h3.comment-title:after,
        .comments-area .main-comments .comment-meta .reply-area a:hover,
        #respond .comment-reply-title:after,
        #respond form .btn-send {
            background-color: #3A98DC;
        }

        #respond form .btn-send:hover {
            background-color: #0e3650;
        }

        .error-page-area {
            background-color: #0e3650;
        }

        .error-page-area .error-page h3 {
            color: #ffffff;
        }

        .error-page-area .error-page p {
            color: #ffffff;
        }

        .team-single ul.rtin-social li a {
            border-color: #0e3650;
            color: #0e3650;
        }

        .team-single ul.rtin-social li a:hover,
        .team-single .rtin-content .rtin-heading:after,
        .team-single .rtin-skills .rtin-skill-each .progress .progress-bar,
        .rt-el-cta-1.style2,
        .rt-el-cta-1.style1 {
            background-color: #0e3650;
        }

        .rt-project-archive .rt-project-arc-1 .rtin-item .rtin-img:before {
            background-color: rgba(23, 53, 91, 0.8);
        }

        .rt-project-archive .rt-project-arc-1 .rtin-item .rtin-img .rtin-icon-wrap .rtin-icon,
        .rt-project-archive .rt-project-arc-1 .rtin-item .rtin-content .rtin-title a:hover {
            color: #0e3650;
        }

        .post-each .entry-content-area:hover .entry-meta-2 li.vcard-comments i {
            color: #3A98DC;
        }

        .post-each .entry-meta-1 li i,
        .post-each .entry-content-area:hover .entry-meta-2 li.vcard-author i {
            color: #3A98DC;
        }

        .blog-layout3.thumb-img .item-date-wrap .item-date {
            background-color: #3A98DC;
        }

        .blog-layout3.thumb-img .item-date-wrap .item-date:before {
            background-color: #3A98DC;
        }

        .site-wrp .btn-text.hover-yellow:hover:before {
            color: #0e3650;
        }

        .site-wrp .btn-text.hover-yellow:hover {
            color: #3A98DC;
        }

        .blog-layout3 .item-date-wrap .item-date {
            background-color: #3A98DC;
        }

        .blog-layout3 .item-date-wrap .item-date:before {
            background: rgba(0, 255, 255, 0.9);
        }

        .widget_eventalk_posts p.date,
        .widget_eventalk_posts h4 a:hover {
            color: #3A98DC;
        }

        .post-each .entry-content-area .entry-header .entry-meta-2 li a:hover {
            color: #0e3650;
        }

        .blog-layout2 .item-img .item-date {
            background-color: #3A98DC;
        }

        .title-light.hover-primary a:hover,
        .title-regular.hover-primary a:hover,
        .title-medium.hover-primary a:hover,
        .title-semibold.hover-primary a:hover,
        .title-bold.hover-primary a:hover,
        .title-black.hover-primary a:hover {
            color: #3A98DC;
        }

        .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
        .rt-woo-nav .owl-custom-nav-title:after,
        .rt-woo-nav .owl-custom-nav .owl-prev:hover,
        .rt-woo-nav .owl-custom-nav .owl-next:hover,
        .woocommerce ul.products li.product .onsale,
        .woocommerce span.onsale,
        .woocommerce a.added_to_cart,
        .woocommerce div.product form.cart .button,
        .woocommerce #respond input#submit,
        .woocommerce a.button,
        .woocommerce button.button,
        .woocommerce input.button,
        p.demo_store,
        .woocommerce #respond input#submit.disabled:hover,
        .woocommerce #respond input#submit:disabled:hover,
        .woocommerce #respond input#submit[disabled]:disabled:hover,
        .woocommerce a.button.disabled:hover,
        .woocommerce a.button:disabled:hover,
        .woocommerce a.button[disabled]:disabled:hover,
        .woocommerce button.button.disabled:hover,
        .woocommerce button.button:disabled:hover,
        .woocommerce button.button[disabled]:disabled:hover,
        .woocommerce input.button.disabled:hover,
        .woocommerce input.button:disabled:hover,
        .woocommerce input.button[disabled]:disabled:hover,
        .woocommerce #respond input#submit.alt,
        .woocommerce a.button.alt,
        .woocommerce button.button.alt,
        .woocommerce input.button.alt {
            background-color: #0e3650;
        }

        .product-grid-view .view-mode ul li.grid-view-nav a,
        .product-list-view .view-mode ul li.list-view-nav a,
        .woocommerce ul.products li.product h3 a:hover,
        .woocommerce div.product p.price,
        .woocommerce div.product span.price,
        .woocommerce div.product .product-meta a:hover,
        .woocommerce div.product .product_meta a:hover,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
        .woocommerce a.woocommerce-review-link:hover,
        .woocommerce-message:before,
        .woocommerce-info::before {
            color: #0e3650;
        }

        .woocommerce-message,
        .woocommerce-info {
            border-color: #0e3650;
        }

        .woocommerce .product-thumb-area .product-info ul li a:hover {
            color: #0e3650;
        }

        .rt-el-title.style2 .rtin-title:after,
        .rt-el-twt-3.rtin-dark .rtin-title:after {
            background-color: #0e3650;
        }

        .header-icon-area .search-box .search-button i {
            color: #0e3650;
        }

        #tophead .tophead-social li a:hover {
            color: #0e3650;
        }

        .rt-owl-nav .owl-theme .owl-nav>div {
            color: #0e3650;
        }

        .rt-owl-nav .owl-theme .owl-nav>div {
            border-color: #0e3650;
        }

        .rt-owl-nav .owl-theme .owl-nav>div:hover {
            background-color: #0e3650;
        }

        .rt-owl-dot .owl-theme .owl-dots .owl-dot.active span,
        .rt-owl-dot .owl-theme .owl-dots .owl-dot:hover span {
            background-color: #0e3650;
        }

        .rt-el-post-slider .rtin-item .rtin-content-area .date-time {
            color: #0e3650;
        }

        .rt-el-post-slider .rtin-item .rtin-content-area .rtin-header .rtin-title a:hover,
        .rt-el-post-slider .rtin-item .rtin-content-area .read-more-btn i,
        .rt-el-post-slider .rtin-item .rtin-content-area .read-more-btn:hover {
            color: #0e3650;
        }

        .about-layout2.rtin-layout3 .video-area .video-icon .popup-video {
            color: #0e3650;
        }

        .about-layout2.rtin-layout3 .video-area .video-icon .play-btn:hover {
            background-color: #3A98DC;
            color: #3A98DC;
        }

        .speaker-layout4 .item-title .title a:hover {
            color: #0e3650;
        }

        .title-bar:before {
            background-color: #0e3650;
        }

        .speaker-layout3:before {
            background: rgba(23, 53, 91, 0.8);
        }

        .speaker-layout3 .item-social ul li a {
            color: #3A98DC;
        }

        .speaker-layout1 .item-img:before {
            background: rgba(0, 255, 255, 0.9);
        }

        .speaker-layout2 .item-social ul li a:hover {
            color: #3A98DC;
        }

        .title-light.hover-yellow a:hover,
        .title-regular.hover-yellow a:hover,
        .title-medium.hover-yellow a:hover,
        .title-semibold.hover-yellow a:hover,
        .title-bold.hover-yellow a:hover,
        .title-black.hover-yellow a:hover {
            color: #3A98DC;
        }

        .speaker-layout2:before {
            background: rgba(23, 53, 91, 0.8);
        }

        .rt-el-gallrey-tab a {
            border-color: #3A98DC;
        }

        .rt-el-gallrey-tab a:hover,
        .rt-el-gallrey-tab .current {
            background-color: #3A98DC;
            color: #111 !important;
        }

        .rt-el-gallrey-1 .rtin-item .rtin-content {
            background-color: #0e3650;
        }

        .rt-el-gallrey-1 .rtin-item .rtin-icon:hover {
            color: #0e3650;
        }

        .rt-el-gallrey-box .rtin-content .rtin-title a:hover {
            color: #0e3650;
        }

        .rt-el-gallrey-1 .rtin-item:before {
            background-color: rgba(23, 53, 91, 0.8);
        }

        .rt-el-post-slider .rtin-item .rtin-thumbnail-area .rtin-meta-1 {
            background-color: rgba(23, 53, 91, 0.8);
        }

        .rt-el-gallrey-1 .rtin-item .rtin-icon:hover {
            color: #0e3650;
        }

        .sidebar-widget-area .contact-us-form {
            background-color: #0e3650;
        }

        .sidebar-widget-area .contact-us-form .form-group .form-control {
            background: #3A98DC;
        }

        .services-single .rtin-heading:after {
            background-color: #0e3650;
        }

        .rt-el-title.style3 .rtin-title:after {
            background-color: #0e3650;
        }

        .rt-el-gallrey-2 .rtin-item:before {
            background-image: linear-gradient(transparent, #0e3650),
                linear-gradient(transparent, #0e3650);
        }

        .rt-el-gallrey-2 .rtin-item .rtin-icon:hover {
            color: #0e3650;
        }

        .rt-el-gallrey-3 .rtin-item:before {
            background-color: rgba(23, 53, 91, 0.8);
        }

        .rt-el-gallrey-3 .rtin-item .rtin-content .rtin-icon {
            color: #0e3650;
        }

        .rt-el-services-box.rtin-style3 .rtin-content .rtin-title:after {
            background-color: #0e3650;
        }

        .services-single .rtin-heading:after,
        .rt-el-title.style3 .rtin-title:after {
            background-color: #0e3650;
        }

        .widget .category-type ul li a:hover {
            background-color: #0e3650;
        }

        .rt-el-cta-1 {
            background-color: #0e3650;
        }

        .rt-el-counter .rtin-left .fa,
        .rt-el-counter .rtin-item .rtin-right.text-center .rtin-title {
            color: #0e3650;
        }

        .rt-el-info-box .rtin-content .rtin-title a:hover {
            color: #0e3650;
        }

        .rt-el-info-box.rtin-style1.rtin-light .rtin-content .rtin-title a,
        .rt-el-info-box.rtin-style1.rtin-light .rtin-icon i,
        .rt-el-info-box.rtin-style1.rtin-light .rtin-content .rtin-title {
            color: #3A98DC !important;
        }

        .rt-el-info-box.rtin-style3 .rtin-icon .rtin-button {
            background-color: rgba(23, 53, 91, 0.9);
        }

        .rt-el-twt-2 .rtin-title span {
            color: #0e3650;
        }

        .rt-el-twt-2 .rtin-content ul li:after {
            color: #0e3650;
        }

        .rt-el-twt-3 .rtin-title:after {
            background-color: #0e3650;
        }

        .rt-el-nav-menu.widget ul li.current-menu-item a,
        .rt-el-nav-menu.widget ul li.current-menu-item a:hover {
            background-color: #3A98DC;
        }

        .site-header .main-navigation>nav>ul>li>a:after {
            background-color: #3A98DC;
        }

        .rt-el-contact ul li i {
            color: #0e3650;
        }

        .schedule-wrapper-8 .schedule-title a:hover {
            color: #3A98DC;
        }

        .schedule-wrapper-8 .schedule-list-info li i,
        .schedule-wrapper-8 .details-down:hover,
        .schedule-wrapper-8 .schedule-time i {
            color: #3A98DC;
        }

        .schedule-layout3 .schedule-nav li a:hover {
            color: #3A98DC;
        }

        .schedule-layout3 .schedule-nav li a:hover:before {
            color: #3A98DC;
        }

        .schedule-layout3 .schedule-nav li .active:before {
            color: #3A98DC;
        }

        .schedule-layout3 .schedule-nav li .active {
            color: #3A98DC;
        }

        .schedule-layout2 .schedule-nav li a:before {
            background: #3A98DC;
        }

        .schedule-layout2 .schedule-nav li a:hover {
            background: #3A98DC;
        }

        .slider-layout2 .comingsoon-inner .comingsoon-content .upcoming-event-info {
            color: #3A98DC;
        }

        .rt-el-slider .nivo-directionNav a.nivo-prevNav:before,
        .rt-el-slider .nivo-directionNav a.nivo-nextNav:before {
            color: #3A98DC;
        }

        .rt-el-slider .nivo-directionNav a.nivo-prevNav:hover,
        .rt-el-slider .nivo-directionNav a.nivo-nextNav:hover {
            background-color: #3A98DC;
        }

        .skew {
            background: rgba(23, 53, 91, 0.7);
        }

        .skew_2 {
            background: rgba(23, 53, 91, 0.6);
        }

        .skew_3 {
            background: rgba(23, 53, 91, 0.5);
        }

        .price-table-layout3 .tpt-col-inner:hover {
            background: #0e3650;
        }

        .price-table-layout2:after {
            background: #3A98DC;
        }

        .price-table-layout2 .tpt-header .tpt-header-top .tpt-title:before {
            background-color: #3A98DC;
        }

        .price-table-layout2 .tpt-header .tpt-header-top .tpt-title:after {
            background-color: #3A98DC;
        }

        .price-table-layout3 .tpt-footer .tpt-footer-btn {
            background-color: #3A98DC;
        }

        .price-table-layout3 .tpt-col-inner:hover .tpt-header .tpt-header-top {
            border-bottom: 1px solid #3A98DC;
        }
    </style>
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Poppins:600,500,700%7CRoboto:400&#038;display=swap&#038;ver=1624437890" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Poppins:600,500,700%7CRoboto:400&#038;display=swap&#038;ver=1624437890"
        media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Poppins:600,500,700%7CRoboto:400&#038;display=swap&#038;ver=1624437890" />
    </noscript>
    <link rel="stylesheet" id="google-fonts-1-css"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.1.1"
        type="text/css" media="all" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <script type="text/javascript" src="/site/wp-includes/js/jquery/jquery.min.js" id="jquery-core-js"></script>
    <script>
        loadAsync(
            "/site/wp-content/cache/wpo-minify-header-c9550b02.min.js",
            null
        );
    </script>


    <link rel="preload" href="/site/fonts/fontawesome-webfont.woff2?v=4.7.0" as="font" type="font/woff2"
        crossorigin />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="msapplication-TileImage"
        content="https://radiustheme.com/demo/wordpress/eventalk/wp-content/uploads/2018/07/cropped-favicon-300x300.png" />
    <style type="text/css" id="wp-custom-css">
        .logo-grid-new .rtin-item.sponsonrs-box {
            text-align: center;
        }

        .footer-layout2 .footer-top-area .widget .subscribe-layout1 .subscribe-input-area .form-control::placeholder {
            color: #b3b3b3;
            opacity: 1;
            /* Firefox */
        }

        .footer-layout2 .footer-top-area .widget .subscribe-layout1 .subscribe-input-area .form-control:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #b3b3b3;
        }

        .footer-layout2 .footer-top-area .widget .subscribe-layout1 .subscribe-input-area .form-control::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #b3b3b3;
        }
    </style>
    {{-- sweetalert --}}
    <link rel="stylesheet" href="/css/sweetalert2.css">
    <script src="/js/sweetalert2.all.min.js"></script>

    @yield('CSS')
</head>

<body
    class="home page-template-default page page-id-1247 wp-embed-responsive theme-eventalk woocommerce-no-js non-stick header-style-1 trheader no-sidebar product-grid-view elementor-default elementor-kit-2717 elementor-page elementor-page-1247">
    <!-- Preloader Start Here -->
    <div id="preloader" class="preloader">
        <div class="items">
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
        </div>
    </div>
    <!-- Preloader End Here -->
    <div id="page" class="site site-wrp full-layout">
