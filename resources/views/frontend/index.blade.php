@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400&family=Montserrat:wght@200;300;400;500;600&family=Roboto:wght@300;400;500;700&display=swap');

    :root {
        --demanto-gold: #B39256;
        --demanto-gold-light: #F7F4EB;
        --demanto-dark: #232323;
        --demanto-bg: #FDFBF7;
        --demanto-muted: #6E6E6E;
        --luxury-border: rgba(179, 146, 86, 0.25);
        --transition-smooth: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        --box-shadow-luxury: 0 25px 45px rgba(179, 146, 86, 0.1);
    }

    body {
        background-color: var(--demanto-bg);
        color: var(--demanto-dark);
        font-family: 'Roboto', sans-serif;
        overflow-x: hidden;
        font-size: 13px;
    }

    /* Typography - Minimized */
    .luxury-heading {
        font-family: 'Roboto', sans-serif;
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: uppercase;
        background: linear-gradient(135deg, var(--demanto-dark) 0%, var(--demanto-gold) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-size: 22px !important;
    }

    .luxury-sub {
        font-size: 9px;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--demanto-gold);
        font-weight: 500;
        display: inline-block;
        position: relative;
        padding-bottom: 4px;
    }
    
    .luxury-sub::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 25px;
        height: 1.5px;
        background: var(--demanto-gold);
    }

    .luxury-section-title {
        text-align: center;
        margin-bottom: 25px;
        position: relative;
    }
    
    /* Buttons - Minimized */
    .btn-demanto {
        background: linear-gradient(135deg, var(--demanto-gold) 0%, #9a7b45 100%);
        color: #fff !important;
        font-size: 9px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        padding: 8px 22px;
        border: none;
        border-radius: 25px;
        transition: var(--transition-smooth);
        display: inline-block;
        text-decoration: none;
        position: relative;
        overflow: hidden;
        z-index: 1;
    }
    
    .btn-demanto::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, var(--demanto-dark) 0%, #1a1a1a 100%);
        transition: all 0.5s ease;
        z-index: -1;
        border-radius: 25px;
    }
    
    .btn-demanto:hover::before {
        left: 0;
    }
    
    .btn-demanto:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(179, 146, 86, 0.3);
    }

    .btn-demanto-outline {
        border: 1.5px solid var(--demanto-gold);
        color: var(--demanto-gold);
        font-size: 9px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        padding: 8px 20px;
        background: transparent;
        border-radius: 25px;
        transition: var(--transition-smooth);
        text-decoration: none;
        display: inline-block;
    }
    
    .btn-demanto-outline:hover {
        background: var(--demanto-gold);
        color: #fff !important;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(179, 146, 86, 0.2);
    }

    /* Cards - Minimized */
    .luxury-arch-card {
        background: #fff;
        border: 1px solid var(--luxury-border);
        border-radius: 60px 60px 15px 15px;
        padding: 15px 12px 18px 12px;
        text-align: center;
        transition: var(--transition-smooth);
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        overflow: hidden;
    }
    
    .luxury-arch-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent, var(--demanto-gold), transparent);
        transform: translateX(-100%);
        transition: transform 0.6s ease;
    }
    
    .luxury-arch-card:hover::before {
        transform: translateX(0);
    }
    
    .luxury-arch-card:hover {
        border-color: var(--demanto-gold);
        box-shadow: var(--box-shadow-luxury);
        transform: translateY(-5px);
    }
    
    .arch-image-wrap {
        border-radius: 50px 50px 12px 12px;
        overflow: hidden;
        aspect-ratio: 1/1;
        margin-bottom: 12px;
        background: linear-gradient(135deg, #f8f6f0 0%, #fff 100%);
        position: relative;
    }
    
    .arch-image-wrap img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        padding: 12px;
        transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    
    .luxury-arch-card:hover .arch-image-wrap img {
        transform: scale(1.05) rotate(1deg);
    }

    /* Hero Slider - Minimized */
    .slider-title {
        color: #fff;
        font-family: 'Roboto', sans-serif;
        font-size: 34px;
        font-weight: 400;
        letter-spacing: 1.5px;
        margin-bottom: 10px;
        text-transform: uppercase;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }
    
    .slider-desc {
        color: rgba(255,255,255,0.9);
        font-size: 11px;
        line-height: 1.5;
        font-weight: 300;
        letter-spacing: 0.5px;
    }

    /* Collections Section - Minimized */
    .signature-collections {
        background: linear-gradient(135deg, #fdfcf9 0%, #fff 100%);
        padding: 30px 0;
    }
    
    .collection-arch-card {
        border: 1px solid #e7dcc7;
        border-radius: 100px 100px 20px 20px;
        overflow: hidden;
        background: #fff;
        transition: var(--transition-smooth);
        height: 100%;
        position: relative;
        cursor: pointer;
    }
    
    .collection-arch-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(179, 146, 86, 0.12);
        border-color: var(--demanto-gold);
    }
    
    .collection-image {
        height: 200px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #faf8f3 0%, #fff 100%);
    }
    
    .collection-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.5s ease;
    }
    
    .collection-arch-card:hover img {
        transform: scale(1.05);
    }
    
    .collection-content {
        text-align: center;
        padding: 15px;
        position: relative;
        z-index: 1;
    }
    
    .collection-icon {
        color: var(--demanto-gold);
        font-size: 16px;
        margin-bottom: 8px;
        transition: transform 0.3s ease;
        display: inline-block;
    }
    
    .collection-arch-card:hover .collection-icon {
        transform: rotate(180deg);
    }
    
    .collection-content h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 14px;
        color: #222;
        margin-bottom: 4px;
        font-weight: 500;
    }
    
    .collection-content span {
        font-size: 8px;
        letter-spacing: 1.5px;
        color: var(--demanto-gold);
        font-weight: 500;
    }

    /* About Section - Minimized */
    .about-editorial-section {
        background: linear-gradient(135deg, #FBF9F4 0%, #fff 100%);
        position: relative;
        overflow: hidden;
        padding: 30px 0;
    }
    
    .about-title {
        font-family: 'Roboto', sans-serif;
        font-size: 24px;
        line-height: 1.2;
        color: var(--demanto-dark);
        text-transform: uppercase;
        letter-spacing: 1px;
        position: relative;
        display: inline-block;
        margin-bottom: 12px;
    }
    
    .about-title::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 40px;
        height: 2px;
        background: linear-gradient(90deg, var(--demanto-gold), transparent);
    }
    
    .about-description {
        color: #666;
        font-size: 12px;
        line-height: 1.6;
        margin-top: 15px;
    }
    
    .metric-number {
        color: var(--demanto-gold);
        font-size: 22px;
        margin-bottom: 4px;
        font-weight: 600;
        font-family: 'Roboto', sans-serif;
    }
    
    .metric-item i {
        font-size: 22px;
        color: var(--demanto-gold);
        transition: all 0.3s ease;
    }
    
    .metric-label {
        font-size: 8px;
        letter-spacing: 1px;
        color: #333;
        text-transform: uppercase;
        line-height: 1.3;
        font-weight: 500;
        margin-top: 6px;
    }

    /* Featured Products - Minimized */
    .featured-products {
        background: linear-gradient(180deg, #fff, #faf8f3);
        overflow: hidden;
        padding: 0px 0;
    }
    
    .featured-product-card {
        background: #fff;
        border-radius: 20px;
        border: 1px solid rgba(179, 146, 86, 0.15);
        overflow: hidden;
        transition: 0.4s;
        height: 100%;
    }
    
    .featured-product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(179, 146, 86, 0.12);
    }
    
    .featured-image {
        height: 220px;
        background: #f8f5ef;
        overflow: hidden;
        position: relative;
    }
    
    .featured-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        padding: 20px;
        transition: 0.5s;
    }
    
    .featured-product-card:hover img {
        transform: scale(1.05);
    }
    
    .featured-content {
        padding: 15px;
        text-align: center;
    }
    
    .featured-content h4 {
        font-family: 'Roboto', sans-serif;
        font-size: 14px;
        margin-bottom: 6px;
        color: #232323;
    }
    
    .featured-content a {
        color: #B39256;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 9px;
        letter-spacing: 1px;
    }

    /* Exhibitions Section - UNCHANGED */
    .exhibitions-area {
        background: #FBF9F4;
        padding: 10px 0;
    }
    
    .section-title-demanto {
        font-family: 'Roboto', sans-serif;
        color: #B39256;
        font-size: 28px;
        letter-spacing: 1.5px;
        font-weight: 500;
    }
    
    .demanto-exhibition-item {
        overflow: hidden;
        border-radius: 15px;
    }
    
    .demanto-exhibition-item img {
        width: 100%;
        height: 280px;
        object-fit: cover;
        transition: 0.5s;
    }
    
    .demanto-exhibition-item:hover img {
        transform: scale(1.05);
    }
    
    .swiper-slide-prev .demanto-exhibition-item img,
    .swiper-slide-next .demanto-exhibition-item img {
        opacity: 0.6;
    }
    
    .demanto-prev,
    .demanto-next {
        width: 35px;
        height: 35px;
        border: 1px solid #d7c7a4;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fff;
        color: #b39256;
        cursor: pointer;
        transition: 0.3s;
    }
    
    .demanto-prev {
        left: -10px;
    }
    
    .demanto-next {
        right: -10px;
    }
    
    .demanto-prev:hover,
    .demanto-next:hover {
        background: #B39256;
        color: #fff;
    }

    /* Appointment Section - Minimized */
    .appointment-marquee {
        background: linear-gradient(135deg, rgba(179, 146, 86, 0.05) 0%, rgba(179, 146, 86, 0.02) 100%);
        border-top: 1px solid var(--luxury-border);
        border-bottom: 1px solid var(--luxury-border);
        position: relative;
        overflow: hidden;
        padding: 10px 0;
    }
    
    .appointment-marquee::before {
        content: '✧';
        position: absolute;
        top: 15px;
        left: 15px;
        font-size: 80px;
        color: var(--demanto-gold);
        opacity: 0.03;
        font-family: serif;
    }
    
    .appointment-marquee::after {
        content: '✧';
        position: absolute;
        bottom: 15px;
        right: 15px;
        font-size: 80px;
        color: var(--demanto-gold);
        opacity: 0.03;
        font-family: serif;
    }

    /* Loading Animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    section {
        animation: fadeInUp 0.6s ease-out;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .slider-title { font-size: 30px; }
        .about-title { font-size: 22px; }
        .metric-number { font-size: 20px; }
        .luxury-heading { font-size: 20px !important; }
    }
    
    @media (max-width: 991px) {
        .home-slider-area, .home-slider-container { height: 600px !important; }
        .slider-title { font-size: 28px; }
        .collection-image { height: 180px; }
        .featured-image { height: 200px; }
        .demanto-exhibition-item img { height: 240px; }
    }
    
    @media (max-width: 768px) {
        .home-slider-area, .home-slider-container { height: 500px !important; }
        .slider-title { font-size: 22px !important; letter-spacing: 1px; }
        .slider-desc { font-size: 10px !important; }
        .luxury-heading { font-size: 18px !important; }
        .about-title { font-size: 20px; }
        .metric-number { font-size: 18px; }
        .collection-image { height: 150px; padding: 15px; }
        .collection-content h4 { font-size: 13px; }
        .btn-demanto, .btn-demanto-outline { padding: 6px 16px; font-size: 8px; }
        .featured-image { height: 180px; }
        .demanto-exhibition-item img { height: 200px; }
    }
    
    @media (max-width: 576px) {
        .slider-title { font-size: 18px !important; }
        .luxury-section-title { margin-bottom: 20px; }
        .metric-number { font-size: 16px; }
        .metric-label { font-size: 7px; }
        .collection-image { height: 120px; padding: 12px; }
        .collection-content h4 { font-size: 12px; }
    }

    /* Custom Scrollbar */
    ::-webkit-scrollbar {
        width: 6px;
    }
    
    ::-webkit-scrollbar-track {
        background: var(--demanto-bg);
    }
    
    ::-webkit-scrollbar-thumb {
        background: var(--demanto-gold);
        border-radius: 3px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: #9a7b45;
    }

    .appointment-marquee {
        position: relative;
        min-height: 200px;
        background: url('{{ asset("assets/img/appoint.jpg") }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
    }

    .appointment-overlay {
        position: absolute;
        background: linear-gradient(rgb(14 14 14 / 28%), rgb(98 98 98 / 45%));
        z-index: 1;
    }

    .appointment-text {
        color: #fff;
        font-size: 13px;
        line-height: 1.6;
    }

    .luxury-sub {
        color: #fff;
        letter-spacing: 4px;
    }

    .appointment-marquee .btn-demanto {
        min-width: 180px;
        padding: 10px 25px;
        letter-spacing: 2px;
        font-size: 9px;
    }

    .appointment-marquee .btn-demanto-outline {
        min-width: 180px;
        padding: 10px 25px;
        letter-spacing: 2px;
        font-size: 9px;
    }
</style>

<!-- Hero Slider Section -->
<section class="home-slider-area p-0 m-0" style="height: 70vh; overflow: hidden;">
    <div class="container-fluid p-0 h-100">
        <div class="row g-0 align-items-center h-100">
            <div class="col-12 col-lg-12 p-0 h-100">
                <div class="swiper-container swiper-pagination-style dots-bg-light home-slider-container default-slider-container h-100">
                    <div class="swiper-wrapper home-slider-wrapper slider-default h-100">
                        @forelse ($sliders as $sliderItem)
                        <div class="swiper-slide h-100">
                            @if ($sliderItem->image)
                            <div class="slider-content-area" style="height: 100%; background-image: url('{{ asset($sliderItem->image) }}'); background-size: cover; background-position: center; position: relative;">
                                <div class="slider-overlay"></div>
                                <div class="container h-100" style="position: relative; z-index: 2;">
                                    <div class="row h-100 align-items-center">
                                        <div class="col-12 col-sm-10 col-md-8 col-lg-7 ps-3 ps-md-5">
                                            <div class="slider-content text-start">
                                                <h2 class="slider-title ani-left">{{ $sliderItem->title }}</h2>
                                                <p class="slider-desc ani-right" style="max-width: 550px;">{{ $sliderItem->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        @empty
                        <div class="swiper-slide h-100">
                            <div class="slider-content-area" style="height: 100%; background-image: url('{{ asset('assets/img/slider-placeholder.jpg') }}'); background-size: cover; background-position: center; position: relative;">
                                <div class="slider-overlay"></div>
                                <div class="container h-100" style="position: relative; z-index: 2;">
                                    <div class="row h-100 align-items-center">
                                        <div class="col-12 col-lg-7 ps-5">
                                            <div class="slider-content text-start">
                                                <h2 class="slider-title ani-left">Timeless Luxury <br>By Demanto</h2>
                                                <p class="slider-desc ani-right">Where Diamonds Become Art.</p>
                                                <div class="slider-btn ani-bottom mt-2">
                                                    <a href="{{ url('/collections') }}" class="btn-demanto">Discover The Collections</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Signature Collections Section -->
<section class="signature-collections">
    <div class="container-fluid">
        <div class="luxury-section-title">
            <span class="luxury-sub">Curated Vault</span>
            <h2 class="luxury-heading mt-1">Our Signature Collections</h2>
            <p class="text-muted mt-1" style="font-size: 11px; max-width: 600px; margin: 0 auto;">Discover our meticulously curated collections</p>
        </div>

        <div class="row justify-content-center g-2">
            @foreach($categories as $categoryItem)
                <div class="col-6 col-md-3 mb-2">
                    <a href="{{ url('/collections/'.$categoryItem->slug) }}" class="text-decoration-none">
                        <div class="collection-arch-card">
                            <div class="collection-image">
                                <img src="{{ asset($categoryItem->image) }}" alt="{{ $categoryItem->name }}" loading="lazy">
                            </div>
                            <div class="collection-content">
                                <div class="collection-icon">✧</div>
                                <h4>{{ $categoryItem->name }}</h4>
                                <span>Explore →</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-2">
            <a href="{{ url('/collections') }}" class="demanto-btn">Explore All Collections</a>
        </div>
    </div>
</section>

<!-- About Editorial Section -->
<section class="about-editorial-section">
    <div class="container-fluid">
        <div class="row align-items-center g-3">
            <div class="col-lg-6">
                <div class="row g-2">
                    <div class="col-7">
                        <div class="position-relative overflow-hidden" style="border-radius: 12px;">
                            <img src="{{ ($aboutData && $aboutData->imgone) ? asset('storage/'.$aboutData->imgone) : asset('assets/img/craft-1.jpg') }}"
                                 class="w-100" style="height: 350px; object-fit: cover; transition: transform 0.5s ease;"
                                 alt="Luxury Craftsmanship" loading="lazy">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="mb-2 overflow-hidden" style="border-radius: 12px;">
                            <img src="{{ ($aboutData && $aboutData->imgtwo) ? asset('storage/'.$aboutData->imgtwo) : asset('assets/img/craft-2.jpg') }}"
                                 class="w-100" style="height: 170px; object-fit: cover; transition: transform 0.5s ease;"
                                 alt="Fine Jewelry" loading="lazy">
                        </div>
                        <div class="overflow-hidden" style="border-radius: 12px;">
                            <img src="{{ ($aboutData && $aboutData->imgthree) ? asset('storage/'.$aboutData->imgthree) : asset('assets/img/craft-3.jpg') }}"
                                 class="w-100" style="height: 170px; object-fit: cover; transition: transform 0.5s ease;"
                                 alt="Expert Craftsmanship" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 ps-lg-3">
                <h2 class="about-title">
                    {{ $aboutData->title ?? 'Crafting Timeless Elegance Since 2005' }}
                </h2>
                <div class="about-description">
                    {!! nl2br(e($aboutData->description ?? 'With more than 20 years of expertise, DEMANTO is a leading name in fine jewelry manufacturing.')) !!}
                </div>
                
                <hr class="my-2" style="border-color: var(--luxury-border);">
                
                <div class="row text-center g-2">
                    <div class="col-3">
                        <div class="metric-number">
                            {{ $aboutData->years ?? 20 }}+
                        </div>
                        <div class="metric-label">
                            YEARS OF<br>EXPERTISE
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="metric-item">
                            @if(!empty($aboutData->iconone))
                                <i class="{{ $aboutData->iconone }}"></i>
                            @else
                                <i class="fa-solid fa-gem"></i>
                            @endif
                            <div class="metric-label mt-1">
                                {!! $aboutData->titleone ?? 'FINEST<br>MATERIALS' !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="metric-item">
                            @if(!empty($aboutData->icontwo))
                                <i class="{{ $aboutData->icontwo }}"></i>
                            @else
                                <i class="fa-solid fa-award"></i>
                            @endif
                            <div class="metric-label mt-1">
                                {!! $aboutData->titletwo ?? 'EXPERT<br>CRAFTSMANSHIP' !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="metric-item">
                            @if(!empty($aboutData->iconthree))
                                <i class="{{ $aboutData->iconthree }}"></i>
                            @else
                                <i class="fa-solid fa-earth-americas"></i>
                            @endif
                            <div class="metric-label mt-1">
                                {!! $aboutData->titlethree ?? 'GLOBAL<br>PRESENCE' !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <a href="{{ url('/aboutus') }}" class="btn-demanto">Discover Our Story</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="featured-products">
    <div class="container-fluid">
        <div class="luxury-section-title mb-3">
            <span class="luxury-sub">Timeless Masterpieces</span>
            <h2 class="luxury-heading mt-1">Featured Pieces</h2>
            <p class="text-muted mt-1" style="font-size: 11px;">Discover our most exquisite creations</p>
        </div>

        <div class="position-relative">
            <div class="swiper featured-products-slider">
                <div class="swiper-wrapper">
                    @foreach($newArrivalsProducts as $product)
                    <div class="swiper-slide">
                        <div class="featured-product-card">
                            <div class="featured-image">
                                <a href="{{ url('/collections/'.$product->category->slug.'/'.$product->slug) }}">
                                    @if($product->productImages->count())
                                        <img src="{{ asset($product->productImages[0]->image) }}" alt="{{ $product->name }}">
                                    @else
                                        <img src="{{ asset('assets/img/placeholder.jpg') }}" alt="">
                                    @endif
                                </a>
                            </div>
                            <div class="featured-content">
                                <h4>{{ $product->name }}</h4>
                                <a href="{{ url('/collections/'.$product->category->slug.'/'.$product->slug) }}">Discover Details →</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="featured-pagination mt-2"></div>
            </div>
            <div class="featured-prev"><i class="fa fa-angle-left"></i></div>
            <div class="featured-next"><i class="fa fa-angle-right"></i></div>
        </div>

        <div class="text-center mt-3">
            <a href="{{ url('/collections') }}" class="btn-demanto">View All Jewelry</a>
        </div>
    </div>
</section>

<!-- Exhibitions Section - UNCHANGED -->
<section class="exhibitions-area">
    <div class="container-fluid">
        <div class="text-center mb-4">
            <h2 class="section-title-demanto">EXHIBITIONS & EVENTS</h2>
        </div>

        <div class="position-relative">
            <div class="swiper exhibitions-slider">
                <div class="swiper-wrapper">
                    @foreach($blogs as $exhibition)
                    <div class="swiper-slide">
                        <div class="demanto-exhibition-item">
                            <img src="{{ asset($exhibition->image) }}" alt="{{ $exhibition->title }}">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="demanto-prev"><i class="fa fa-angle-left"></i></div>
            <div class="demanto-next"><i class="fa fa-angle-right"></i></div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ url('/exhibitions') }}" class="btn-demanto-outline">VIEW ALL EXHIBITIONS</a>
        </div>
    </div>
</section>

<!-- Private Appointment Section -->
<section class="appointment-marquee">
    <div class="appointment-overlay"></div>
    <div class="container position-relative z-2">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6 col-md-8">
                <span class="luxury-sub mb-2 d-block">Private Appointment</span>
                <p class="appointment-text">
                    Book a private consultation with our experts and discover the world of DEMANTO.
                </p>
                <div class="mt-3 d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ url('/contact') }}" class="btn-demanto">BOOK AN APPOINTMENT</a>
                    <a href="{{ url('/contact') }}" class="btn-demanto-outline">CONTACT US</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.add('loaded');
                imageObserver.unobserve(img);
            }
        });
    });
    images.forEach(img => imageObserver.observe(img));
});
</script>

<style>
/* Additional utility classes */
.header-area.header-default {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1050; 
    background: transparent;
}

.home-slider-area {
    position: relative;
    z-index: 1;
}

.slider-content-area {
    padding-top: 100px; 
}

.demanto-btn {
    border: 1.5px solid var(--demanto-gold);
    color: var(--demanto-gold);
    padding: 8px 20px;
    text-decoration: none;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 9px;
    transition: var(--transition-smooth);
    display: inline-block;
    border-radius: 25px;
}

.demanto-btn:hover {
    background: var(--demanto-gold);
    color: #fff;
    transform: translateY(-2px);
}

/* Slider Animations */
.ani-left, .ani-right, .ani-bottom {
    opacity: 0;
    visibility: hidden;
    transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
.ani-left { transform: translateX(-25px); }
.ani-right { transform: translateX(25px); }
.ani-bottom { transform: translateY(15px); }

.swiper-slide-active .ani-left,
.swiper-slide-active .ani-right,
.swiper-slide-active .ani-bottom {
    opacity: 1;
    visibility: visible;
    transform: translate(0, 0);
}
.swiper-slide-active .ani-left { transition-delay: 0.2s; }
.swiper-slide-active .ani-right { transition-delay: 0.4s; }
.swiper-slide-active .ani-bottom { transition-delay: 0.6s; }
</style>
@endsection