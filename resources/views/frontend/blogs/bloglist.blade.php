@extends('layouts.app')
@section('title', 'Blogs Page')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400&family=Roboto:wght@300;400;500;700&display=swap');

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
        font-family: 'Roboto', sans-serif;
    }

    /* Exhibitions Section */
    .exhibitions-area {
        background: linear-gradient(135deg, #FDFBF7 0%, #fff 100%);
        padding: 20px 0 50px 0;
        position: relative;
        overflow: hidden;
    }

    .exhibitions-area::before {
        content: '♦';
        position: absolute;
        top: 30px;
        right: 30px;
        font-size: 80px;
        color: var(--demanto-gold);
        opacity: 0.03;
        font-family: serif;
        pointer-events: none;
    }

    .exhibitions-area::after {
        content: '✧';
        position: absolute;
        bottom: 30px;
        left: 30px;
        font-size: 60px;
        color: var(--demanto-gold);
        opacity: 0.03;
        font-family: serif;
        pointer-events: none;
    }

    .section-title-demanto {
        font-family: 'Cormorant Garamond', serif;
        color: var(--demanto-gold);
        font-size: 28px;
        letter-spacing: 2px;
        font-weight: 500;
        margin-bottom: 10px;
    }

    .section-subtitle {
        font-size: 10px;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: var(--demanto-gold);
        font-weight: 500;
        display: inline-block;
        position: relative;
        padding-bottom: 6px;
    }

    .section-subtitle::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 30px;
        height: 1.5px;
        background: var(--demanto-gold);
    }

    /* Exhibition Cards - Grid Layout */
    .exhibitions-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 25px;
        margin: 30px 0;
    }

    .exhibition-card {
        background: #fff;
        border-radius: 20px;
        border: 1px solid var(--luxury-border);
        overflow: hidden;
        transition: var(--transition-smooth);
        position: relative;
    }

    .exhibition-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, transparent, var(--demanto-gold), transparent);
        transform: translateX(-100%);
        transition: transform 0.6s ease;
        z-index: 1;
    }

    .exhibition-card:hover::before {
        transform: translateX(0);
    }

    .exhibition-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--box-shadow-luxury);
        border-color: var(--demanto-gold);
    }

    .exhibition-image {
        position: relative;
        overflow: hidden;
        height: 280px;
        background: linear-gradient(135deg, #faf8f3 0%, #fff 100%);
    }

    .exhibition-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .exhibition-card:hover .exhibition-image img {
        transform: scale(1.05);
    }

    .exhibition-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
        padding: 20px;
        transform: translateY(100%);
        transition: transform 0.4s ease;
    }

    .exhibition-card:hover .exhibition-overlay {
        transform: translateY(0);
    }

    .exhibition-overlay span {
        color: #fff;
        font-size: 11px;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .exhibition-content {
        padding: 20px;
        text-align: center;
    }

    .exhibition-icon {
        color: var(--demanto-gold);
        font-size: 24px;
        margin-bottom: 10px;
        display: inline-block;
        transition: transform 0.3s ease;
    }

    .exhibition-card:hover .exhibition-icon {
        transform: rotate(180deg);
    }

    .exhibition-content h3 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 20px;
        font-weight: 500;
        color: var(--demanto-dark);
        margin-bottom: 8px;
        transition: var(--transition-smooth);
    }

    .exhibition-card:hover .exhibition-content h3 {
        color: var(--demanto-gold);
    }

    .exhibition-date {
        font-size: 11px;
        color: var(--demanto-gold);
        letter-spacing: 1px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .exhibition-date i {
        font-size: 12px;
    }

    .exhibition-content p {
        font-size: 13px;
        color: var(--demanto-muted);
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .exhibition-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--demanto-gold);
        text-decoration: none;
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: var(--transition-smooth);
    }

    .exhibition-link i {
        font-size: 10px;
        transition: transform 0.3s ease;
    }

    .exhibition-link:hover {
        color: var(--demanto-dark);
    }

    .exhibition-link:hover i {
        transform: translateX(5px);
    }

    /* Button */
    .btn-demanto-outline {
        border: 1.5px solid var(--demanto-gold);
        color: var(--demanto-gold);
        font-size: 10px;
        letter-spacing: 2px;
        text-transform: uppercase;
        padding: 10px 28px;
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

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 60px 20px;
        background: #fff;
        border-radius: 20px;
        border: 1px solid var(--luxury-border);
    }

    .empty-state i {
        font-size: 48px;
        color: var(--demanto-gold);
        margin-bottom: 20px;
        opacity: 0.5;
    }

    .empty-state h3 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 24px;
        color: var(--demanto-dark);
        margin-bottom: 10px;
    }

    .empty-state p {
        font-size: 13px;
        color: var(--demanto-muted);
    }

    /* Animation */
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

    .exhibition-card {
        animation: fadeInUp 0.5s ease-out;
        animation-fill-mode: backwards;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .exhibitions-grid {
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
    }

    @media (max-width: 768px) {
        .exhibitions-area {
            padding: 15px 0 40px 0;
        }
        .section-title-demanto {
            font-size: 24px;
        }
        .exhibitions-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        .exhibition-image {
            height: 240px;
        }
        .exhibition-content h3 {
            font-size: 18px;
        }
    }

    @media (max-width: 576px) {
        .exhibition-image {
            height: 220px;
        }
        .exhibition-content {
            padding: 15px;
        }
        .exhibition-content h3 {
            font-size: 16px;
        }
        .exhibition-content p {
            font-size: 12px;
        }
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
</style>

<!-- Dynamic Breadcrumb -->
@include('layouts.inc.frontend.breadcrumb', [
    'breadcrumbs' => [
        [
            'title' => 'Events',
            'url' => '#'
        ]
    ]
])

<!-- Exhibitions Section - Grid Layout (No Slider) -->
<section class="exhibitions-area">
    <div class="container">
        <div class="text-center">
            <span class="section-subtitle">Global Footprint</span>
            <h2 class="section-title-demanto mt-2">EXHIBITIONS & EVENTS</h2>
            <p class="text-muted mt-2" style="font-size: 12px; max-width: 600px; margin: 0 auto;">
                Discover our presence at prestigious international exhibitions worldwide
            </p>
        </div>

        @if($blogs->count() > 0)
            <div class="exhibitions-grid">
                @foreach($blogs as $index => $exhibition)
                    <div class="exhibition-card" style="animation-delay: {{ $index * 0.05 }}s">
                        <div class="exhibition-image">
                            <img src="{{ asset($exhibition->image) }}" alt="{{ $exhibition->title }}" loading="lazy">
                            <div class="exhibition-overlay">
                                <span>Featured Event</span>
                            </div>
                        </div>
                        <div class="exhibition-content">
                            <div class="exhibition-icon">✧</div>
                            <h3>{{ $exhibition->title ?? 'Luxury Exhibition' }}</h3>
                            <div class="exhibition-date">
                                <i class="fa fa-calendar"></i>
                                <span>{{ $exhibition->created_at ? $exhibition->created_at->format('F d, Y') : 'Coming Soon' }}</span>
                            </div>
                            <p>{{ $exhibition->description ?? 'Experience the pinnacle of craftsmanship at our exclusive exhibition.' }}</p>
                  
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-state">
                <i class="fa-regular fa-calendar"></i>
                <h3>No Events Available</h3>
                <p>New exhibitions and events are being planned. Please check back soon.</p>
            </div>
        @endif

        @if($blogs->count() > 0)
            {{-- <div class="text-center mt-4">
                <a href="{{ url('/exhibitions') }}" class="btn-demanto-outline">
                    VIEW ALL EXHIBITIONS
                </a>
            </div> --}}
        @endif
    </div>
</section>

@endsection