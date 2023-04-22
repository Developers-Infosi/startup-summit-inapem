<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script>document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
	<script>function loadAsync(e, t) { var a, n = !1; a = document.createElement("script"), a.type = "text/javascript", a.src = e, a.onreadystatechange = function () { n || this.readyState && "complete" != this.readyState || (n = !0, "function" == typeof t && t()) }, a.onload = a.onreadystatechange, document.getElementsByTagName("head")[0].appendChild(a) }</script>

    <title>@yield('titulo') - startupsummit</title>
	<meta name='robots' content='noindex, nofollow' />


	<noscript>
		<style>
			#preloader {
				display: none;
			}
		</style>
	</noscript>
    <link rel="stylesheet" id="layerslider-css" href="/site/layerslider/css/layerslider.css" type="text/css"
    media="all" />
<link rel="stylesheet" id="wp-block-library-css" href="/site/layerslider/css/dist/block-library/style.min.css"
    type="text/css" media="all" />

	<style id='wp-block-library-theme-inline-css' type='text/css'>
		.wp-block-audio figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-audio figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-audio {
			margin: 0 0 1em
		}

		.wp-block-code {
			border: 1px solid #ccc;
			border-radius: 4px;
			font-family: Menlo, Consolas, monaco, monospace;
			padding: .8em 1em
		}

		.wp-block-embed figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-embed figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-embed {
			margin: 0 0 1em
		}

		.blocks-gallery-caption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .blocks-gallery-caption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-image figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-image figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-image {
			margin: 0 0 1em
		}

		.wp-block-pullquote {
			border-bottom: 4px solid;
			border-top: 4px solid;
			color: currentColor;
			margin-bottom: 1.75em
		}

		.wp-block-pullquote cite,
		.wp-block-pullquote footer,
		.wp-block-pullquote__citation {
			color: currentColor;
			font-size: .8125em;
			font-style: normal;
			text-transform: uppercase
		}

		.wp-block-quote {
			border-left: .25em solid;
			margin: 0 0 1.75em;
			padding-left: 1em
		}

		.wp-block-quote cite,
		.wp-block-quote footer {
			color: currentColor;
			font-size: .8125em;
			font-style: normal;
			position: relative
		}

		.wp-block-quote.has-text-align-right {
			border-left: none;
			border-right: .25em solid;
			padding-left: 0;
			padding-right: 1em
		}

		.wp-block-quote.has-text-align-center {
			border: none;
			padding-left: 0
		}

		.wp-block-quote.is-large,
		.wp-block-quote.is-style-large,
		.wp-block-quote.is-style-plain {
			border: none
		}

		.wp-block-search .wp-block-search__label {
			font-weight: 700
		}

		.wp-block-search__button {
			border: 1px solid #ccc;
			padding: .375em .625em
		}

		:where(.wp-block-group.has-background) {
			padding: 1.25em 2.375em
		}

		.wp-block-separator.has-css-opacity {
			opacity: .4
		}

		.wp-block-separator {
			border: none;
			border-bottom: 2px solid;
			margin-left: auto;
			margin-right: auto
		}

		.wp-block-separator.has-alpha-channel-opacity {
			opacity: 1
		}

		.wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
			width: 100px
		}

		.wp-block-separator.has-background:not(.is-style-dots) {
			border-bottom: none;
			height: 1px
		}

		.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
			height: 2px
		}

		.wp-block-table {
			margin: 0 0 1em
		}

		.wp-block-table td,
		.wp-block-table th {
			word-break: normal
		}

		.wp-block-table figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-table figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-video figcaption {
			color: #555;
			font-size: 13px;
			text-align: center
		}

		.is-dark-theme .wp-block-video figcaption {
			color: hsla(0, 0%, 100%, .65)
		}

		.wp-block-video {
			margin: 0 0 1em
		}

		.wp-block-template-part.has-background {
			margin-bottom: 0;
			margin-top: 0;
			padding: 1.25em 2.375em
		}
	</style>
	   <link rel="stylesheet" id="wc-blocks-vendors-style-css"
        href="/site/woocommerce/packages/woocommerce-blocks/build/wc-blocks-vendors-style.css" type="text/css"
        media="all" />
    <link rel="stylesheet" id="wc-blocks-style-css"
        href="/site/woocommerce/packages/woocommerce-blocks/build/wc-blocks-style.css" type="text/css" media="all" />
    <link rel="stylesheet" id="classic-theme-styles-css" href="/site/wp-includes/css/classic-themes.min.css"
        type="text/css" media="all" />
	<style id='global-styles-inline-css' type='text/css'>
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
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
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
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
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

    <link rel="stylesheet" id="woocommerce-layout-css" href="/site/css/woocommerce-layout.css" type="text/css"
        media="all" />
    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="/site/css/woocommerce-smallscreen.css" type="text/css"
        media="only screen and (max-width: 767px)" />
    <link rel="stylesheet" id="woocommerce-general-css" href="/site/css/woocommerce.css" type="text/css"
        media="all" />
	<style id='woocommerce-inline-inline-css' type='text/css'>
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>
	<link rel='stylesheet' id='yith-quick-view-css'
		href='https://radiustheme.com/demo/wordpress/eventalk/wp-content/plugins/yith-woocommerce-quick-view/assets/css/yith-quick-view.css'
		type='text/css' media='all' />
	<style id='yith-quick-view-inline-css' type='text/css'>
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
	<style id='elementor-frontend-inline-css' type='text/css'>
		.elementor-kit-2717 {
			--e-global-color-primary: #6EC1E4;
			--e-global-color-secondary: #54595F;
			--e-global-color-text: #7A7A7A;
			--e-global-color-accent: #61CE70;
			--e-global-color-466c8451: #4054B2;
			--e-global-color-3df188f7: #23A455;
			--e-global-color-664c72b0: #000;
			--e-global-color-59a836b1: #FFF;
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

		@media(max-width:1024px) {
			.elementor-section.elementor-section-boxed>.elementor-container {
				max-width: 1024px;
			}
		}

		@media(max-width:767px) {
			.elementor-section.elementor-section-boxed>.elementor-container {
				max-width: 767px;
			}
		}

		.elementor-2448 .elementor-element.elementor-element-b0f2eae:not(.elementor-motion-effects-element-type-background),
		.elementor-2448 .elementor-element.elementor-element-b0f2eae>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-image: url("https://radiustheme.com/demo/wordpress/eventalk/wp-content/uploads/2019/03/bg-6.jpg");
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.elementor-2448 .elementor-element.elementor-element-b0f2eae {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 80px 15px 0px 15px;
		}

		.elementor-2448 .elementor-element.elementor-element-b0f2eae>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-bc-flex-widget .elementor-2448 .elementor-element.elementor-element-6de0397.elementor-column .elementor-widget-wrap {
			align-items: center;
		}

		.elementor-2448 .elementor-element.elementor-element-6de0397.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
			align-content: center;
			align-items: center;
		}

		.elementor-2448 .elementor-element.elementor-element-7b59c1d .elementor-heading-title {
			font-size: 48px;
			line-height: 1.2em;
		}

		.elementor-bc-flex-widget .elementor-2448 .elementor-element.elementor-element-66242bc.elementor-column .elementor-widget-wrap {
			align-items: flex-end;
		}

		.elementor-2448 .elementor-element.elementor-element-66242bc.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
			align-content: flex-end;
			align-items: flex-end;
		}

		.elementor-2448 .elementor-element.elementor-element-ff1856f {
			padding: 120px 0px 120px 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-944783b>.elementor-element-populated {
			padding: 0px 10px 0px 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-6d31b08>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
			margin-bottom: 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-6d31b08>.elementor-element-populated {
			padding: 0px 0px 0px 50px;
		}

		.elementor-2448 .elementor-element.elementor-element-6cd4e39 .elementor-heading-title {
			font-size: 36px;
			line-height: 1em;
		}

		.elementor-2448 .elementor-element.elementor-element-6cd4e39>.elementor-widget-container {
			margin: 0px 0px 40px 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-2f6ec8c>.elementor-widget-container {
			margin: 0px 0px 30px 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-d3868b7>.elementor-widget-container {
			margin: 0px 0px 30px 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-789dd1d:not(.elementor-motion-effects-element-type-background),
		.elementor-2448 .elementor-element.elementor-element-789dd1d>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-image: url("https://radiustheme.com/demo/wordpress/eventalk/wp-content/uploads/2019/03/team-bg-6.png");
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.elementor-2448 .elementor-element.elementor-element-789dd1d {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 106px 60px 80px 60px;
		}

		.elementor-2448 .elementor-element.elementor-element-789dd1d>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2448 .elementor-element.elementor-element-7538730 .rtin-title {
			color: #efefef;
		}

		.elementor-2448 .elementor-element.elementor-element-7538730 .rtin-subtitle {
			color: #efefef;
		}

		.elementor-2448 .elementor-element.elementor-element-77b8eec1:not(.elementor-motion-effects-element-type-background),
		.elementor-2448 .elementor-element.elementor-element-77b8eec1>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-image: url("https://radiustheme.com/demo/wordpress/eventalk/wp-content/uploads/2019/03/event-banner-6.jpg");
		}

		.elementor-2448 .elementor-element.elementor-element-77b8eec1 {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 106px 0px 110px 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-77b8eec1>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2448 .elementor-element.elementor-element-44c92771 .rtin-title {
			color: #282828;
		}

		.elementor-2448 .elementor-element.elementor-element-44c92771 .rtin-subtitle {
			color: #444444;
		}

		.elementor-2448 .elementor-element.elementor-element-2ff197a:not(.elementor-motion-effects-element-type-background),
		.elementor-2448 .elementor-element.elementor-element-2ff197a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-image: url("https://radiustheme.com/demo/wordpress/eventalk/wp-content/uploads/2019/03/ctg.jpg");
		}

		.elementor-2448 .elementor-element.elementor-element-2ff197a {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 100px 0px 100px 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-2ff197a>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2448 .elementor-element.elementor-element-6ae8d57 {
			text-align: right;
			color: #efefef;
			font-size: 50px;
			font-weight: 500;
			line-height: 1.3em;
		}

		.elementor-2448 .elementor-element.elementor-element-4dadcba .elementor-button {
			font-size: 16px;
			font-weight: 700;
			text-transform: uppercase;
			fill: #efefef;
			color: #efefef;
			background-color: rgba(0, 0, 0, 0);
			border-style: solid;
			border-width: 2px 2px 2px 2px;
			border-color: #ffd03b;
		}

		.elementor-2448 .elementor-element.elementor-element-4dadcba .elementor-button:hover,
		.elementor-2448 .elementor-element.elementor-element-4dadcba .elementor-button:focus {
			color: #050505;
			background-color: #ffd03b;
		}

		.elementor-2448 .elementor-element.elementor-element-4dadcba .elementor-button:hover svg,
		.elementor-2448 .elementor-element.elementor-element-4dadcba .elementor-button:focus svg {
			fill: #050505;
		}

		.elementor-2448 .elementor-element.elementor-element-e392c58:not(.elementor-motion-effects-element-type-background),
		.elementor-2448 .elementor-element.elementor-element-e392c58>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-image: url("https://radiustheme.com/demo/wordpress/eventalk/wp-content/uploads/2019/03/price-6.jpg");
			background-position: top center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.elementor-2448 .elementor-element.elementor-element-e392c58 {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 106px 0px 70px 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-e392c58>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2448 .elementor-element.elementor-element-6f8a86d .rtin-title {
			color: #282828;
		}

		.elementor-2448 .elementor-element.elementor-element-6f8a86d .rtin-subtitle {
			color: #444444;
		}

		.elementor-2448 .elementor-element.elementor-element-803b04f:not(.elementor-motion-effects-element-type-background),
		.elementor-2448 .elementor-element.elementor-element-803b04f>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-image: url("https://radiustheme.com/demo/wordpress/eventalk/wp-content/uploads/2019/03/cbanner-new.jpg");
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
		}

		.elementor-2448 .elementor-element.elementor-element-803b04f {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 100px 0px 100px 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-803b04f>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2448 .elementor-element.elementor-element-5768f917 {
			padding: 104px 0px 110px 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-181e2a7b>.elementor-element-populated {
			padding: 0px 0px 0px 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-5f8fe9f7 .rtin-title {
			color: #282828;
		}

		.elementor-2448 .elementor-element.elementor-element-5f8fe9f7 .rtin-subtitle {
			color: #444444;
		}

		.elementor-2448 .elementor-element.elementor-element-50be4814>.elementor-widget-container {
			padding: 0px 0px 0px 0px;
			border-style: solid;
			border-width: 0px 0px 0px 0px;
			border-color: #dcdcdc;
		}

		.elementor-2448 .elementor-element.elementor-element-16c049e4>.elementor-widget-container {
			padding: 0px 0px 0px 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-19cb021a:not(.elementor-motion-effects-element-type-background),
		.elementor-2448 .elementor-element.elementor-element-19cb021a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: #f8f8f8;
			background-image: url("https://radiustheme.com/demo/wordpress/eventalk/wp-content/uploads/2019/03/banner-1.jpg");
			background-position: top center;
			background-repeat: no-repeat;
		}

		.elementor-2448 .elementor-element.elementor-element-19cb021a {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 120px 0px 120px 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-19cb021a>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2448 .elementor-element.elementor-element-1b72013:not(.elementor-motion-effects-element-type-background),
		.elementor-2448 .elementor-element.elementor-element-1b72013>.elementor-motion-effects-container>.elementor-motion-effects-layer {
			background-color: #f8f8f8;
		}

		.elementor-2448 .elementor-element.elementor-element-1b72013 {
			transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
			padding: 106px 0px 80px 0px;
		}

		.elementor-2448 .elementor-element.elementor-element-1b72013>.elementor-background-overlay {
			transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
		}

		.elementor-2448 .elementor-element.elementor-element-feb1400 .rtin-title {
			color: #282828;
		}

		.elementor-2448 .elementor-element.elementor-element-feb1400 .rtin-subtitle {
			color: #444444;
		}

		@media(max-width:1024px) and (min-width:768px) {
			.elementor-2448 .elementor-element.elementor-element-6de0397 {
				width: 100%;
			}

			.elementor-2448 .elementor-element.elementor-element-66242bc {
				width: 100%;
			}

			.elementor-2448 .elementor-element.elementor-element-944783b {
				width: 100%;
			}

			.elementor-2448 .elementor-element.elementor-element-6d31b08 {
				width: 100%;
			}

			.elementor-2448 .elementor-element.elementor-element-72be0df {
				width: 100%;
			}

			.elementor-2448 .elementor-element.elementor-element-7eb7b8d {
				width: 100%;
			}

			.elementor-2448 .elementor-element.elementor-element-be7dbdc {
				width: 100%;
			}
		}

		@media(min-width:1025px) {

			.elementor-2448 .elementor-element.elementor-element-19cb021a:not(.elementor-motion-effects-element-type-background),
			.elementor-2448 .elementor-element.elementor-element-19cb021a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
				background-attachment: scroll;
			}
		}

		@media(max-width:1024px) {
			.elementor-2448 .elementor-element.elementor-element-6d31b08>.elementor-element-populated {
				padding: 40px 0px 0px 0px;
			}

			.elementor-2448 .elementor-element.elementor-element-6ae8d57 {
				text-align: center;
			}

			.elementor-2448 .elementor-element.elementor-element-5768f917 {
				padding: 88px 0px 90px 0px;
			}

			.elementor-2448 .elementor-element.elementor-element-19cb021a {
				padding: 85px 0px 84px 0px;
			}
		}

		@media(max-width:767px) {
			.elementor-2448 .elementor-element.elementor-element-6de0397>.elementor-element-populated {
				margin: 0px 0px 020px 0px;
			}

			.elementor-2448 .elementor-element.elementor-element-7b59c1d .elementor-heading-title {
				font-size: 36px;
			}

			.elementor-2448 .elementor-element.elementor-element-6d31b08>.elementor-element-populated {
				padding: 50px 0px 0px 0px;
			}

			.elementor-2448 .elementor-element.elementor-element-6cd4e39 .elementor-heading-title {
				font-size: 32px;
				line-height: 1.2em;
			}

			.elementor-2448 .elementor-element.elementor-element-789dd1d {
				padding: 78px 0px 50px 0px;
			}

			.elementor-2448 .elementor-element.elementor-element-77b8eec1 {
				padding: 80px 0px 60px 0px;
			}

			.elementor-2448 .elementor-element.elementor-element-6ae8d57 {
				font-size: 36px;
			}

			.elementor-2448 .elementor-element.elementor-element-a3656df>.elementor-element-populated {
				margin: 0px 0px 30px 0px;
			}

			.elementor-2448 .elementor-element.elementor-element-e1cf915>.elementor-element-populated {
				margin: 0px 0px 30px 0px;
			}

			.elementor-2448 .elementor-element.elementor-element-19cb021a:not(.elementor-motion-effects-element-type-background),
			.elementor-2448 .elementor-element.elementor-element-19cb021a>.elementor-motion-effects-container>.elementor-motion-effects-layer {
				background-size: cover;
			}

			.elementor-2448 .elementor-element.elementor-element-19cb021a {
				padding: 84px 0px 100px 0px;
			}
		}
	</style>
    <link rel="stylesheet" id="font-awesome-css" href="/site/css/font-awesome.min.css" type="text/css"
    media="all" />
    <link rel="stylesheet" id="bootstrap-css" href="/site/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" id="animate-css" href="/site/css/animate.min.css" type="text/css" media="all" />
    <link rel="stylesheet" id="eventalk-style-css" href="/site/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" id="eventalk-elementor-css" href="/site/css/elementor.css" type="text/css"
        media="all" />
    <link rel="stylesheet" id="eventalk-update-css-css" href="/site/css/update-css.css" type="text/css"
        media="all" />
	<style id='font-awesome-inline-css' type='text/css'>
		[data-font="FontAwesome"]:before {
			font-family: 'FontAwesome' !important;
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
	<link rel='stylesheet' id='bootstrap-css'
		href='https://radiustheme.com/demo/wordpress/eventalk/wp-content/themes/eventalk/assets/css/bootstrap.min.css'
		type='text/css' media='all' />
	<link rel='stylesheet' id='animate-css'
		href='https://radiustheme.com/demo/wordpress/eventalk/wp-content/themes/eventalk/assets/css/animate.min.css'
		type='text/css' media='all' />
	<link rel='stylesheet' id='eventalk-style-css'
		href='https://radiustheme.com/demo/wordpress/eventalk/wp-content/themes/eventalk/assets/css/style.css'
		type='text/css' media='all' />
	<link rel='stylesheet' id='eventalk-elementor-css'
		href='https://radiustheme.com/demo/wordpress/eventalk/wp-content/themes/eventalk/assets/css/elementor.css'
		type='text/css' media='all' />
	<link rel='stylesheet' id='eventalk-update-css-css'
		href='https://radiustheme.com/demo/wordpress/eventalk/wp-content/themes/eventalk/assets/css/update-css.css'
		type='text/css' media='all' />
	<style id='eventalk-dynamic-inline-css' type='text/css'>
		.entry-banner {
			background-image: url(https://radiustheme.com/demo/wordpress/eventalk/wp-content/themes/eventalk/assets/img/banner.jpg)
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
			color: #4c1864;
		}

		.secondery-color {
			color: #fad03b;
		}

		.primary-bgcolor,
		.bg-primary {
			background-color: #4c1864 !important;
		}

		.secondery-bgcolor,
		.bg-secondary {
			background-color: #fad03b !important;
		}

		.site-wrp .color-primary {
			color: #4c1864;
		}

		.overlay-primary80:before {
			background-color: rgba(76, 24, 100, 0.8);
		}

		.overlay-primary90:before {
			background-color: rgba(76, 24, 100, 0.9);
		}

		body #preloader {
			background-color: #4c1864;
		}

		#tophead {
			background-color: #ffffff;
		}

		#tophead .tophead-contact .fa,
		#tophead .tophead-address .fa {
			color: #4c1864;
		}

		#tophead,
		#tophead a,
		#tophead .tophead-social li a,
		#tophead .tophead-social li a:hover {
			color: #444444;
		}

		#tophead .tophead-contact .fa,
		#tophead .tophead-address .fa {
			color: #fad03b;
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
			color: #fad03b;
		}

		.site-wrp .ls-v6 .ls-nav-prev:after,
		.site-wrp .ls-v6 .ls-nav-next:after {
			color: #fad03b !important;
		}

		.site-wrp .ls-v6 .ls-nav-prev,
		.site-wrp .ls-v6 .ls-nav-next {
			border: 2px solid #fad03b !important;
		}

		.site-wrp .ls-v6 .ls-nav-next:hover,
		.site-wrp .ls-v6 .ls-nav-prev:hover {
			border: 2px solid #fad03b !important;
			background-color: #fad03b !important;
		}

		.site-wrp .ls-v6 .ls-nav-next:after {
			border-right: 3px solid #fad03b !important;
		}

		.site-wrp .ls-v6 .ls-nav-prev:after,
		.site-wrp .ls-v6 .ls-nav-next:after {
			border-top: 3px solid #fad03b !important;
		}

		.site-wrp .ls-v6 .ls-nav-prev:after {
			border-left: 3px solid #fad03b !important;
		}

		.header-icon-area .search-box .search-button i {
			color: #4c1864;
		}

		.search-form .custom-search-input button.btn {
			background-color: #fad03b;
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
			color: #fad03b;
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
			color: #fad03b;
		}

		.site-header .main-navigation ul li ul {
			border-top: 1px solid #fad03b;
		}

		.site-header .main-navigation ul li ul li:hover>a {
			background-color: #fad03b;
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
			border-color: #4c1864
		}

		.site-header .main-navigation ul li.mega-menu>ul.sub-menu {
			background-color: #fad03b
		}

		.site-header .main-navigation ul li.mega-menu ul.sub-menu li a {
			color: #111111
		}

		.site-header .main-navigation ul li.mega-menu ul.sub-menu li a:hover {
			background-color: #fad03b;
			color: #111111;
		}

		.mean-container a.meanmenu-reveal,
		.mean-container .mean-nav ul li a.mean-expand {
			color: #fad03b;
		}

		.mean-container a.meanmenu-reveal span {
			background-color: #fad03b;
		}

		.mean-container .mean-bar {
			border-color: #fad03b;
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
			color: #fad03b;
		}

		.header-icon-area .cart-icon-area .cart-icon-num {
			background-color: #fad03b;
		}

		.site-header .search-box .search-text {
			border-color: #fad03b;
		}

		.header-style-3 .header-social li a:hover {
			color: #fad03b;
		}

		.header-style-3.trheader .header-contact li a,
		.header-style-3.trheader .header-social li a {
			color: #ffffff;
		}

		.header-style-3.trheader .header-social li a:hover {
			color: #fad03b;
		}

		.header-style-4 .header-social li a:hover {
			color: #fad03b;
		}

		.header-style-4.trheader .header-contact li a,
		.header-style-4.trheader .header-social li a {
			color: #ffffff;
		}

		.header-style-4.trheader .header-social li a:hover {
			color: #fad03b;
		}

		.entry-banner .entry-banner-content h1 {
			color: #ffffff;
		}

		.breadcrumb-area .entry-breadcrumb span a,
		.breadcrumb-area .entry-breadcrumb span a span {
			color: #fad03b;
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
			background-color: #111111 !important;
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
			color: #fad03b;
		}

		-->.footer-layout2 .footer-top-area .widget .btn-fill.size-md,
		.footer-layout2 .footer-top-area .widget .btn-ghost.size-md {
			background-color: #fad03b;
		}

		.footer-layout2 .footer-top-area .widget .footer-widget-contact a:hover {
			color: #fad03b;
		}

		.widget_eventalk_info.widget ul li i,
		.footer-layout2 .footer-top-area .widget .footer-widget-contact:before,
		.footer-layout2 .footer-bottom-area a:hover {
			color: #fad03b;
		}

		.widget.widget_eventalk_about ul li a:hover {
			color: #4c1864;
		}

		.kebo-tweets .ktweet .kmeta a {
			color: #4c1864;
		}

		.footer-top-area .widget ul li:before {
			color: #fad03b;
		}

		.footer-top-area .widget a:hover,
		.footer-top-area .widget a:active {
			color: #4c1864;
		}

		.footer-top-area {
			background-color: #111111 !important;
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
			color: #fad03b;
		}

		.footer-bottom-area {
			background-color: #0a0a0a;
			color: #8f8f8f;
		}

		a.scrollToTop {
			background-color: rgba(76, 24, 100, 0.3);
			color: #4c1864;
			border-color: #4c1864;
		}

		a.scrollToTop:hover,
		a.scrollToTop:focus,
		.sidebar-widget-area .widget_eventalk_info {
			background-color: #4c1864;
		}

		.footer-top-area .widget.widget_eventalk_info ul li i {
			color: #fad03b;
		}

		.widget .category-type ul li:before {
			color: #4c1864;
		}

		.widget h3:after {
			background-color: #fad03b;
		}

		footer .widget h3:after {
			background-color: #fad03b;
		}

		.widget ul li:before {
			color: #fad03b;
		}

		.widget ul li a:hover {
			color: #fad03b;
		}

		.widget_tag_cloud a:hover {
			border-color: #fad03b;
			background-color: #fad03b;
		}

		.footer-top-area .widget.widget_tag_cloud a:hover {
			border-color: #4c1864;
		}

		.widget.widget_eventalk_about ul li a {
			border-color: #4c1864;
		}

		.widget.widget_eventalk_info ul li i {
			color: #4c1864;
		}

		.widget.widget_eventalk_menu ul li a i {
			color: #4c1864;
		}

		body,
		ul li {
			font-family: 'Roboto', sans-serif;
			font-size: 16px;
			line-height: 28px;
			font-weight: 400;
			font-style: normal;
		}

		h1 {
			font-family: 'Poppins', sans-serif;
			font-size: 52px;
			line-height: 50px;
			font-weight: 700;
			font-style: normal;
		}

		h2 {
			font-family: 'Poppins', sans-serif;
			font-size: 36px;
			line-height: 38px;
			font-weight: 700;
			font-style: normal;
		}

		h3 {
			font-family: 'Poppins', sans-serif;
			font-size: 28px;
			line-height: 36px;
			font-weight: 700;
			font-style: normal;
		}

		h4 {
			font-family: 'Poppins', sans-serif;
			font-size: 22px;
			line-height: 30px;
			font-weight: 700;
			font-style: normal;
		}

		h5 {
			font-family: 'Poppins', sans-serif;
			font-size: 18px;
			line-height: 26px;
			font-weight: 700;
			font-style: normal;
		}

		h6 {
			font-family: 'Poppins', sans-serif;
			font-size: 16px;
			line-height: 24px;
			font-weight: 500;
			font-style: normal;
		}

		.pagination-area ul li.active a,
		.pagination-area ul li a:hover,
		.pagination-area ul li span.current {
			background-color: #fad03b;
		}

		.price-table-layout2:hover .tpt-footer .tpt-footer-btn:hover {
			background-color: #fad03b;
		}

		.btn-ghost.color-light.hover-yellow:hover {
			border-color: #fad03b;
			color: #fad03b;
		}

		.profile-social li a:hover {
			border: 1px solid #4c1864;
			background: #4c1864;
		}

		.profile-social li a:hover {
			border: 1px solid #4c1864;
			background-color: #4c1864;
		}

		.rt-el-slider .nivo-directionNav a.nivo-prevNav,
		.rt-el-slider .nivo-directionNav a.nivo-nextNav {
			border: 1px solid #fad03b;
		}

		.site-wrp .btn-fill.color-primary {
			background-color: #4c1864;
			border-color: #4c1864;
			color: #ffffff;
		}

		.site-wrp .btn-fill.color-primary:hover {
			color: #4c1864;
		}

		.site-wrp .btn-fill.color-yellow {
			background-color: #fad03b;
			border-color: #fad03b;
		}

		.btn-ghost.color-yellow {
			border-color: #fad03b;
			color: #fad03b;
		}

		.btn-ghost.color-yellow:hover {
			background-color: #fad03b;
		}

		.schedule-layout1 .schedule-time i {
			color: #fad03b;
		}

		.site-wrp .btn-fill.color-yellow:hover {
			border-color: #4c1864;
			background-color: #4c1864;
			color: #ffffff;
		}

		.site-wrp .btn-fill.color-yellow.gust:hover {
			border-color: #fad03b;
			background-color: transparent;
			color: #fad03b;
		}

		.site-wrp .rtin-light .btn-fill.color-yellow.gust:hover {
			border-color: #4c1864;
			background-color: #4c1864;
			color: #ffffff;
		}

		.blog-layout1 .item-img .item-date {
			background-color: #fad03b;
		}

		.site-wrp .btn-text:hover:before {
			color: #fad03b;
		}

		.site-wrp .btn-text:hover {
			color: #fad03b;
		}

		.rt-el-info-box.rtin-style1.rtin-dark .rtin-title a {
			color: #fad03b;
		}

		.footer-layout1 .footer-social ul li a:before,
		.footer-layout1 .footer-social ul li a:after {
			background-color: #fad03b;
		}

		.footer-layout1 .footer-social ul li a:hover {
			color: #fad03b;
		}

		.rt-el-cta-1.style2 .rtin-button a {
			color: #4c1864;
		}

		.rdtheme-button-1,
		.rdtheme-button-ghost-1 {
			background-color: #4c1864;
		}

		.rdtheme-button-1:hover {
			background-color: #fad03b;
		}

		.rdtheme-button-ghost-1 {
			border-color: #4c1864;
		}

		.rdtheme-button-2:hover {
			border-color: #4c1864;
			background-color: #4c1864;
		}

		.rdtheme-button-ghost-1:hover {
			color: #4c1864;
		}

		.rdtheme-button-4 {
			border: 2px solid #4c1864;
		}

		.rdtheme-button-4:hover {
			background-color: #4c1864;
		}

		.rt-el-services-box.rtin-style3:hover {
			-webkit-box-shadow: inset 2px 0px 73px 0px rgba(76, 24, 100, 0.5);
			-moz-box-shadow: inset 2px 0px 73px 0px rgba(76, 24, 100, 0.5);
			box-shadow: inset 2px 0px 73px 0px rgba(76, 24, 100, 0.5);
		}

		.rdtheme-button-2 {
			border: 2px solid #4c1864;
		}

		.schedule-layout1 .schedule-title a:hover {
			color: #fad03b;
		}

		a {
			color: #4c1864;
		}

		a:hover,
		a:focus,
		a:active {
			color: #fad03b;
		}

		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.primary-list li:before {
			background-color: #4c1864;
		}

		.post-each .entry-thumbnail-area .entry-meta-1 li i,
		.post-each .entry-thumbnail-area .entry-meta-1 li a:hover,
		.post-each .entry-content-area .entry-header a.entry-title:hover,
		.post-each .entry-content-area .read-more-btn i,
		.post-each .entry-content-area .read-more-btn:hover,
		.post-each.post-each-single .entry-content-area .entry-tags a:hover {
			color: #fad03b;
		}

		.site-index .sticky {
			border-color: #4c1864;
		}

		.comments-area h3.comment-title:after,
		.comments-area .main-comments .comment-meta .reply-area a:hover,
		#respond .comment-reply-title:after,
		#respond form .btn-send {
			background-color: #fad03b;
		}

		#respond form .btn-send:hover {
			background-color: #4c1864;
		}

		.error-page-area {
			background-color: #4c1864;
		}

		.error-page-area .error-page h3 {
			color: #ffffff;
		}

		.error-page-area .error-page p {
			color: #ffffff;
		}

		.team-single ul.rtin-social li a {
			border-color: #4c1864;
			color: #4c1864;
		}

		.team-single ul.rtin-social li a:hover,
		.team-single .rtin-content .rtin-heading:after,
		.team-single .rtin-skills .rtin-skill-each .progress .progress-bar,
		.rt-el-cta-1.style2,
		.rt-el-cta-1.style1 {
			background-color: #4c1864;
		}

		.rt-project-archive .rt-project-arc-1 .rtin-item .rtin-img:before {
			background-color: rgba(76, 24, 100, 0.8);
		}

		.rt-project-archive .rt-project-arc-1 .rtin-item .rtin-img .rtin-icon-wrap .rtin-icon,
		.rt-project-archive .rt-project-arc-1 .rtin-item .rtin-content .rtin-title a:hover {
			color: #4c1864;
		}

		.post-each .entry-content-area:hover .entry-meta-2 li.vcard-comments i {
			color: #fad03b;
		}

		.post-each .entry-meta-1 li i,
		.post-each .entry-content-area:hover .entry-meta-2 li.vcard-author i {
			color: #fad03b;
		}

		.blog-layout3.thumb-img .item-date-wrap .item-date {
			background-color: #fad03b;
		}

		.blog-layout3.thumb-img .item-date-wrap .item-date:before {
			background-color: #fad03b;
		}

		.site-wrp .btn-text.hover-yellow:hover:before {
			color: #4c1864;
		}

		.site-wrp .btn-text.hover-yellow:hover {
			color: #fad03b;
		}

		.blog-layout3 .item-date-wrap .item-date {
			background-color: #fad03b;
		}

		.blog-layout3 .item-date-wrap .item-date:before {
			background: rgba(250, 208, 59, 0.9);
		}

		.widget_eventalk_posts p.date,
		.widget_eventalk_posts h4 a:hover {
			color: #fad03b;
		}

		.post-each .entry-content-area .entry-header .entry-meta-2 li a:hover {
			color: #4c1864;
		}

		.blog-layout2 .item-img .item-date {
			background-color: #fad03b;
		}

		.title-light.hover-primary a:hover,
		.title-regular.hover-primary a:hover,
		.title-medium.hover-primary a:hover,
		.title-semibold.hover-primary a:hover,
		.title-bold.hover-primary a:hover,
		.title-black.hover-primary a:hover {
			color: #fad03b;
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
			background-color: #4c1864;
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
			color: #4c1864;
		}

		.woocommerce-message,
		.woocommerce-info {
			border-color: #4c1864;
		}

		.woocommerce .product-thumb-area .product-info ul li a:hover {
			color: #4c1864;
		}

		.rt-el-title.style2 .rtin-title:after,
		.rt-el-twt-3.rtin-dark .rtin-title:after {
			background-color: #4c1864;
		}

		.header-icon-area .search-box .search-button i {
			color: #4c1864;
		}

		#tophead .tophead-social li a:hover {
			color: #4c1864;
		}

		.rt-owl-nav .owl-theme .owl-nav>div {
			color: #4c1864;
		}

		.rt-owl-nav .owl-theme .owl-nav>div {
			border-color: #4c1864;
		}

		.rt-owl-nav .owl-theme .owl-nav>div:hover {
			background-color: #4c1864;
		}

		.rt-owl-dot .owl-theme .owl-dots .owl-dot.active span,
		.rt-owl-dot .owl-theme .owl-dots .owl-dot:hover span {
			background-color: #4c1864;
		}

		.rt-el-post-slider .rtin-item .rtin-content-area .date-time {
			color: #4c1864;
		}

		.rt-el-post-slider .rtin-item .rtin-content-area .rtin-header .rtin-title a:hover,
		.rt-el-post-slider .rtin-item .rtin-content-area .read-more-btn i,
		.rt-el-post-slider .rtin-item .rtin-content-area .read-more-btn:hover {
			color: #4c1864;
		}

		.about-layout2.rtin-layout3 .video-area .video-icon .popup-video {
			color: #4c1864;
		}

		.about-layout2.rtin-layout3 .video-area .video-icon .play-btn:hover {
			background-color: #fad03b;
			color: #fad03b;
		}

		.speaker-layout4 .item-title .title a:hover {
			color: #4c1864;
		}

		.title-bar:before {
			background-color: #4c1864;
		}

		.speaker-layout3:before {
			background: rgba(76, 24, 100, 0.8);
		}

		.speaker-layout3 .item-social ul li a {
			color: #fad03b;
		}

		.speaker-layout1 .item-img:before {
			background: rgba(250, 208, 59, 0.9);
		}

		.speaker-layout2 .item-social ul li a:hover {
			color: #fad03b;
		}

		.title-light.hover-yellow a:hover,
		.title-regular.hover-yellow a:hover,
		.title-medium.hover-yellow a:hover,
		.title-semibold.hover-yellow a:hover,
		.title-bold.hover-yellow a:hover,
		.title-black.hover-yellow a:hover {
			color: #fad03b;
		}

		.speaker-layout2:before {
			background: rgba(76, 24, 100, 0.8);
		}

		.rt-el-gallrey-tab a {
			border-color: #fad03b;
		}

		.rt-el-gallrey-tab a:hover,
		.rt-el-gallrey-tab .current {
			background-color: #fad03b;
			color: #111 !important;
		}

		.rt-el-gallrey-1 .rtin-item .rtin-content {
			background-color: #4c1864;
		}

		.rt-el-gallrey-1 .rtin-item .rtin-icon:hover {
			color: #4c1864;
		}

		.rt-el-gallrey-box .rtin-content .rtin-title a:hover {
			color: #4c1864;
		}

		.rt-el-gallrey-1 .rtin-item:before {
			background-color: rgba(76, 24, 100, 0.8);
		}

		.rt-el-post-slider .rtin-item .rtin-thumbnail-area .rtin-meta-1 {
			background-color: rgba(76, 24, 100, 0.8);
		}

		.rt-el-gallrey-1 .rtin-item .rtin-icon:hover {
			color: #4c1864;
		}

		.sidebar-widget-area .contact-us-form {
			background-color: #4c1864;
		}

		.sidebar-widget-area .contact-us-form .form-group .form-control {
			background: #fad03b;
		}

		.services-single .rtin-heading:after {
			background-color: #4c1864;
		}

		.rt-el-title.style3 .rtin-title:after {
			background-color: #4c1864;
		}

		.rt-el-gallrey-2 .rtin-item:before {
			background-image: linear-gradient(transparent, #4c1864), linear-gradient(transparent, #4c1864);
		}

		.rt-el-gallrey-2 .rtin-item .rtin-icon:hover {
			color: #4c1864;
		}

		.rt-el-gallrey-3 .rtin-item:before {
			background-color: rgba(76, 24, 100, 0.8);
		}

		.rt-el-gallrey-3 .rtin-item .rtin-content .rtin-icon {
			color: #4c1864;
		}

		.rt-el-services-box.rtin-style3 .rtin-content .rtin-title:after {
			background-color: #4c1864;
		}

		.services-single .rtin-heading:after,
		.rt-el-title.style3 .rtin-title:after {
			background-color: #4c1864;
		}

		.widget .category-type ul li a:hover {
			background-color: #4c1864;
		}

		.rt-el-cta-1 {
			background-color: #4c1864;
		}

		.rt-el-counter .rtin-left .fa,
		.rt-el-counter .rtin-item .rtin-right.text-center .rtin-title {
			color: #4c1864;
		}

		.rt-el-info-box .rtin-content .rtin-title a:hover {
			color: #4c1864;
		}

		.rt-el-info-box.rtin-style1.rtin-light .rtin-content .rtin-title a,
		.rt-el-info-box.rtin-style1.rtin-light .rtin-icon i,
		.rt-el-info-box.rtin-style1.rtin-light .rtin-content .rtin-title {
			color: #fad03b !important;
			;
		}

		.rt-el-info-box.rtin-style3 .rtin-icon .rtin-button {
			background-color: rgba(76, 24, 100, 0.9);
		}

		.rt-el-twt-2 .rtin-title span {
			color: #4c1864;
		}

		.rt-el-twt-2 .rtin-content ul li:after {
			color: #4c1864;
		}

		.rt-el-twt-3 .rtin-title:after {
			background-color: #4c1864;
		}

		.rt-el-nav-menu.widget ul li.current-menu-item a,
		.rt-el-nav-menu.widget ul li.current-menu-item a:hover {
			background-color: #fad03b;
		}

		.site-header .main-navigation>nav>ul>li>a:after {
			background-color: #fad03b;
		}

		.rt-el-contact ul li i {
			color: #4c1864;
		}

		.schedule-wrapper-8 .schedule-title a:hover {
			color: #fad03b;
		}

		.schedule-wrapper-8 .schedule-list-info li i,
		.schedule-wrapper-8 .details-down:hover,
		.schedule-wrapper-8 .schedule-time i {
			color: #fad03b;
		}

		.schedule-layout3 .schedule-nav li a:hover {
			color: #fad03b;
		}

		.schedule-layout3 .schedule-nav li a:hover:before {
			color: #fad03b;
		}

		.schedule-layout3 .schedule-nav li .active:before {
			color: #fad03b;
		}

		.schedule-layout3 .schedule-nav li .active {
			color: #fad03b;
		}

		.schedule-layout2 .schedule-nav li a:before {
			background: #fad03b;
		}

		.schedule-layout2 .schedule-nav li a:hover {
			background: #fad03b;
		}

		.slider-layout2 .comingsoon-inner .comingsoon-content .upcoming-event-info {
			color: #fad03b;
		}

		.rt-el-slider .nivo-directionNav a.nivo-prevNav:before,
		.rt-el-slider .nivo-directionNav a.nivo-nextNav:before {
			color: #fad03b;
		}

		.rt-el-slider .nivo-directionNav a.nivo-prevNav:hover,
		.rt-el-slider .nivo-directionNav a.nivo-nextNav:hover {
			background-color: #fad03b;
		}

		.skew {
			background: rgba(76, 24, 100, 0.7);
		}

		.skew_2 {
			background: rgba(76, 24, 100, 0.6);
		}

		.skew_3 {
			background: rgba(76, 24, 100, 0.5);
		}

		.price-table-layout3 .tpt-col-inner:hover {
			background: #4c1864;
		}

		.price-table-layout2:after {
			background: #fad03b;
		}

		.price-table-layout2 .tpt-header .tpt-header-top .tpt-title:before {
			background-color: #fad03b;
		}

		.price-table-layout2 .tpt-header .tpt-header-top .tpt-title:after {
			background-color: #fad03b;
		}

		.price-table-layout3 .tpt-footer .tpt-footer-btn {
			background-color: #fad03b;
		}

		.price-table-layout3 .tpt-col-inner:hover .tpt-header .tpt-header-top {
			border-bottom: 1px solid #fad03b;
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
	<script type='text/javascript'
		src='https://radiustheme.com/demo/wordpress/eventalk/wp-includes/js/jquery/jquery.min.js'
		id='jquery-core-js'></script>
	<script>
		loadAsync('https://radiustheme.com/demo/wordpress/eventalk/wp-content/cache/wpo-minify/1680330236/assets/wpo-minify-header-c9550b02.min.js', null);
	</script>
	<meta name="generator"
		content="Powered by LayerSlider 7.6.8 - Build Heros, Sliders, and Popups. Create Animations and Beautiful, Rich Web Content as Easy as Never Before on WordPress." />
	<!-- LayerSlider updates and docs at: https://layerslider.com -->
	<link rel="https://api.w.org/" href="https://radiustheme.com/demo/wordpress/eventalk/wp-json/" />
	<link rel="alternate" type="application/json"
		href="https://radiustheme.com/demo/wordpress/eventalk/wp-json/wp/v2/pages/2448" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD"
		href="https://radiustheme.com/demo/wordpress/eventalk/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml"
		href="https://radiustheme.com/demo/wordpress/eventalk/wp-includes/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 6.2" />
	<meta name="generator" content="WooCommerce 7.5.1" />
	<link rel="canonical" href="https://radiustheme.com/demo/wordpress/eventalk/home6-new/" />
	<link rel='shortlink' href='https://radiustheme.com/demo/wordpress/eventalk/?p=2448' />
	<link rel="alternate" type="application/json+oembed"
		href="https://radiustheme.com/demo/wordpress/eventalk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Feventalk%2Fhome6-new%2F" />
	<link rel="alternate" type="text/xml+oembed"
		href="https://radiustheme.com/demo/wordpress/eventalk/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Feventalk%2Fhome6-new%2F&#038;format=xml" />
	<meta name="generator" content="Redux 4.4.0" />
	<link rel='preload'
		href='https://radiustheme.com/demo/wordpress/eventalk/wp-content/themes/eventalk/assets/fonts/fontawesome-webfont.woff2?v=4.7.0'
		as='font' type='font/woff2' crossorigin />
	<link rel='preconnect' href='https://fonts.gstatic.com/' /> <noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<meta name="generator"
		content="Elementor 3.12.0; features: e_dom_optimization, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-internal, google_font-enabled, font_display-auto">
	<link rel="icon"
		href="https://radiustheme.com/demo/wordpress/eventalk/wp-content/uploads/2018/07/cropped-favicon-100x100.png"
		sizes="32x32" />
	<link rel="icon"
		href="https://radiustheme.com/demo/wordpress/eventalk/wp-content/uploads/2018/07/cropped-favicon-300x300.png"
		sizes="192x192" />
	<link rel="apple-touch-icon"
		href="https://radiustheme.com/demo/wordpress/eventalk/wp-content/uploads/2018/07/cropped-favicon-300x300.png" />
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
</head>

<body
	class="page-template-default page page-id-2448 wp-embed-responsive theme-eventalk woocommerce-no-js non-stick header-style-6 trheader no-sidebar product-grid-view elementor-default elementor-kit-2717 elementor-page elementor-page-2448">
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
