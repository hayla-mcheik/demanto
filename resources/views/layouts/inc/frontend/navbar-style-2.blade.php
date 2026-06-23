<header class="header-area header-default header-style {{ request()->is('/') ? '' : 'header-white-links' }}">
 
    <div class="header-bottom sticky-header hidden-md-down to-be-sticky">
        <div class="container-fluid px-4">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="header-align align-default d-flex justify-content-between align-items-center">
                        
                        <div class="align-left d-flex align-items-center gap-4">
                            <div class="header-logo-area">
                                <a href="{{ url('/') }}">
                                    <img class="logo-main boutique-logo" src="{{ asset('assets/img/logogold.png') }}" alt="Logo">
                                </a>
                            </div>
                            
                            <div class="header-navigation-area hidden-md-down">
                                <ul class="main-menu nav position-relative boutique-nav ul-header-nav align-items-center">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('aboutus') }}">About Us</a></li>
                                    
                                    <li class="has-dropdown">
                                        <a href="javascript:void(0)" class="dropdown-click-trigger">
                                            Products <i class="ion-ios-arrow-down ms-1"></i>
                                        </a>
                                        <ul class="boutique-dropdown">
                                            @if(isset($allCategories))
                                                @foreach($allCategories as $categoryItem)
                                                    <li>
                                                        <a href="{{ url('collections/'.$categoryItem->slug) }}">
                                                            {{ $categoryItem->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </li>

                                    <li><a href="{{ url('blogs') }}">News</a></li>
                                    <li><a href="{{ url('contactus') }}">Contact us</a></li>
                                </ul>
                            </div>
                        </div>

                    <div class="align-right d-flex align-items-center gap-3">

    @guest

    <div class="account-links d-flex align-items-center gap-2">

        <a href="{{ url('login') }}">Login</a>

        <span>|</span>

        <a href="{{ url('register') }}">Register</a>

    </div>

    @else

    <div class="dropdown-wrapper">

        <a class="dropdown-btn profile-trigger" href="#">
            {{ Auth::user()->name }}
            <i class="ion-ios-arrow-down ms-1"></i>
        </a>

        <ul class="dropdown-content-menu">

            @if(auth()->user()->role_as == '1')
                <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            @else
                <li><a href="{{ url('account') }}">My Account</a></li>
            @endif

            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">

                    Logout

                </a>

                <form id="logout-form"
                      action="{{ route('logout') }}"
                      method="POST"
                      class="d-none">

                    @csrf

                </form>

            </li>

        </ul>

    </div>

    @endguest

    <div class="theme-currency">

        <a href="#">USD $</a>

    </div>

    <div class="header-action-area">

        <div class="shop-button-item position-relative parent-cart-hover">

            <a class="shop-button cart-toggle" href="javascript:void(0)">

                <div class="position-relative">

                    <i class="icon-bag icon target-cart-icon"></i>

                    <sup class="shop-count">
                        <livewire:frontend.cart.cart-count />
                    </sup>

                </div>

            </a>

            <div class="popup-cart-content">

                <livewire:frontend.cart.cart-items />

            </div>

        </div>

    </div>

</div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="responsive-header d-lg-none py-0 border-bottom border-light-subtle">
        <div class="container-fluid px-3">
            <div class="row align-items-center">
                <div class="col-4">
                    <div class="header-item">
                        <button class="btn-menu ul-header-sidebar-opener bg-transparent border-0 fs-4" type="button" id="mobileMenuBtn">
                            <i class="icon-menu text-white target-mobile-toggle"></i>
                        </button>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div class="header-item justify-content-center">
                        <div class="header-logo-area">
                            <a href="{{ url('/') }}">
                                <img class="logo-main boutique-logo" src="{{ asset('assets/img/logogold.png') }}" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4 text-end">
                    <div class="header-item justify-content-end boutique-icon-small">
                        <button class="btn-cart bg-transparent border-0 position-relative fs-4" onclick="window.location.href='{{ url('cart') }}'">
                            <i class="icon-bag text-white target-mobile-cart-icon"></i> 
                            <span class="item-count position-absolute badge rounded-circle shop-count" style="top: -5px; right: -8px; font-size: 8px; padding: 2px 4px;">
                                <livewire:frontend.cart.cart-count />
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="off-canvas-wrapper" id="mobileSidebar">
    <div class="off-canvas-inner">
        <div class="off-canvas-header">
            <div class="logo text-start">
                <img class="logo-main" src="{{ asset('assets/img/logogold.png') }}" alt="Logo" style="max-width: 70px;">
            </div>
            <button class="btn-menu-close" id="closeSidebar"> <i class="icon-close"></i></button>
        </div>
        <ul class="mobile-main-nav">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('aboutus') }}">About Us</a></li>
            <li class="has-mobile-dropdown">
                <a href="javascript:void(0)" class="mobile-dropdown-trigger">
                    Products <i class="ion-ios-arrow-down float-end mt-1"></i>
                </a>
                <ul class="mobile-sub-categories">
                    @if(isset($allCategories))
                        @foreach($allCategories as $categoryItem)
                            <li><a href="{{ url('collections/'.$categoryItem->slug) }}">{{ $categoryItem->name }}</a></li>
                        @endforeach
                    @endif
                </ul>
            </li>
            <li><a href="{{ url('blogs') }}">News</a></li>
            <li><a href="{{ url('contactus') }}">Contact us</a></li>
        </ul>
    </div>
</div>
<div class="off-canvas-overlay" id="sidebarOverlay"></div>

<style>
    /* ==========================================================================
       1. CORE STRUCTURAL LAYOUT HYDRATION & REFINED DROPDOWN LOGIC FRAMEWORK
       ========================================================================== */
    :root {
        --boutique-pink: #C9A96E;
        --boutique-dark: #232323;
        --boutique-muted: #7e7e7e;
        --boutique-light-border: #f2f2f2;
    }
    
    .header-area.header-default {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1050;
        background: transparent;
    }

    .header-top {
        background: rgba(0, 0, 0, 0.25) !important;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
        color: #fff !important;
    }

    .header-top a, 
    .header-top .account-links a,
    .header-top .dropdown-btn {
        color: #fff !important;
        font-size: 10px !important;
    }

    .header-top a:hover,
    .header-top .dropdown-btn:hover {
        color: var(--boutique-pink) !important;
    }

    .header-bottom.to-be-sticky {
        background: transparent !important;
        transition: background 0.3s ease;
    }

    /* Sticky Header Core State Overrides */
    .header-bottom.sticky-on {
        background: rgba(255, 255, 255, 0.98) !important;
        backdrop-filter: blur(10px);
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        animation: headerSlideDown 0.4s ease forwards;
        z-index: 1060;
    }
/* White links for all pages except homepage */
.header-white-links .boutique-nav li a,
.header-white-links .dropdown-wrapper a,
.header-white-links .theme-currency a,
.header-white-links .header-action-area a,
.header-white-links .header-action-area .target-cart-icon {
    color: #ffffff !important;
}
.header-white-links .boutique-nav li  ul li a{
color: #C9A96E !important;
}

/* On hover, keep them white with gold accent */
.header-white-links .boutique-nav li a:hover {
    color: var(--boutique-pink) !important;
}

/* For sticky state on non-homepage */
.header-white-links.header-sticky-active .boutique-nav li a,
.header-white-links.header-sticky-active .dropdown-wrapper a,
.header-white-links.header-sticky-active .theme-currency a,
.header-white-links.header-sticky-active .header-action-area a,
.header-white-links.header-sticky-active .header-action-area .target-cart-icon {
    color: var(--boutique-dark) !important;
}
    .header-bottom.sticky-on .main-menu li a,
    .header-bottom.sticky-on .contact-link a,
    .header-bottom.sticky-on .contact-link span,
    .header-bottom.sticky-on .target-cart-icon,
    .header-bottom.sticky-on .target-cart-total {
        color: var(--boutique-dark) !important;
    }
    
    .header-bottom.sticky-on .main-menu li a:hover {
        color: var(--boutique-pink) !important;
    }

    @keyframes headerSlideDown {
        from { transform: translateY(-100%); }
        to { transform: translateY(0); }
    }

    /* Structural Dropdowns */
    .has-dropdown {
        position: relative;
        padding-bottom: 15px !important;
        margin-bottom: -15px !important;
    }

    .boutique-dropdown::before {
        content: "";
        position: absolute;
        top: -25px;
        left: 0;
        width: 100%;
        height: 25px;
        background: transparent;
    }

    .boutique-dropdown {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        background: #ffffff;
        min-width: 210px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.08);
        padding: 12px 0;
        display: none;
        z-index: 1080;
        border: 1px solid var(--boutique-light-border);
        border-radius: 2px;
        text-align: left;
    }

    @media (min-width: 992px) {
        .has-dropdown:hover .boutique-dropdown {
            display: block !important;
            animation: luxuryNavFade 0.3s ease forwards;
        }
    }

    .boutique-dropdown.is-open {
        display: block !important;
    }

    .boutique-dropdown li {
        display: block;
        width: 100%;
        padding: 0 !important;
        margin: 0 !important;
    }

    .boutique-dropdown li a {
        padding: 8px 22px !important;
        color: var(--boutique-dark) !important;
        font-size: 11px !important;
        font-weight: 600 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.5px;
        display: block;
        transition: all 0.2s ease;
        border: none !important;
        text-decoration: none;
    }

    .boutique-dropdown li a:hover {
        color: var(--boutique-pink) !important;
        background: #fbfbfb;
        padding-left: 26px !important;
    }

    /* Refactored Clean Authentication Dropdown Structures */
    .dropdown-wrapper {
        position: relative;
    }
    .dropdown-content-menu {
        position: absolute;
        top: 100%;
        right: 0;
        background: #fff;
        min-width: 160px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.06);
        border: 1px solid var(--boutique-light-border);
        padding: 6px 0;
        display: none;
        z-index: 1090;
        list-style: none;
        margin: 0;
    }
    .dropdown-wrapper:hover .dropdown-content-menu {
        display: block;
    }
    .dropdown-content-menu li a {
        display: block;
        padding: 6px 18px;
        color: var(--boutique-dark) !important;
        font-size: 10px !important;
        text-transform: uppercase;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.2s ease;
        text-align: left;
    }
    .dropdown-content-menu li a:hover {
        background: #fafafa;
        color: var(--boutique-pink) !important;
    }

    /* ==========================================================================
       2. TYPOGRAPHIC BALANCING MATRIX LABELS & LOGO FRAMING ACCENTS
       ========================================================================== */
    .boutique-logo {
        height: auto !important;
        transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    }
    @media (max-width: 991px) {
        .logo-main { max-width: 70px !important; }
    }
    @media (min-width: 992px) {
        .logo-main { max-width: 90px !important; }
        .logo-main:hover { transform: scale(1.02); }
    }

    .boutique-nav li a,
    .boutique-text-small a,
    .header-top .dropdown-btn {
        font-size: 10px !important;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
        text-decoration: none;
    }

    .boutique-nav li a {
        padding: 6px 14px !important;
        display: inline-block;
        color: black !important;
        transition: color 0.25s ease;
    }
/* Default Header */
.dropdown-wrapper a,
.theme-currency a,
.header-action-area a,
.header-action-area .target-cart-icon{
    color: #fff;
    transition: color .3s ease;
}

/* Sticky Header */
.header-area.header-sticky-active .dropdown-wrapper a,
.header-area.header-sticky-active .theme-currency a,
.header-area.header-sticky-active .header-action-area a,
.header-area.header-sticky-active .header-action-area .target-cart-icon{
    color: #000;
}
       .boutique-nav li ul li  a {
       color: var(--demanto-gold) !important;
         font-size: 9px !important;
       } 
    .contact-email span {
        font-size: 10px !important;
        letter-spacing: 0.3px;
        color: rgba(255,255,255,0.8);
    }
    .contact-email span a {
        text-transform: lowercase !important;
        font-weight: 500;
        text-decoration: none;
    }

    .has-dropdown i {
        display: inline-block;
        transition: transform 0.25s ease;
    }
    .has-dropdown:hover i {
        transform: rotate(180deg);
    }

    .shop-count {
        background: var(--boutique-pink) !important;
        color: #ffffff !important;
        font-size: 8px !important;
        font-weight: 600;
        padding: 2px 5px !important;
        border-radius: 50% !important;
        min-width: 16px;
        height: 16px;
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
    }

    /* Mini Cart Dropdown Styles */
    .parent-cart-hover:hover .popup-cart-content {
        display: block;
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    
    .popup-cart-content {
        position: absolute;
        top: 100%;
        right: 0;
        width: 300px;
        background: #fff;
        box-shadow: 0 20px 40px rgba(0,0,0,.12);
        border: 1px solid #eee;
        padding: 15px;
        z-index: 1090;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: .3s;
    }

    .popup-cart-content.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    /* ==========================================================================
       3. LUXURY TEXT TICKER ANIMATION MATRIX LAYER
       ========================================================================== */
    .luxury-ticker {
        height: 20px;
        overflow: hidden;
        position: relative;
        width: 100%;
    }
    .ticker-item {
        font-size: 9px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        color: var(--boutique-pink);
        line-height: 20px;
        text-align: center;
        width: 100%;
        position: absolute;
        opacity: 0;
        transform: translateY(15px);
        animation: tickerAnimation cubic-bezier(0.23, 1, 0.32, 1) 9s infinite;
    }
    
    .ticker-item:nth-child(1) { animation-delay: 0s; }
    .ticker-item:nth-child(2) { animation-delay: 3s; }
    .ticker-item:nth-child(3) { animation-delay: 6s; }

    @keyframes tickerAnimation {
        0% { opacity: 0; transform: translateY(15px); }
        3% { opacity: 1; transform: translateY(0); }
        30% { opacity: 1; transform: translateY(0); }
        33% { opacity: 0; transform: translateY(-15px); }
        100% { opacity: 0; }
    }

    @keyframes luxuryNavFade {
        from { opacity: 0; transform: translate(-50%, 8px); }
        to { opacity: 1; transform: translate(-50%, 0); }
    }

    /* ==========================================================================
       4. MOBILE SIDEBAR & RESPONSIVE CONTEXT OVERRIDES
       ========================================================================== */
    .off-canvas-wrapper {
        position: fixed;
        top: 0;
        left: -300px;
        width: 300px;
        height: 100%;
        z-index: 2050;
        transition: left 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }
    
    .off-canvas-wrapper.active {
        left: 0;
        background-color: white;
    }

    .off-canvas-inner {
        position: relative;
        height: 100%;
        width: 100%;
        background: #ffffff;
        box-shadow: 25px 0 50px rgba(0,0,0,0.15);
        display: flex;
        flex-direction: column;
        z-index: 2060;
    }

    .off-canvas-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.4);
        backdrop-filter: blur(2px);
        opacity: 0;
        visibility: hidden;
        transition: all 0.35s ease;
        z-index: 2040;
    }

    .off-canvas-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .off-canvas-header {
        padding: 25px 20px;
        border-bottom: 1px solid var(--boutique-light-border);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .btn-menu-close {
        background: none;
        border: none;
        font-size: 10px;
        letter-spacing: 1.5px;
        cursor: pointer;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--boutique-dark);
    }

    .mobile-main-nav {
        list-style: none;
        padding: 10px 0;
        margin: 0;
        overflow-y: auto;
        flex-grow: 1;
    }

    .mobile-main-nav > li {
        border-bottom: 1px solid #f9f9f9;
    }

    .mobile-main-nav > li > a {
        display: block;
        padding: 14px 25px;
        font-size: 10px;
        font-weight: 600;
        color: var(--boutique-dark);
        text-decoration: none;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .mobile-sub-categories {
        list-style: none;
        padding: 5px 0 12px 40px;
        background: #fafafa;
        display: none;
        border-top: 1px solid #f5f5f5;
    }

    .mobile-sub-categories li a {
        display: block;
        padding: 8px 0;
        font-size: 9px;
        color: var(--boutique-muted);
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 500;
    }

    .has-mobile-dropdown.active .ion-ios-arrow-down {
        transform: rotate(180deg);
    }
    .has-mobile-dropdown .ion-ios-arrow-down {
        transition: transform 0.25s ease;
    }

    @media (max-width: 991px) {
        .header-navigation-area {
            display: none;
        }
        .responsive-header {
            background: rgba(0,0,0,0.35);
            transition: background 0.3s ease;
        }
        .header-area.header-sticky-active .responsive-header {
            background: #ffffff !important;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .header-area.header-sticky-active .target-mobile-toggle,
        .header-area.header-sticky-active .target-mobile-cart-icon {
            color: var(--boutique-dark) !important;
        }
    }
    
    .cart-amount-summary {
        font-size: 10px !important;
        font-weight: 500 !important;
    }
    
    .phone a, .phone span {
        font-size: 10px !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Desktop products dropdown trigger inside mobile view contexts 
        const trigger = document.querySelector('.dropdown-click-trigger');
        const menu = document.querySelector('.boutique-dropdown');

        if (trigger && menu) {
            trigger.addEventListener('click', function(e) {
                if (window.innerWidth <= 991) {
                    e.preventDefault();
                    e.stopPropagation();
                    menu.classList.toggle('is-open');
                    this.parentElement.classList.toggle('active');
                }
            });

            document.addEventListener('click', function(e) {
                if (menu && trigger && !menu.contains(e.target) && !trigger.contains(e.target)) {
                    menu.classList.remove('is-open');
                    if (trigger.parentElement) {
                        trigger.parentElement.classList.remove('active');
                    }
                }
            });
        }

        // Global Window Scroll handling for Multi-tier Sticky Navigation Layers
        const stickyHeader = document.querySelector('.sticky-header');
        const mainHeaderArea = document.querySelector('.header-area');
        
        if (stickyHeader || mainHeaderArea) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 100) {
                    if(stickyHeader) stickyHeader.classList.add('sticky-on');
                    if(mainHeaderArea) mainHeaderArea.classList.add('header-sticky-active');
                } else {
                    if(stickyHeader) stickyHeader.classList.remove('sticky-on');
                    if(mainHeaderArea) mainHeaderArea.classList.remove('header-sticky-active');
                }
            });
        }

        // Mobile Sidebar Flyout Controls
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const closeSidebar = document.getElementById('closeSidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');

        function openMobileSidebar() {
            if (mobileSidebar) mobileSidebar.classList.add('active');
            if (sidebarOverlay) sidebarOverlay.classList.add('active');
        }

        function closeMobileSidebarFunc() {
            if (mobileSidebar) mobileSidebar.classList.remove('active');
            if (sidebarOverlay) sidebarOverlay.classList.remove('active');
        }

        if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', openMobileSidebar);
        if (closeSidebar) closeSidebar.addEventListener('click', closeMobileSidebarFunc);
        if (sidebarOverlay) sidebarOverlay.addEventListener('click', closeMobileSidebarFunc);

        // Accordion collapsing controls for sub-categories over responsive layers
        const mobileDropTrigger = document.querySelector('.mobile-dropdown-trigger');
        if (mobileDropTrigger) {
            mobileDropTrigger.addEventListener('click', function(e) {
                e.preventDefault();
                const parentLi = this.parentElement;
                const subMenu = this.nextElementSibling;
                parentLi.classList.toggle('active');
                
                if (subMenu.style.display === "none" || subMenu.style.display === "") {
                    subMenu.style.display = "block";
                } else {
                    subMenu.style.display = "none";
                }
            });
        }
        
        const cartBtn = document.querySelector('.cart-toggle');
        const cartPopup = document.querySelector('.popup-cart-content');

        if(cartBtn && cartPopup){
            cartBtn.addEventListener('click', function(e){
                e.preventDefault();
                e.stopPropagation();
                cartPopup.classList.toggle('show');
            });

            document.addEventListener('click', function(e){
                if(!cartPopup.contains(e.target) && !cartBtn.contains(e.target)){
                    cartPopup.classList.remove('show');
                }
            });
        }
    });
</script>