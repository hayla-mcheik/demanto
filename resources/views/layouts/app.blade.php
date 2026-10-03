<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow">
    <title>DEMANTO - Timeless Luxury</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

    <!--== Google Fonts - Luxury Serif + Sans ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300&family=Montserrat:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <!--== Bootstrap CSS ==-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--== Ionicon CSS ==-->
    {{-- <link href="{{ asset('assets/css/ionicons.min.css') }}" rel="stylesheet"> 
    <!--== Simple Line Icon CSS ==-->
     <link href="{{ asset('assets/css/simple-line-icons.css') }}" rel="stylesheet"> 
    <!--== Line Icons CSS ==-->
    {{-- <link href="{{ asset('assets/css/lineIcons.css') }}" rel="stylesheet"> --}}
    <!--== Font Awesome Icon CSS ==-->

    {{-- <!--== Animate CSS ==-->
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet"> --}}
    <!--== Swiper CSS ==-->
    <link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet">
    <!--== Range Slider CSS ==-->
    {{-- <link href="{{ asset('assets/css/range-slider.css') }}" rel="stylesheet">
    <!--== Fancybox Min CSS ==-->
    <link href="{{ asset('assets/css/fancybox.min.css') }}" rel="stylesheet">
    <!--== Slicknav Min CSS ==-->
    <link href="{{ asset('assets/css/slicknav.css') }}" rel="stylesheet">
    <!--== Owl Carousel Min CSS ==-->
    <link href="{{ asset('assets/css/owlcarousel.min.css') }}" rel="stylesheet">
    <!--== Owl Theme Min CSS ==-->
    <link href="{{ asset('assets/css/owltheme.min.css') }}" rel="stylesheet"> --}}
    <!--== Spacing CSS ==-->
{{-- 
 <link href="{{ asset('assets/css/slicknav.css') }}" rel="stylesheet"> --}}
    <!--== Main Style CSS ==-->
    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
         <link href="{{ asset('assets/css/simple-line-icons.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    {{-- DEMANTO Organization + Website Schema --}}
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@graph": [
        {
            "@@type": "Organization",
            "@@id": "{{ url('/') }}#organization",
            "name": "DEMANTO",
            "url": "{{ url('/') }}",
            "logo": {
                "@@type": "ImageObject",
                "url": "{{ asset('assets/img/logogold.png') }}"
            }
        },
        {
            "@@type": "WebSite",
            "@@id": "{{ url('/') }}#website",
            "url": "{{ url('/') }}",
            "name": "DEMANTO",
            "publisher": {
                "@@id": "{{ url('/') }}#organization"
            }
        }
    ]
}
</script>
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @livewireStyles

    <style>
        /* Global Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
     font-family:"Cormorant Garamond",serif;
            color: #1A1A1A;
            background-color: #FFFFFF;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
font-family:"Cormorant Garamond",serif;
            font-weight: 500;
            letter-spacing: 0.02em;
        }

        /* Main Content Spacing - Accounts for Absolute Header */
        .main-content {
            min-height: 100vh;
        }

        /* Slider content area padding adjustment */
        .home-slider-area .slider-content-area {
            padding-top: 160px;
        }

        @media (max-width: 992px) {
            .home-slider-area .slider-content-area {
                padding-top: 130px;
            }
        }
        .phpdebugbar-restore-btn{
            display: none;
        }
/* Floating WhatsApp Button */
/* =========================================================
   WHATSAPP BUTTON
========================================================= */

.whatsapp-btn {
    position: fixed !important;

    right: 22px;

    width: 56px;
    height: 56px;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 0;

    border-radius: 50%;

    background: green;

    color: #fff !important;

    font-size: 25px;
    line-height: 1;

    text-decoration: none;

    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.22);

    z-index: 99999;

    transition:
        background 0.3s ease,
        box-shadow 0.3s ease,
        transform 0.3s ease;
}


/* =========================================================
   GLOBAL BUTTON - NON HOME PAGES
========================================================= */

.whatsapp-global-btn {
    top: 50% !important;

    transform: translateY(-50%);
}


/* =========================================================
   ICON
========================================================= */

.whatsapp-btn i {
    display: flex;

    align-items: center;
    justify-content: center;

    margin: 0;

    color: #fff;

    line-height: 1;
}


/* =========================================================
   HOVER
========================================================= */

.whatsapp-btn:hover {

    color: #fff !important;

    transform: translateY(-50%) scale(1.08);
}


/* =========================================================
   TABLET
========================================================= */

@media (max-width: 991px) {

    .whatsapp-btn {
        right: 18px;

        width: 56px;
        height: 56px;

        font-size: 24px;
    }

}


/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 767px) {

    .whatsapp-btn {
        right: 14px;

        width: 56px;
        height: 56px;

        font-size: 23px;
    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 575px) {

    .whatsapp-btn {
        right: 12px;

        width: 56px;
        height: 56px;

        font-size: 22px;
    }

}


/* =========================================================
   VERY SMALL MOBILE
========================================================= */

@media (max-width: 400px) {

    .whatsapp-btn {
        right: 10px;

        width: 56px;
        height: 56px;

        font-size: 20px;
    }

}

/* ============================================================
   DEMANTO HEADER — BLACK LUXURY GRADIENT DESIGN
============================================================ */

:root {
    --demanto-gold: #C5A15A;
    --demanto-gold-light: #E4C98F;
    --demanto-dark: #4F4033;
    --demanto-text: #76522E;
    --demanto-muted: #8B7765;
    --demanto-cream: #FDFBF7;
    --demanto-white: #FFFFFF;

    --desktop-header-height: 82px;
    --mobile-header-height: 80px;

    --header-transition:
        all 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}


/* ============================================================
   MAIN HEADER
============================================================ */

.header-area.header-default {
    position: absolute;

    top: 0;
    left: 0;

    width: 100%;

    z-index: 1050;

    background: transparent;
}


/* ============================================================
   DESKTOP HEADER
============================================================ */

.header-bottom {
    position: relative;

    width: 100%;

    min-height: var(--desktop-header-height);

    display: flex;

    align-items: center;

    background: transparent;

    transition:
        background 0.35s ease,
        box-shadow 0.35s ease,
        backdrop-filter 0.35s ease;
}


/*
|--------------------------------------------------------------------------
| BLACK LUXURY GRADIENT
|--------------------------------------------------------------------------
|
| Strong black behind navbar.
| Gradually disappears into the hero image.
|
*/

.header-bottom:not(.sticky-on)::before {
    content: "";

    position: absolute;

    /*
     * Extend below navbar so the gradient
     * fades naturally into the hero.
     */

    top: 0;
    left: 0;
    right: 0;

    height: 80px;

    z-index: 0;

    pointer-events: none;

    background:

        linear-gradient(
            180deg,

            rgba(0, 0, 0, 0.96) 0%,

            rgba(0, 0, 0, 0.88) 30%,

            rgba(0, 0, 0, 0.65) 60%,

            rgba(0, 0, 0, 0.28) 82%,

            rgba(0, 0, 0, 0) 100%
        );
}


.header-bottom > .container {
    position: relative;

    z-index: 2;

    width: 100%;
}


.header-align {
    width: 100%;

    min-height: var(--desktop-header-height);
}


.align-left,
.align-right {
    position: relative;

    z-index: 3;
}


.align-left {
    min-width: 0;
}


.align-right {
    flex-shrink: 0;
}


/* ============================================================
   DESKTOP STICKY HEADER
============================================================ */

.header-bottom.sticky-on {
    position: fixed;

    top: 0;
    left: 0;

    width: 100%;

    background:
        rgba(253, 251, 247, 0.97) !important;

    backdrop-filter:
        blur(14px);

    -webkit-backdrop-filter:
        blur(14px);

    box-shadow:
        0 5px 25px rgba(0, 0, 0, 0.08);

    animation:
        demantoHeaderSlideDown 0.4s ease forwards;

    z-index: 1060;
}


.header-bottom.sticky-on::before {
    display: none;
}


@keyframes demantoHeaderSlideDown {

    from {
        transform: translateY(-100%);
    }

    to {
        transform: translateY(0);
    }

}


/* ============================================================
   LOGO
============================================================ */

.header-logo-area {
    position: relative;

    display: flex;

    align-items: center;

    justify-content: center;

    flex-shrink: 0;

    padding: 7px 10px;

    isolation: isolate;
}


.boutique-logo,
.logo-main {
    position: relative;

    z-index: 2;

    display: block;

    width: auto;

    height: auto;

    transition:
        transform 0.35s ease;

    filter:
        brightness(1.15)
        contrast(1.08)
        saturate(1.12)
        drop-shadow(0 2px 5px rgba(0, 0, 0, 0.45));
}


/*
|--------------------------------------------------------------------------
| SUBTLE GOLD GLOW BEHIND LOGO
|--------------------------------------------------------------------------
*/

.header-logo-area::before {
    content: "";

    position: absolute;

    top: 50%;
    left: 50%;

    width: 135px;
    height: 75px;

    transform:
        translate(-50%, -50%);

    background:

        radial-gradient(
            ellipse at center,

            rgba(255, 230, 170, 0.16) 0%,

            rgba(197, 161, 90, 0.08) 42%,

            rgba(197, 161, 90, 0.02) 65%,

            transparent 76%
        );

    filter:
        blur(5px);

    pointer-events: none;

    z-index: -1;
}


@media (min-width: 992px) {

    .header-bottom .logo-main {
        max-width: 90px !important;
    }


    .header-bottom .logo-main:hover {
        transform:
            scale(1.03);
    }

}


/* ============================================================
   DESKTOP NAVIGATION
============================================================ */

.header-navigation-area {
    display: flex;

    align-items: center;

    min-width: 0;
}


.boutique-nav {
    display: flex;

    align-items: center;

    gap: 2px;

    padding: 0;

    margin: 0;

    list-style: none;
}


.boutique-nav > li {
    position: relative;

    padding:
        0 5px;
}


.boutique-nav > li > a {
    position: relative;

    display: inline-flex;

    align-items: center;

    padding:
        6px 0px !important;

    font-family:
        "Cormorant Garamond",
        serif !important;

    font-size:
        15px !important;

    font-weight:
        800 !important;

    line-height:
        1;

    letter-spacing:
        0.65px;

    text-transform:
        uppercase;

    text-decoration:
        none;

    white-space:
        nowrap;

    /*
     * Ivory white gives better contrast
     * against black gradient.
     */

    color:
        #FAF7F1 !important;

    text-shadow:
        0 2px 9px rgba(0, 0, 0, 0.80);

    transition:
        color 0.3s ease;
}


.boutique-nav > li > a::after {
    content: "";

    position: absolute;

    left: 50%;

    bottom: 0;

    width: 0;

    height: 1px;

    transform:
        translateX(-50%);

    background:
        var(--demanto-gold-light);

    transition:
        width 0.3s ease;
}


.boutique-nav > li > a:hover {
    color:
        var(--demanto-gold-light) !important;
}


.boutique-nav > li > a:hover::after {
    width:
        62%;
}


/* ============================================================
   DESKTOP DROPDOWNS
============================================================ */

.has-dropdown {
    position: relative;
}


.has-dropdown > a i {
    display: inline-block;

    margin-left: 5px;

    font-size: 12px;

    transition:
        transform 0.3s ease;
}


.has-dropdown:hover > a i {
    transform:
        rotate(180deg);
}


.boutique-dropdown {
    position: absolute;

    top:
        calc(100% + 15px);

    left: 50%;

    min-width:
        230px;

    padding:
        8px 0;

    margin:
        0;

    list-style:
        none;

    text-align:
        left;

    background:
        rgba(255, 255, 255, 0.99);

    border:
        1px solid rgba(197, 161, 90, 0.22);

    border-radius:
        6px;

    box-shadow:
        0 18px 45px rgba(0, 0, 0, 0.18);

    opacity:
        0;

    visibility:
        hidden;

    transform:
        translateX(-50%)
        translateY(10px);

    transition:
        opacity 0.3s ease,
        visibility 0.3s ease,
        transform 0.3s ease;

    z-index:
        1080;
}


.boutique-dropdown::after {
    content: "";

    position: absolute;

    top: -18px;

    left: 0;
    right: 0;

    height: 18px;
}


.boutique-dropdown::before {
    content: "";

    position: absolute;

    top: -7px;

    left: 50%;

    width: 14px;
    height: 14px;

    transform:
        translateX(-50%)
        rotate(45deg);

    background:
        #FFFFFF;

    border-top:
        1px solid rgba(197, 161, 90, 0.22);

    border-left:
        1px solid rgba(197, 161, 90, 0.22);
}


@media (min-width: 992px) {

    .has-dropdown:hover > .boutique-dropdown {
        opacity: 1;

        visibility: visible;

        transform:
            translateX(-50%)
            translateY(0);
    }

}


.boutique-dropdown > li {
    position: relative;

    display: block;

    width: 100%;

    margin: 0;

    padding: 0;
}


.boutique-dropdown > li:not(:last-child)::after {
    content: "";

    position: absolute;

    left: 20px;

    right: 20px;

    bottom: 0;

    height: 1px;

    background:
        rgba(197, 161, 90, 0.10);
}


.boutique-dropdown > li > a {
    position: relative;

    display: block;

    width: 100%;

    padding:
        11px 24px !important;

    font-family:
        "Cormorant Garamond",
        serif !important;

    font-size:
        14px !important;

    font-weight:
        600 !important;

    line-height:
        1.3;

    letter-spacing:
        0.7px;

    text-transform:
        uppercase;

    text-decoration:
        none;

    color:
        var(--demanto-dark) !important;

    text-shadow:
        none !important;

    transition:
        color 0.25s ease,
        background 0.25s ease,
        padding-left 0.25s ease;
}


.boutique-dropdown > li > a::after {
    display:
        none !important;
}


.boutique-dropdown > li > a::before {
    content:
        "→";

    position:
        absolute;

    left:
        14px;

    opacity:
        0;

    color:
        var(--demanto-gold);

    transition:
        opacity 0.25s ease,
        left 0.25s ease;
}


.boutique-dropdown > li > a:hover {
    padding-left:
        35px !important;

    color:
        var(--demanto-gold) !important;

    background:
        rgba(197, 161, 90, 0.06);
}


.boutique-dropdown > li > a:hover::before {
    left:
        20px;

    opacity:
        1;
}


/* ============================================================
   DESKTOP RIGHT SIDE ICONS
============================================================ */

.desktop-social {
    display: flex;

    align-items: center;

    gap: 14px;
}


.desktop-social-icon,
.theme-currency > a,
.header-action-area a,
.target-cart-icon {

    color:
        #FAF7F1 !important;

    text-decoration:
        none;

    font-size:
        15px;

    text-shadow:
        0 2px 8px rgba(0, 0, 0, 0.80);

    transition:
        color 0.3s ease;
}




/* ============================================================
   STICKY HEADER COLORS
============================================================ */

.header-bottom.sticky-on
.boutique-nav > li > a {

    color:
        var(--demanto-dark) !important;

    text-shadow:
        none;
}


.header-bottom.sticky-on
.boutique-nav > li > a::after {

    background:
        var(--demanto-gold);
}


.header-bottom.sticky-on
.boutique-nav > li > a:hover {

    color:
        var(--demanto-gold) !important;
}


.header-bottom.sticky-on
.desktop-social-icon,

.header-bottom.sticky-on
.theme-currency > a,

.header-bottom.sticky-on
.header-action-area a,

.header-bottom.sticky-on
.target-cart-icon {

    color:
        var(--demanto-dark) !important;

    text-shadow:
        none;
}


/* ============================================================
   CART COUNT
============================================================ */

.shop-button-item {
    position:
        relative;
}


.shop-count {
    position:
        absolute;

    top:
        -10px;

    right:
        -12px;

    min-width:
        18px;

    width:
        18px;

    height:
        18px;

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    padding:
        0;

    border:
        1px solid rgba(255, 255, 255, 0.65);

    border-radius:
        50%;

    background:
        var(--demanto-gold);

    color:
        #FFFFFF !important;

    font-family:
        "Montserrat",
        sans-serif;

    font-size:
        10px !important;

    font-weight:
        700;

    line-height:
        1;

    text-shadow:
        none;

    box-shadow:
        0 3px 10px rgba(0, 0, 0, 0.22);

    z-index:
        20;
}


/* ============================================================
   MINI CART
============================================================ */

.parent-cart-hover {
    position:
        relative;
}


.popup-cart-content {
    position:
        absolute;

    top:
        calc(100% + 18px);

    right:
        0;

    width:
        320px;

    padding:
        16px;

    background:
        #FFFFFF;

    border:
        1px solid rgba(197, 161, 90, 0.18);

    border-radius:
        6px;

    box-shadow:
        0 20px 45px rgba(0, 0, 0, 0.14);

    opacity:
        0;

    visibility:
        hidden;

    transform:
        translateY(10px);

    transition:
        opacity 0.3s ease,
        visibility 0.3s ease,
        transform 0.3s ease;

    z-index:
        1090;
}


.parent-cart-hover:hover
.popup-cart-content,

.popup-cart-content.show {

    opacity:
        1;

    visibility:
        visible;

    transform:
        translateY(0);
}


/* ============================================================
   MOBILE HEADER
============================================================ */

.responsive-header {
    position: relative;

    width: 100%;

    min-height:
        var(--mobile-header-height);

    display:
        flex;

    align-items:
        center;

    /*
     * Same black luxury gradient on mobile.
     */

    background:

        linear-gradient(
            180deg,

            rgba(0, 0, 0, 0.96) 0%,

            rgba(0, 0, 0, 0.84) 55%,

            rgba(0, 0, 0, 0.58) 100%
        );

    border-bottom:
        1px solid rgba(197, 161, 90, 0.20) !important;

    backdrop-filter:
        blur(5px);

    -webkit-backdrop-filter:
        blur(5px);

    transition:
        var(--header-transition);
}


.responsive-header .row {
    min-height:
        var(--mobile-header-height);
}


.responsive-header .header-item {
    display:
        flex;

    align-items:
        center;
}


.responsive-header .logo-main {
    max-width:
        100px !important;
}


/* ============================================================
   MOBILE ICONS
============================================================ */

.target-mobile-toggle,
.target-mobile-cart-icon,
.mobile-social-icon {

    color:
        #FFFFFF !important;

    text-decoration:
        none;

    text-shadow:
        0 2px 7px rgba(0, 0, 0, 0.65);

    transition:
        color 0.3s ease;
}


.target-mobile-toggle,
.target-mobile-cart-icon {

    font-size:
        20px;
}


.mobile-social-icon {
    width:
        28px;

    height:
        34px;

    display:
        inline-flex;

    align-items:
        center;

    justify-content:
        center;

    margin:
        0 !important;

    padding:
        0;

    font-size:
        14px;
}


.mobile-social-icon:hover {
    color:
        var(--demanto-gold-light) !important;
}


/* ============================================================
   MOBILE RIGHT AREA
============================================================ */

.boutique-icon-small {
    width:
        100%;

    display:
        flex;

    align-items:
        center;

    justify-content:
        flex-end;

    gap:
        2px;
}


.btn-cart {
    flex-shrink:
        0;

    margin:
        0 0 0 2px;

    padding:
        4px 5px;

    line-height:
        1;
}


.responsive-header
.btn-cart
.shop-count {

    top:
        -6px;

    right:
        -7px;
}


/* ============================================================
   MOBILE STICKY HEADER
============================================================ */

@media (max-width: 991px) {

    .header-navigation-area {
        display:
            none !important;
    }


    .header-area.header-sticky-active
    .responsive-header {

        position:
            fixed;

        top:
            0;

        left:
            0;

        width:
            100%;

        background:
            rgba(253, 251, 247, 0.97) !important;

        border-bottom:
            1px solid rgba(197, 161, 90, 0.15) !important;

        backdrop-filter:
            blur(14px);

        -webkit-backdrop-filter:
            blur(14px);

        box-shadow:
            0 4px 18px rgba(0, 0, 0, 0.08);

        z-index:
            1060;
    }


    .header-area.header-sticky-active
    .target-mobile-toggle,

    .header-area.header-sticky-active
    .target-mobile-cart-icon,

    .header-area.header-sticky-active
    .mobile-social-icon {

        color:
            var(--demanto-dark) !important;

        text-shadow:
            none;
    }

}


/* ============================================================
   OFF-CANVAS SIDEBAR
============================================================ */

.off-canvas-wrapper {
    position:
        fixed;

    top:
        0;

    left:
        -330px;

    width:
        min(320px, 88vw);

    height:
        100%;

    z-index:
        2050;

    transition:
        left 0.35s cubic-bezier(0.16, 1, 0.3, 1);
}


.off-canvas-wrapper.active {
    left:
        0;
}


.off-canvas-inner {
    position:
        relative;

    width:
        100%;

    height:
        100%;

    display:
        flex;

    flex-direction:
        column;

    overflow:
        hidden;

    background:
        #FFFFFF;

    box-shadow:
        25px 0 50px rgba(0, 0, 0, 0.16);

    z-index:
        2060;
}


/* ============================================================
   SIDEBAR OVERLAY
============================================================ */

.off-canvas-overlay {
    position:
        fixed;

    inset:
        0;

    background:
        rgba(0, 0, 0, 0.48);

    backdrop-filter:
        blur(2px);

    -webkit-backdrop-filter:
        blur(2px);

    opacity:
        0;

    visibility:
        hidden;

    transition:
        opacity 0.35s ease,
        visibility 0.35s ease;

    z-index:
        2040;
}


.off-canvas-overlay.active {
    opacity:
        1;

    visibility:
        visible;
}


/* ============================================================
   SIDEBAR HEADER
============================================================ */

.off-canvas-header {
    flex-shrink:
        0;

    min-height:
        90px;

    padding:
        18px 22px;

    display:
        flex;

    align-items:
        center;

    justify-content:
        space-between;

    border-bottom:
        1px solid rgba(197, 161, 90, 0.18);

    background:
        var(--demanto-cream);
}


.off-canvas-header
.logo-main {

    max-width:
        70px !important;
}


.btn-menu-close {
    width:
        38px;

    height:
        38px;

    padding:
        0;

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    border:
        1px solid rgba(197, 161, 90, 0.25);

    border-radius:
        50%;

    background:
        transparent;

    color:
        var(--demanto-dark);

    cursor:
        pointer;

    transition:
        var(--header-transition);
}


.btn-menu-close:hover {
    border-color:
        var(--demanto-gold);

    background:
        var(--demanto-gold);

    color:
        #FFFFFF;
}


/* ============================================================
   MOBILE MENU
============================================================ */

.mobile-main-nav {
    flex:
        1 1 auto;

    min-height:
        0;

    margin:
        0;

    padding:
        8px 0;

    overflow-y:
        auto;

    list-style:
        none;

    background:
        #FFFFFF;
}


.mobile-main-nav > li {
    border-bottom:
        1px solid rgba(197, 161, 90, 0.10);
}


.mobile-main-nav > li > a {
    display:
        block;

    padding:
        15px 24px;

    font-family:
        "Cormorant Garamond",
        serif;

    font-size:
        15px;

    font-weight:
        700;

    line-height:
        1.4;

    letter-spacing:
        0.8px;

    text-transform:
        uppercase;

    text-decoration:
        none;

    color:
        var(--demanto-dark);

    transition:
        color 0.25s ease,
        background 0.25s ease;
}


.mobile-main-nav > li > a:hover {
    color:
        var(--demanto-gold);

    background:
        rgba(197, 161, 90, 0.04);
}


/* ============================================================
   MOBILE SUBMENUS
============================================================ */

.mobile-sub-categories {
    display:
        none;

    margin:
        0;

    padding:
        5px 0 12px 38px;

    overflow:
        hidden;

    list-style:
        none;

    background:
        #FAF8F4;

    border-top:
        1px solid rgba(197, 161, 90, 0.10);
}


.mobile-sub-categories > li > a {
    display:
        block;

    padding:
        9px 18px 9px 0;

    font-family:
        "Montserrat",
        sans-serif;

    font-size:
        12px;

    font-weight:
        500;

    letter-spacing:
        0.65px;

    text-transform:
        uppercase;

    text-decoration:
        none;

    color:
        var(--demanto-muted);

    transition:
        color 0.25s ease;
}


.mobile-sub-categories > li > a:hover {
    color:
        var(--demanto-gold);
}


.has-mobile-dropdown
.ion-ios-arrow-down {

    transition:
        transform 0.3s ease;
}


.has-mobile-dropdown.active
.ion-ios-arrow-down {

    transform:
        rotate(180deg);
}


/* ============================================================
   SIDEBAR FOOTER
============================================================ */

.mobile-sidebar-footer {
    flex-shrink:
        0;

    max-height:
        42vh;

    margin:
        0;

    padding:
        20px 24px 26px;

    overflow-y:
        auto;

    background:
        var(--demanto-cream);

    border-top:
        1px solid rgba(197, 161, 90, 0.18);
}


.mobile-sidebar-footer > a,
.mobile-sidebar-footer
.sidebar-location {

    display:
        flex;

    align-items:
        center;

    gap:
        11px;

    margin-bottom:
        12px;

    color:
        var(--demanto-dark);

    font-size:
        13px;

    line-height:
        1.5;

    text-decoration:
        none;
}


.mobile-sidebar-footer i {
    flex:
        0 0 18px;

    width:
        18px;

    text-align:
        center;

    color:
        var(--demanto-gold);
}


/* ============================================================
   SIDEBAR SOCIAL ICONS
============================================================ */

.sidebar-social {
    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    gap:
        12px;

    margin-top:
        18px;
}


.sidebar-social a {
    visibility: hidden;
    width:
        38px;

    height:
        38px;

    margin:
        0;

    padding:
        0;

    display:
        flex;

    align-items:
        center;

    justify-content:
        center;

    border:
        1px solid rgba(197, 161, 90, 0.30);

    border-radius:
        50%;

    background:
        transparent;

    color:
        var(--demanto-dark);

    text-decoration:
        none;

    transition:
        var(--header-transition);
}


.sidebar-social a:hover {
    border-color:
        var(--demanto-gold);

    background:
        var(--demanto-gold);

    color:
        #FFFFFF;
}


.sidebar-social a i {
    width:
        auto;

    color:
        inherit;
}


/* ============================================================
   TABLET / SMALL DESKTOP
============================================================ */

@media (min-width: 992px) and (max-width: 1199px) {

    .header-bottom .container {
        max-width:
            100%;

        padding-left:
            18px !important;

        padding-right:
            18px !important;
    }


    .align-left {
        gap:
            16px !important;
    }


    .boutique-nav > li {
        padding:
            0 2px;
    }


    .boutique-nav > li > a {
        padding:
            8px 7px !important;

        font-size:
            15px !important;

        letter-spacing:
            0.3px;
    }


    .desktop-social {
        gap:
            10px;
    }


    .align-right {
        gap:
            10px !important;
    }

}


/* ============================================================
   MOBILE <= 767PX
============================================================ */

@media (max-width: 767px) {

    .responsive-header
    .container {

        max-width:
            100%;

        padding-left:
            14px !important;

        padding-right:
            14px !important;
    }


    .responsive-header
    .logo-main {

        max-width:
            72px !important;
    }


    .mobile-social-icon {
        width:
            27px;

        font-size:
            14px;
    }


    .target-mobile-toggle,
    .target-mobile-cart-icon {

        font-size:
            20px;
    }

}


/* ============================================================
   SMALL MOBILE <= 575PX
============================================================ */

@media (max-width: 575px) {

    :root {
        --mobile-header-height:
            80px;
    }


    .responsive-header
    .container {

        padding-left:
            10px !important;

        padding-right:
            10px !important;
    }


    .responsive-header
    .logo-main {

        max-width:
            90px !important;
    }


    .mobile-social-icon {
        width:
            24px;

        height:
            32px;

        font-size:
            13px;
    }


    .boutique-icon-small {
        gap:
            1px;
    }


    .target-mobile-toggle {
        font-size:
            20px;
    }


    .target-mobile-cart-icon {
        font-size:
            19px;
    }


    .btn-cart {
        margin-left:
            1px;

        padding:
            3px;
    }


    .responsive-header
    .btn-cart
    .shop-count {

        top:
            -7px;

        right:
            -8px;

        width:
            17px;

        min-width:
            17px;

        height:
            17px;

        font-size:
            9px !important;
    }


    .off-canvas-wrapper {
        width:
            min(300px, 88vw);
    }


    .mobile-sidebar-footer {
        max-height:
            38vh;
    }

}


/* ============================================================
   VERY SMALL MOBILE <= 400PX
============================================================ */

@media (max-width: 400px) {

    .responsive-header
    .container {

        padding-left:
            8px !important;

        padding-right:
            8px !important;
    }


    .responsive-header
    .logo-main {

        max-width:
            100px !important;
    }


    .mobile-social-icon {
        width:
            21px;

        font-size:
            12px;
    }


    .boutique-icon-small {
        gap:
            0;
    }


    .target-mobile-toggle {
        font-size:
            19px;
    }


    .target-mobile-cart-icon {
        font-size:
            18px;
    }


    .btn-cart {
        margin-left:
            0;

        padding:
            2px;
    }

}


/* ============================================================
   ACCESSIBILITY
============================================================ */

.boutique-nav a:focus-visible,
.desktop-social-icon:focus-visible,
.mobile-social-icon:focus-visible,
.btn-menu-close:focus-visible,
.mobile-main-nav a:focus-visible,
.sidebar-social a:focus-visible {

    outline:
        2px solid var(--demanto-gold);

    outline-offset:
        3px;
}


/* ============================================================
   REDUCED MOTION
============================================================ */

@media (prefers-reduced-motion: reduce) {

    .header-bottom,
    .boutique-nav a,
    .boutique-dropdown,
    .has-dropdown i,
    .off-canvas-wrapper,
    .off-canvas-overlay,
    .mobile-social-icon,
    .desktop-social-icon,
    .shop-count {

        transition:
            none !important;

        animation:
            none !important;
    }

}
/* ============================================================
   DESKTOP NAVBAR HOVER -> SAME DESIGN AS STICKY NAVBAR
   ADD THIS AT THE VERY END OF YOUR CURRENT CSS
============================================================ */

@media (min-width: 992px) {

    /* --------------------------------------------------------
       1. SMOOTH TRANSITION FOR THE WHOLE NAVBAR
    -------------------------------------------------------- */

    .header-bottom {
        transition:
            background 0.35s ease,
            background-color 0.35s ease,
            box-shadow 0.35s ease,
            backdrop-filter 0.35s ease,
            -webkit-backdrop-filter 0.35s ease;
    }


    /* --------------------------------------------------------
       2. GRADIENT PSEUDO ELEMENT TRANSITION
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on)::before {
        opacity: 1;

        transition:
            opacity 0.35s ease;
    }


    /* --------------------------------------------------------
       3. WHEN MOUSE ENTERS THE NAVBAR
       MAKE IT LOOK EXACTLY LIKE STICKY NAVBAR
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover,
    .header-bottom:not(.sticky-on):focus-within {

        background:
            rgba(253, 251, 247, 0.97) !important;

        backdrop-filter:
            blur(14px);

        -webkit-backdrop-filter:
            blur(14px);

        box-shadow:
            0 5px 25px rgba(0, 0, 0, 0.08);
    }


    /* --------------------------------------------------------
       4. REMOVE BLACK GRADIENT WHILE NAVBAR IS HOVERED
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover::before,
    .header-bottom:not(.sticky-on):focus-within::before {

        opacity: 0;
    }


    /* --------------------------------------------------------
       5. MENU LINKS BECOME DARK
       SAME AS STICKY NAVBAR
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .boutique-nav > li > a,

    .header-bottom:not(.sticky-on):focus-within
    .boutique-nav > li > a {

        color:
            var(--demanto-dark) !important;

        text-shadow:
            none !important;
    }


    /* --------------------------------------------------------
       6. MENU LINK UNDERLINE BECOMES GOLD
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .boutique-nav > li > a::after,

    .header-bottom:not(.sticky-on):focus-within
    .boutique-nav > li > a::after {

        background:
            var(--demanto-gold);
    }


    /* --------------------------------------------------------
       7. INDIVIDUAL MENU LINK HOVER
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .boutique-nav > li > a:hover,

    .header-bottom:not(.sticky-on):focus-within
    .boutique-nav > li > a:hover {

        color:
            var(--demanto-gold) !important;
    }


    /* --------------------------------------------------------
       8. SOCIAL ICONS BECOME DARK
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .desktop-social-icon,

    .header-bottom:not(.sticky-on):focus-within
    .desktop-social-icon {

        color:
            var(--demanto-dark) !important;

        text-shadow:
            none !important;
    }


    /* --------------------------------------------------------
       9. SOCIAL ICON HOVER BECOMES GOLD
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .desktop-social-icon:hover,

    .header-bottom:not(.sticky-on):focus-within
    .desktop-social-icon:hover {

        color:
            var(--demanto-gold) !important;
    }


    /* --------------------------------------------------------
       10. CURRENCY BECOMES DARK
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .theme-currency > a,

    .header-bottom:not(.sticky-on):focus-within
    .theme-currency > a {

        color:
            var(--demanto-dark) !important;

        text-shadow:
            none !important;
    }


    /* --------------------------------------------------------
       11. CURRENCY HOVER BECOMES GOLD
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .theme-currency > a:hover,

    .header-bottom:not(.sticky-on):focus-within
    .theme-currency > a:hover {

        color:
            var(--demanto-gold) !important;
    }


    /* --------------------------------------------------------
       12. CART LINK BECOMES DARK
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .header-action-area a,

    .header-bottom:not(.sticky-on):focus-within
    .header-action-area a {

        color:
            var(--demanto-dark) !important;

        text-shadow:
            none !important;
    }


    /* --------------------------------------------------------
       13. CART ICON BECOMES DARK
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .target-cart-icon,

    .header-bottom:not(.sticky-on):focus-within
    .target-cart-icon {

        color:
            var(--demanto-dark) !important;

        text-shadow:
            none !important;
    }


    /* --------------------------------------------------------
       14. CART HOVER BECOMES GOLD
    -------------------------------------------------------- */



    /* --------------------------------------------------------
       15. KEEP CART COUNT GOLD + WHITE TEXT
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .shop-count,

    .header-bottom:not(.sticky-on):focus-within
    .shop-count {

        background:
            var(--demanto-gold) !important;

        color:
            #FFFFFF !important;

        border-color:
            rgba(197, 161, 90, 0.35);
    }


    /* --------------------------------------------------------
       16. KEEP DROPDOWN WHITE
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .boutique-dropdown,

    .header-bottom:not(.sticky-on):focus-within
    .boutique-dropdown {

        background:
            rgba(255, 255, 255, 0.99);
    }


    /* --------------------------------------------------------
       17. DROPDOWN LINKS STAY DARK
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .boutique-dropdown > li > a,

    .header-bottom:not(.sticky-on):focus-within
    .boutique-dropdown > li > a {

        color:
            var(--demanto-dark) !important;

        text-shadow:
            none !important;
    }


    /* --------------------------------------------------------
       18. DROPDOWN LINK HOVER
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .boutique-dropdown > li > a:hover,

    .header-bottom:not(.sticky-on):focus-within
    .boutique-dropdown > li > a:hover {

        color:
            var(--demanto-gold) !important;

        background:
            rgba(197, 161, 90, 0.06);
    }


    /* --------------------------------------------------------
       19. LOGO SHADOW IS TOO STRONG ON WHITE BACKGROUND
       REDUCE IT WHILE HOVERED
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .logo-main,

    .header-bottom:not(.sticky-on):focus-within
    .logo-main {

        filter:
            brightness(1.05)
            contrast(1.03)
            saturate(1.05)
            drop-shadow(0 2px 4px rgba(0, 0, 0, 0.12));
    }


    /* --------------------------------------------------------
       20. REMOVE LOGO BACKGROUND GLOW ON WHITE NAVBAR
    -------------------------------------------------------- */

    .header-bottom:not(.sticky-on):hover
    .header-logo-area::before,

    .header-bottom:not(.sticky-on):focus-within
    .header-logo-area::before {

        opacity: 0;
    }


    /* --------------------------------------------------------
       21. SMOOTH LOGO GLOW TRANSITION
    -------------------------------------------------------- */

    .header-logo-area::before {

        transition:
            opacity 0.35s ease;
    }

}
/*==========================================
    DEMANTO LOGO
==========================================*/

.demanto-logo{

    display:flex;

    flex-direction:column;

    align-items:center;

    justify-content:center;

    text-decoration:none;

}

.logo-since{

    margin-top:4px;

    color:#D7B06A;

    font-family:"Cormorant Garamond", serif;

    font-size:10px;

    font-weight:500;

    letter-spacing:4px;

    line-height:1;

    text-transform:uppercase;

    text-align:center;

}

.header-bottom.sticky-on .logo-since{

    color:#9A7B45;

}

.header-bottom:not(.sticky-on):hover .logo-since{

    color:#9A7B45;

}

/* Mobile */

@media(max-width:991px){

.logo-since{

    font-size:8px;

    letter-spacing:3px;

    margin-top:2px;

}

}
</style>


</head>
<body>

<div class="wrapper home-default-wrapper">
@include('layouts.inc.frontend.navbar-style-2')
    <main class="main-content">
        @yield('content')
    </main>
{{-- WhatsApp button on all pages except Home --}}
@if (!request()->is('/'))

    <a
        href="https://wa.me/971508505260?text=Hello%20DEMANTO,%20I%20would%20like%20to%20know%20more%20about%20your%20collections."
        class="whatsapp-btn whatsapp-global-btn"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Contact DEMANTO on WhatsApp"
    >
        <i class="fab fa-whatsapp"></i>
    </a>



@endif
 @include('layouts.inc.frontend.footer')


    <!-- Scroll Top Button -->
    <div id="scroll-to-top" class="scroll-to-top">
        <i class="fa fa-angle-up fs-4"></i>
    </div>
</div>

<!-- Scripts -->
{{-- <script src="{{ asset('assets/js/modernizr.js') }}"></script> --}}
<script src="{{ asset('assets/js/jquery-main.js') }}"></script>
{{-- <script src="{{ asset('assets/js/jquery-migrate.js') }}"></script> --}}
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/jquery.appear.js') }}"></script> --}}
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/fancybox.min.js') }}"></script> --}}
<script src="{{ asset('assets/js/slicknav.js') }}"></script>
{{-- <script src="{{ asset('assets/js/waypoints.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/js/owlcarousel.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/js/jquery-match-height.min.js') }}"></script> --}}
<script src="{{ asset('assets/js/jquery-zoom.min.js') }}"></script>
{{-- <script src="{{ asset('assets/js/countdown.js') }}"></script> --}}
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    // Scroll to Top Button
    const scrollBtn = document.getElementById('scroll-to-top');
    if (scrollBtn) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 400) {
                scrollBtn.classList.add('show');
            } else {
                scrollBtn.classList.remove('show');
            }
        });
        
        scrollBtn.addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // Livewire Alertify Events
    window.addEventListener('message', event => {
        if (event.detail && event.detail.text) {
            alertify.set('notifier', 'position', 'top-right');
            alertify.notify(event.detail.text, event.detail.type || 'success');
        }
    });
    document.querySelectorAll(".collection-image img").forEach(function(img){

    function imageLoaded(){

        img.classList.add("loaded");

        const wrapper = img.closest(".collection-image");

        if(wrapper){

            wrapper.classList.add("loaded");

        }

        if(window.signatureSliders){

   const slider = img.closest(".signature-slider");

if (slider && slider.swiper) {

    slider.swiper.update();

}

        }

    }

    if(img.complete && img.naturalWidth){

        imageLoaded();

    }else{

        img.addEventListener("load", imageLoaded);

        img.addEventListener("error", imageLoaded);

    }

});
</script>

@yield('script')
@livewireScripts
@stack('scripts')

</body>
</html>