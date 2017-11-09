<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmlstream.com/preview/unify-v2.2/unify-main/shortcodes/headers/classic-header--one-page-scrolling.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2017 12:11:01 GMT -->
<head>
    <!-- Title -->
    <title>Classic Header - One Page Scrolling | Unify - Responsive Website Template</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="fonts.googleapis.com/cssd366.css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/offcanvas.css">
    <!-- CSS Global Icons -->
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendor/icon-etlinefont/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
    <link rel="stylesheet" href="assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="assets/css/unify-core.css">
    <link rel="stylesheet" href="assets/css/unify-components.css">
    <link rel="stylesheet" href="assets/css/unify-globals.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body id="home-section">
<main>
    @include('partials._header')



    @include('partials._footer')
    <a class="js-go-to u-go-to-v1" href="#" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
</main>

<!-- JS Global Compulsory -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
<script src="assets/vendor/jquery.easing/js/jquery.easing.js"></script>
<script src="assets/vendor/popper.min.js"></script>
<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
<script src="assets/vendor/bootstrap/offcanvas.js"></script>

<!-- JS Implementing Plugins -->
<script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
<script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
<script src="assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
<script src="assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
<script src="assets/vendor/masonry/dist/masonry.pkgd.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/slick-carousel/slick/slick.js"></script>
<script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>

<!-- JS Unify -->
<script src="assets/js/hs.core.js"></script>

<script src="assets/js/components/hs.header.js"></script>
<script src="assets/js/helpers/hs.hamburgers.js"></script>

<script src="assets/js/components/hs.scroll-nav.js"></script>
<script src="assets/js/components/hs.popup.js"></script>
<script src="assets/js/components/hs.carousel.js"></script>

<script src="assets/js/components/hs.go-to.js"></script>

<!-- JS Custom -->
<script src="assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        $('#we-provide').slick('setOption', 'responsive', [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 576,
            settings: {
                slidesToShow: 1
            }
        }], true);

        // initialization of HSScrollNav component
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
            duration: 700,
            easing: 'easeOutExpo'
        });

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of masonry
        $('.masonry-grid').imagesLoaded().then(function () {
            $('.masonry-grid').masonry({
                columnWidth: '.masonry-grid-sizer',
                itemSelector: '.masonry-grid-item',
                percentPosition: true
            });
        });

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');
    });

    $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');
    });
</script>
</body>


<!-- Mirrored from htmlstream.com/preview/unify-v2.2/unify-main/shortcodes/headers/classic-header--one-page-scrolling.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2017 12:11:35 GMT -->
</html>