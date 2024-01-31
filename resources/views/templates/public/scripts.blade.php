<!-- jquery  -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

<!-- mega-menu -->
<script type="text/javascript" src="assets/js/mega-menu/mega_menu.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="assets/js/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.appear.js"></script>

<!-- magnific-popup -->
<script type="text/javascript" src="assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- appear -->
<script type="text/javascript" src="assets/js/jquery.appear.js"></script>

<!-- counter -->
<script type="text/javascript" src="assets/js/counter/jquery.countTo.js"></script>

<!-- revolution -->
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js">
</script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<script type="text/javascript">
    var tpj = jQuery;
    var revapi19;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_19_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_19_1");
        } else {
            revapi19 = tpj("#rev_slider_19_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "//localhost/revslider-standalone/revslider/public/assets/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 600,
                        style: "hermes",
                        hide_onleave: false,
                        direction: "vertical",
                        h_align: "right",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0,
                        space: 10,
                        tmp: ''
                    }
                },
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: 1270,
                gridheight: 960,
                lazyType: "smart",
                parallax: {
                    type: "mouse",
                    origo: "slidercenter",
                    speed: 2000,
                    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 6, 5, 4, 3, 2, 55],
                    type: "mouse",
                },
                shadow: 0,
                spinner: "spinner3",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "on",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    });
</script>

<!-- Meta Pixel Code -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '482852393834728');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=482852393834728&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->

<script type="text/javascript">
    $('.whatsapp').click(function() {
        fbq('track', 'WhatsApp');
    });
</script>
