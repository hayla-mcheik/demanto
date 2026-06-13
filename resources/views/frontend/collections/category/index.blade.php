@extends('layouts.app')
@section('title', 'All Categories')

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

    /* Categories Section */
    .all-categories {
        background: linear-gradient(135deg, #fdfcf9 0%, #fff 100%);
        padding: 30px 0 40px 0;
        position: relative;
        overflow: hidden;
    }

    .all-categories::before {
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

    .all-categories::after {
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

    /* Category Cards - Minimized */
    .category-card {
        border: 1px solid #e7dcc7;
        border-radius: 100px 100px 20px 20px;
        overflow: hidden;
        background: #fff;
        transition: var(--transition-smooth);
        height: 100%;
        position: relative;
        cursor: pointer;
    }
    
    .category-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 0;
        background: linear-gradient(180deg, transparent, rgba(179, 146, 86, 0.05));
        transition: height 0.4s ease;
    }
    
    .category-card:hover::after {
        height: 100%;
    }
    
    .category-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(179, 146, 86, 0.12);
        border-color: var(--demanto-gold);
    }
    
    .category-card-img {
        height: 200px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #faf8f3 0%, #fff 100%);
    }
    
    .category-card-img img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    
    .category-card:hover .category-card-img img {
        transform: scale(1.05);
    }
    
    .category-card-body {
        text-align: center;
        padding: 15px;
        position: relative;
        z-index: 1;
    }
    
    .category-icon {
        color: var(--demanto-gold);
        font-size: 16px;
        margin-bottom: 8px;
        transition: transform 0.3s ease;
        display: inline-block;
    }
    
    .category-card:hover .category-icon {
        transform: rotate(180deg);
    }
    
    .category-card-body h5 {
        font-family: 'Roboto', sans-serif;
        font-size: 14px;
        color: #222;
        margin-bottom: 4px;
        font-weight: 500;
    }
    
    .category-card-body span {
        font-size: 8px;
        letter-spacing: 1.5px;
        color: var(--demanto-gold);
        font-weight: 500;
    }

    /* Empty State - Minimized */
    .empty-state {
        text-align: center;
        padding: 40px 20px;
        background: #fff;
        border-radius: 20px;
        border: 1px solid var(--luxury-border);
    }

    .empty-state i {
        font-size: 40px;
        color: var(--demanto-gold);
        margin-bottom: 15px;
        opacity: 0.5;
    }

    .empty-state h5 {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        color: var(--demanto-dark);
        margin-bottom: 8px;
    }

    .empty-state p {
        font-size: 12px;
        color: var(--demanto-muted);
    }

    /* Decorative Divider */
    .decorative-divider {
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
        margin: 15px 0 5px;
    }

    .divider-icon {
        color: var(--demanto-gold);
        font-size: 10px;
        opacity: 0.5;
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
    
    .category-card {
        animation: fadeInUp 0.5s ease-out;
        animation-fill-mode: backwards;
    }

    /* Responsive */
    @media (max-width: 1200px) {
        .luxury-heading { font-size: 20px !important; }
        .category-card-img { height: 180px; padding: 18px; }
    }
    
    @media (max-width: 991px) {
        .category-card-img { height: 160px; padding: 15px; }
        .category-card-body h5 { font-size: 13px; }
    }
    
    @media (max-width: 768px) {
        .all-categories { padding: 20px 0 30px 0; }
        .luxury-heading { font-size: 18px !important; }
        .category-card-img { height: 150px; padding: 15px; }
        .category-card-body { padding: 12px; }
        .category-card-body h5 { font-size: 12px; }
        .category-icon { font-size: 14px; }
        .category-card-body span { font-size: 7px; letter-spacing: 1px; }
        .decorative-divider { margin: 10px 0 5px; gap: 10px; }
        .divider-icon { font-size: 8px; }
    }
    
    @media (max-width: 576px) {
        .category-card-img { height: 120px; padding: 12px; }
        .category-card-body h5 { font-size: 11px; }
        .empty-state { padding: 30px 15px; }
        .empty-state i { font-size: 32px; }
        .empty-state h5 { font-size: 16px; }
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
</style>

<!-- Dynamic Breadcrumb -->
@include('layouts.inc.frontend.breadcrumb', [
    'breadcrumbs' => [
        [
            'title' => 'Categories',
            'url' => '#'
        ]
    ]
])

<!-- Categories Section -->
<div class="all-categories">
    <div class="container">
        <div class="luxury-section-title">
            <span class="luxury-sub">Curated Vault</span>
            <h2 class="luxury-heading mt-1">Our Collections</h2>
            <p class="text-muted mt-1" style="font-size: 11px; max-width: 600px; margin: 0 auto;">Discover our meticulously curated categories, each telling a unique story of timeless elegance</p>
        </div>

        <div class="row justify-content-center g-2">
            @forelse($categories as $index => $categoryItem)
            <div class="col-6 col-md-4 col-lg-3 mb-2" style="animation-delay: {{ $index * 0.05 }}s">
                <a href="{{ url('/collections/'.$categoryItem->slug) }}" class="text-decoration-none">
                    <div class="category-card">
                        <div class="category-card-img">
                            <img src="{{ asset($categoryItem->image) }}" alt="{{ $categoryItem->name }}" loading="lazy">
                        </div>
                        <div class="category-card-body">
                            <div class="category-icon">✧</div>
                            <h5>{{ $categoryItem->name }}</h5>
                            <span>Explore Collection →</span>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-12">
                <div class="empty-state">
                    <i class="fa-regular fa-gem"></i>
                    <h5>No Categories Available</h5>
                    <p>New collections are being curated just for you. Please check back soon.</p>
                    <a href="{{ url('/') }}" class="btn-demanto" style="margin-top: 15px; display: inline-block;">Return Home</a>
                </div>
            </div>
            @endforelse
        </div>

        @if($categories->count() > 0)
        <div class="row mt-2">
            <div class="col-12 text-center">
                <div class="decorative-divider">
                    <span class="divider-icon">✧</span>
                    <span class="divider-icon">♦</span>
                    <span class="divider-icon">✧</span>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Lazy loading for images
    const images = document.querySelectorAll('.category-card-img img');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.classList.add('loaded');
                }
                observer.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
    
    // Add fade-in animation to sections as they appear
    const sections = document.querySelectorAll('.all-categories');
    const sectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });
    
    sections.forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(20px)';
        section.style.transition = 'all 0.5s ease-out';
        sectionObserver.observe(section);
    });
});
</script>

<style>
/* Additional utility classes */
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
    box-shadow: 0 5px 15px rgba(179, 146, 86, 0.2);
}

.text-muted {
    color: var(--demanto-muted) !important;
}
</style>
@endsection