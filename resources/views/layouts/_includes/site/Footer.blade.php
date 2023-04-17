<footer style="background-image: url('/site/images/background/banner.jpg');background-repeat:no-repeat;">
    <div class="footer-layout2">
        <div class="footer-top-area footer-box-layout">

            <div class="pt-6 pt-lg-7">
                <div class="container">
                    <div class="row justify-content-md-between">
                        <div class="col-md-4 col-lg-5 d-flex flex-column justify-content-between">

                            <div id="eventalk_about-2" class="widget widget_eventalk_about">
                                <a class="footer-widget-logo" href="{{ route('site.home') }}">
                                    <img width="300" src="/site/images/logo/footerlogo.png"
                                        class="attachment-full size-full" alt="" loading="lazy">
                                </a>
                                <div class="footer-widget-about ">
                                    <p class="rtin-des text-white ">Uma iniciativa do Ministério das Telecomunicações, Tecnologias de Informação e Comunicação Social, agregadora de muitas vontades.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 mt-4 mt-md-0">
                            <div class="row">
                                <div class="col-md-4 col-lg-8">
                                    <h4 class="widgettitle text-white mb-3">Fórum</h4>
                                    <ul class="list-unstyled">
                                        <li class="mb-1"><a href="{{ route('site.about.index') }}"
                                            class="text-white">Sobre</a>
                                    </li>
                                        <li class="mb-1"><a href="{{ route('site.schedule') }}"
                                                class="text-white">Agenda</a>
                                        </li>
                                        <li class="mb-1"><a href="{{ route('site.gallery') }}"
                                                class="text-white">Galeria</a>
                                        </li>


                                        <li class="mb-1"><a href="{{ route('site.contact') }}"
                                                class="text-white">Contactos</a>
                                        </li>

                                        <li class="mb-1"><a href="{{ route('site.policyPrivacy') }}"
                                                class="text-white">Políticas de Privacidades</a>
                                        </li>

                                    </ul>
                                </div>


                            </div>
                        </div>

                        <div class="col-md-4 col-lg-3 ">
                            <h4 class="widgettitle text-white mb-3">Links Úteis</h4>
                            <ul class="list-unstyled">
                                <li class="mb-1">
                                    <a target="_blank" href="https://governo.gov.ao/" class="text-white">Governo
                                        de Angola</a>
                                </li>
                                <li class="mb-1"><a target="_blank" href="https://minttics.gov.ao"
                                        class="text-white">MINTTICS</a>
                                </li>
                                <li class="mb-1"><a target="_blank"
                                        href="https://mirex.gov.ao/PortalMIREX/#!/" class="text-white">MIREX</a>
                                </li>

                                <li class="mb-1"><a target="_blank" href="https://ciam.gov.ao/"
                                        class="text-white">CIAM</a>
                                </li>
                                <li class="mb-5"><a target="_blank"
                                        href="https://www.aipex.gov.ao/PortalAIPEX/#!/"
                                        class="text-white">AIPEX</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer-bottom-area pt-sm-5" style="margin-top:-40px;">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 col-xs-12 text-center">
                        <p class="text-white">
                            {{ date('Y') }} © Todos Direitos Reservados
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<a href="#" class="scrollToTop"><i class="fa fa-angle-double-up"></i></a>

<div id="yith-quick-view-modal">
    <div class="yith-quick-view-overlay"></div>
    <div class="yith-wcqv-wrapper">
        <div class="yith-wcqv-main">
            <div class="yith-wcqv-head">
                <a href="#" id="yith-quick-view-close" class="yith-wcqv-close">X</a>
            </div>
            <div id="yith-quick-view-content" class="woocommerce single-product"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, "woocommerce-js");
        document.body.className = c;
    })();
</script>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" aria-label="Share"></button>
                <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" id="redux-custom-fonts-css-css" href="/site/" type="text/css" media="all" />
<link rel="stylesheet" id="owl-carousel-css" href="/site/css/owl.carousel.min.css" type="text/css"
    media="all" />
<link rel="stylesheet" id="owl-theme-default-css" href="/site/css/owl.theme.default.min.css" type="text/css"
    media="all" />
<link rel="stylesheet" id="photoswipe-css" href="/site/css/photoswipe/photoswipe.min.css" type="text/css"
    media="all" />
<link rel="stylesheet" id="photoswipe-default-skin-css" href="/site/css/photoswipe/default-skin/default-skin.min.css"
    type="text/css" media="all" />
<link rel="stylesheet" id="e-animations-css" href="site/animations/animations.min.css" type="text/css"
    media="all" />
<script type="text/javascript" id="wpo_min-footer-0-js-extra">
    /* <![CDATA[ */
    var yith_wcwl_l10n = {
        ajax_url: "\/demo\/wordpress\/eventalk\/wp-admin\/admin-ajax.php",
        redirect_to_cart: "no",
        multi_wishlist: "",
        hide_add_button: "1",
        enable_ajax_loading: "",
        ajax_loader_url: "https:\/\/radiustheme.com\/demo\/wordpress\/eventalk\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg",
        remove_from_wishlist_after_add_to_cart: "1",
        is_wishlist_responsive: "1",
        time_to_close_prettyphoto: "3000",
        fragments_index_glue: ".",
        reload_on_found_variation: "1",
        mobile_media_query: "768",
        labels: {
            cookie_disabled: "We are sorry, but this feature is available only if cookies on your browser are enabled.",
            added_to_cart_message: '<div class="woocommerce-notices-wrapper"><div class="woocommerce-message" role="alert">Product added to basket successfully<\/div><\/div>',
        },
        actions: {
            add_to_wishlist_action: "add_to_wishlist",
            remove_from_wishlist_action: "remove_from_wishlist",
            reload_wishlist_and_adding_elem_action: "reload_wishlist_and_adding_elem",
            load_mobile_action: "load_mobile",
            delete_item_action: "delete_item",
            save_title_action: "save_title",
            save_privacy_action: "save_privacy",
            load_fragments: "load_fragments",
        },
        nonce: {
            add_to_wishlist_nonce: "c79596ff33",
            remove_from_wishlist_nonce: "f2e4589297",
            reload_wishlist_and_adding_elem_nonce: "2b5c71d933",
            load_mobile_nonce: "9740fa4da8",
            delete_item_nonce: "8cfdf22f36",
            save_title_nonce: "6b793c12b4",
            save_privacy_nonce: "ac29391fd7",
            load_fragments_nonce: "932000c41d",
        },
    };

    var EventalkObj = {
        stickyMenu: "1",
        hasAdminBar: "0",
        headerStyle: "1",
        meanWidth: "1100",
        primaryColor: "#4c1864",
        seconderyColor: "#3A98DC",
        day: "Dias",
        hour: "Horas",
        minute: "Minutos",
        second: "Segundos",
        close_text: "Fechar",
        details_text: "Detalhes",
        extraOffset: "75",
        extraOffsetMobile: "52",
        rtl: "no",
    };
    /* ]]> */
</script>
<script>
    loadAsync(
        "/site/layerslider/js/wpo-minify-footer.min.js",
        null
    );
</script>
<script type="text/javascript" id="layerslider-utils-js-extra">
    /* <![CDATA[ */
    var LS_Meta = {
        v: "7.6.8",
        fixGSAP: "1"
    };
    /* ]]> */
</script>
<script data-wp-optimize-escape="/jquery.js" type="text/javascript" src="/site/layerslider/js/layerslider.utils.js"
    id="layerslider-utils-js" defer></script>
<script data-wp-optimize-escape="/jquery.js" type="text/javascript"
    src="/site/layerslider/js/layerslider.kreaturamedia.jquery.js" id="layerslider-js" defer></script>
<script data-wp-optimize-escape="/jquery.js" type="text/javascript" id="layerslider-js-after">
    jQuery(function() {
        _initLayerSlider("#layerslider_8_v69z1ecx16bv", {
            createdWith: "6.7.6",
            sliderVersion: "6.11.8",
            type: "fullwidth",
            allowFullscreen: true,
            pauseOnHover: "enabled",
            skin: "v6",
            sliderFadeInDuration: 350,
            navStartStop: false,
            navButtons: false,
            showCircleTimer: false,
            useSrcset: true,
            skinsPath: "https://radiustheme.com/demo/wordpress/eventalk/wp-content/plugins/LayerSlider/assets/static/layerslider/skins/",
            performanceMode: true,
        });
    });
</script>
<script data-wp-optimize-escape="/jquery.js" type="text/javascript"
    src="/site/layerslider/js/layerslider.transitions.js" id="layerslider-transitions-js" defer></script>
<script type="text/javascript" id="wpo_min-footer-4-js-extra">
    /* <![CDATA[ */
    var _wpUtilSettings = {
        ajax: {
            url: "\/demo\/wordpress\/eventalk\/wp-admin\/admin-ajax.php"
        },
    };
    var wc_add_to_cart_variation_params = {
        wc_ajax_url: "\/demo\/wordpress\/eventalk\/?wc-ajax=%%endpoint%%",
        i18n_no_matching_variations_text: "Sorry, no products matched your selection. Please choose a different combination.",
        i18n_make_a_selection_text: "Please select some product options before adding this product to your basket.",
        i18n_unavailable_text: "Sorry, this product is unavailable. Please choose a different combination.",
    };
    var wc_single_product_params = {
        i18n_required_rating_text: "Please select a rating",
        review_rating_required: "yes",
        flexslider: {
            rtl: false,
            animation: "slide",
            smoothHeight: true,
            directionNav: false,
            controlNav: "thumbnails",
            slideshow: false,
            animationSpeed: 500,
            animationLoop: false,
            allowOneSlide: false,
        },
        zoom_enabled: "",
        zoom_options: [],
        photoswipe_enabled: "1",
        photoswipe_options: {
            shareEl: false,
            closeOnScroll: false,
            history: false,
            hideAnimationDuration: 0,
            showAnimationDuration: 0,
        },
        flexslider_enabled: "",
    };
    /* ]]> */
</script>
<script>
    loadAsync(
        "/site/js/wpo-minify-footer-362169c9.min.js",
        null
    );
</script>
<script>
    loadAsync(
        "/site/js/wpo-minify-footer-b9381073.min.js",
        null
    );
</script>
<script>
    !(function(e) {
        "use strict";
        var t = function(t, n, o, r) {
            function i(e) {
                return l.body ?
                    e() :
                    void setTimeout(function() {
                        i(e);
                    });
            }

            function d() {
                s.addEventListener && s.removeEventListener("load", d),
                    (s.media = o || "all");
            }
            var a,
                l = e.document,
                s = l.createElement("link");
            if (n) a = n;
            else {
                var f = (l.body || l.getElementsByTagName("head")[0]).childNodes;
                a = f[f.length - 1];
            }
            var u = l.styleSheets;
            if (r)
                for (var c in r) r.hasOwnProperty(c) && s.setAttribute(c, r[c]);
            (s.rel = "stylesheet"),
            (s.href = t),
            (s.media = "only x"),
            i(function() {
                a.parentNode.insertBefore(s, n ? a : a.nextSibling);
            });
            var v = function(e) {
                for (var t = s.href, n = u.length; n--;)
                    if (u[n].href === t) return e();
                setTimeout(function() {
                    v(e);
                });
            };
            return (
                s.addEventListener && s.addEventListener("load", d),
                (s.onloadcssdefined = v),
                v(d),
                s
            );
        };
        "undefined" != typeof exports ? (exports.loadCSS = t) : (e.loadCSS = t);
    })("undefined" != typeof global ? global : this);
</script>

@yield('JS')
</body>

</html>
