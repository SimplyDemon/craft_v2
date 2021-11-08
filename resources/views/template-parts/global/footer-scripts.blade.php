<!-- START: Scripts -->

<!-- Object Fit Polyfill -->
<script src="{{ asset('vendor/object-fit-images/dist/ofi.min.js' ) }}"></script>

<!-- GSAP -->
<script src="{{ asset('vendor/gsap/src/minified/TweenMax.min.js' ) }}"></script>
<script src="{{ asset('vendor/gsap/src/minified/plugins/ScrollToPlugin.min.js' ) }}"></script>

<!-- Popper -->
<script src="{{ asset('vendor/popper.js/dist/umd/popper.min.js' ) }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js' ) }}"></script>

<!-- Sticky Kit -->
<script src="{{ asset('vendor/sticky-kit/dist/sticky-kit.min.js' ) }}"></script>

<!-- Jarallax -->
<script src="{{ asset('vendor/jarallax/dist/jarallax.min.js' ) }}"></script>
<script src="{{ asset('vendor/jarallax/dist/jarallax-video.min.js' ) }}"></script>

<!-- imagesLoaded -->
<script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js' ) }}"></script>

<!-- Flickity -->
<script src="{{ asset('vendor/flickity/dist/flickity.pkgd.min.js' ) }}"></script>

<!-- Isotope -->
<script src="{{ asset('vendor/isotope-layout/dist/isotope.pkgd.min.js' ) }}"></script>

<!-- Photoswipe -->
<script src="{{ asset('vendor/photoswipe/dist/photoswipe.min.js' ) }}"></script>
<script src="{{ asset('vendor/photoswipe/dist/photoswipe-ui-default.min.js' ) }}"></script>

<!-- Typed.js -->
<script src="{{ asset('vendor/typed.js/lib/typed.min.js' ) }}"></script>

<!-- Jquery Validation -->
<script src="{{ asset('vendor/jquery-validation/dist/jquery.validate.min.js' ) }}"></script>

<!-- Jquery Countdown + Moment -->
<script src="{{ asset('vendor/jquery-countdown/dist/jquery.countdown.min.js' ) }}"></script>
<script src="{{ asset('vendor/moment/min/moment.min.js' ) }}"></script>
<script src="{{ asset('vendor/moment-timezone/builds/moment-timezone-with-data.min.js' ) }}"></script>

<!-- Hammer.js -->
<script src="{{ asset('vendor/hammerjs/hammer.min.js' ) }}"></script>

<!-- NanoSroller -->
<script src="{{ asset('vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js' ) }}"></script>

<!-- SoundManager2 -->
<script src="{{ asset('vendor/soundmanager2/script/soundmanager2-nodebug-jsmin.js' ) }}"></script>

<!-- DateTimePicker -->
<script src="{{ asset('vendor/jquery-datetimepicker/build/jquery.datetimepicker.full.min.js' ) }}"></script>

<!-- Revolution Slider -->
<script src="{{ asset('vendor/revolution/js/jquery.themepunch.tools.min.js' ) }}"></script>
<script src="{{ asset('vendor/revolution/js/jquery.themepunch.revolution.min.js' ) }}"></script>
<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.video.min.js' ) }}"></script>
<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.carousel.min.js' ) }}"></script>
<script src="{{ asset('vendor/revolution/js/extensions/revolution.extension.navigation.min.js' ) }}"></script>

<!-- Keymaster -->
<script src="{{ asset('vendor/keymaster/keymaster.js' ) }}"></script>

<!-- Summernote -->
<script src="{{ asset('vendor/summernote/dist/summernote-bs4.min.js' ) }}"></script>

<!-- GODLIKE -->
<script src="{{ asset('vendor/js/godlike.min.js' ) }}"></script>
<script src="{{ asset('vendor/js/godlike-init.js' ) }}"></script>
<!-- END: Scripts -->


<script type="text/javascript">
    var tpj = jQuery;
    var revapi50;
    tpj( document ).ready( function() {
        if ( tpj( "#rev_slider_50_1" ).revolution == undefined ) {
            revslider_showDoubleJqueryError( "#rev_slider_50_1" );
        } else {
            revapi50 = tpj( "#rev_slider_50_1" ).show().revolution( {
                sliderType: "carousel",
                jsFileLocation: "{{ asset('vendor/revolution/js/' ) }}",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    onHoverStop: "off",
                },
                carousel: {
                    maxRotation: 8,
                    vary_rotation: "off",
                    minScale: 20,
                    vary_scale: "off",
                    horizontal_align: "center",
                    vertical_align: "center",
                    fadeout: "off",
                    vary_fade: "off",
                    maxVisibleItems: 3,
                    infinity: "on",
                    space: - 90,
                    stretch: "off"
                },
                responsiveLevels: [1240, 1024, 778, 480],
                gridwidth: [800, 600, 400, 320],
                gridheight: [600, 400, 320, 280],
                lazyType: "none",
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 0,
                shuffle: "off",
                autoHeight: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            } );
        }
    } );
</script>
