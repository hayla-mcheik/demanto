<div>
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

        /* Product Single Area */
        .product-single-area {
            background: linear-gradient(135deg, #FDFBF7 0%, #fff 100%);
            position: relative;
            overflow: hidden;
            padding: 20px 0 60px 0;
        }

        .product-single-area::before {
            content: '♦';
            position: absolute;
            top: 50px;
            right: 50px;
            font-size: 120px;
            color: var(--demanto-gold);
            opacity: 0.03;
            font-family: serif;
            pointer-events: none;
        }

        .product-single-area::after {
            content: '✧';
            position: absolute;
            bottom: 50px;
            left: 50px;
            font-size: 100px;
            color: var(--demanto-gold);
            opacity: 0.03;
            font-family: serif;
            pointer-events: none;
        }

        /* Product Thumbnail */
        .product-thumb {
            background: linear-gradient(135deg, #faf8f3 0%, #fff 100%);
            border-radius: 25px;
            padding: 30px;
            border: 1px solid var(--luxury-border);
        }

        .swiper-container {
            overflow: hidden;
        }

        .single-product-thumb-content {
            margin-bottom: 20px;
            border-radius: 20px;
            overflow: hidden;
        }

        .zoom-hover {
            position: relative;
            display: block;
            cursor: crosshair;
            border-radius: 15px;
            overflow: hidden;
        }

        .zoom-hover img {
            width: 100%;
            height: 500px;
            object-fit: contain;
            transition: transform 0.5s ease;
        }

        .product-flag-new {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--demanto-gold);
            color: #fff;
            padding: 5px 15px;
            border-radius: 25px;
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            z-index: 10;
            box-shadow: 0 2px 8px rgba(179, 146, 86, 0.3);
        }

        /* Thumbnail Navigation */
        .single-product-nav-content {
            margin-top: 15px;
        }

        .thumb-img-wrapper {
            cursor: pointer;
            border: 2px solid transparent;
            border-radius: 12px;
            overflow: hidden;
            transition: var(--transition-smooth);
            background: #fff;
            padding: 10px;
        }

        .thumb-img-wrapper:hover,
        .swiper-slide-thumb-active .thumb-img-wrapper {
            border-color: var(--demanto-gold);
            box-shadow: 0 5px 15px rgba(179, 146, 86, 0.15);
        }

        .thumbnail-image {
            width: 100%;
            height: 100px;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .thumb-img-wrapper:hover .thumbnail-image {
            transform: scale(1.05);
        }

        /* Product Info */
        .product-single-info {
            padding-left: 20px;
        }

        .title {
     font-family: 'Roboto', sans-serif;
            font-size: 32px;
            font-weight: 500;
            color: var(--demanto-dark);
            margin-bottom: 15px;
            letter-spacing: 1px;
        }

        .prices {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--luxury-border);
        }

        .price {
            font-size: 28px;
            font-weight: 600;
            color: var(--demanto-gold);
            font-family: 'Roboto', sans-serif;
        }

        .old_price {
            font-size: 18px;
            color: #aaa;
            text-decoration: line-through;
            font-family: 'Roboto', sans-serif;
        }

        /* Stock Status */
        .stock-status {
            display: inline-block;
            margin-bottom: 20px;
        }

        .stock-badge {
            padding: 6px 18px;
            border-radius: 25px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-block;
        }

        .stock-badge.in-stock {
            background: var(--demanto-gold);
            color: #fff;
            box-shadow: 0 2px 8px rgba(179, 146, 86, 0.3);
        }

        .stock-badge.out-stock {
            background: #999;
            color: #fff;
        }

        /* Product Description */
        .product-description {
            margin: 20px 0;
        }

        .product-desc-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .product-desc-list li {
            color: var(--demanto-muted);
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 10px;
            position: relative;
            padding-left: 20px;
        }

        .product-desc-list li::before {
            content: '✧';
            position: absolute;
            left: 0;
            color: var(--demanto-gold);
            font-size: 10px;
        }

        /* Product Quick Action */
        .product-quick-action {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid var(--luxury-border);
        }

        .white-bg {
            margin-bottom: 15px;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .product-single-info {
                padding-left: 0;
                margin-top: 30px;
            }
            .title {
                font-size: 28px;
            }
            .price {
                font-size: 24px;
            }
            .zoom-hover img {
                height: 400px;
            }
            .thumbnail-image {
                height: 80px;
            }
        }

        @media (max-width: 768px) {
            .product-single-area {
                padding: 10px 0 40px 0;
            }
            .product-thumb {
                padding: 20px;
            }
            .title {
                font-size: 24px;
            }
            .price {
                font-size: 22px;
            }
            .old_price {
                font-size: 16px;
            }
            .zoom-hover img {
                height: 350px;
            }
            .thumbnail-image {
                height: 70px;
            }
            .product-desc-list li {
                font-size: 13px;
            }
        }

        @media (max-width: 576px) {
            .product-thumb {
                padding: 15px;
            }
            .zoom-hover img {
                height: 280px;
            }
            .thumbnail-image {
                height: 60px;
            }
            .title {
                font-size: 22px;
            }
            .price {
                font-size: 20px;
            }
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

        .product-single-item {
            animation: fadeInUp 0.6s ease-out;
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
                'title' => 'Product Details',
                'url' => '#'
            ]
        ]
    ])

    <!-- Product Single Area -->
    <section class="product-area product-single-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-single-item">
                        <div class="row g-4">
                            <!-- Product Images -->
                            <div class="col-md-6">
                                <div wire:ignore>
                                    @if($product->productImages && count($product->productImages) > 0)
                                    <div class="product-thumb">
                                        <!-- Main Image -->
                                        <div class="swiper-container single-product-thumb-content single-product-thumb-slider2">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide zoom zoom-hover">
                                                    <a class="lightbox-image" data-fancybox="gallery" href="{{ asset($product->productImages[0]->image) }}" id="main-image-link">
                                                        <img src="{{ asset($product->productImages[0]->image) }}" alt="Product Image" id="main-image">
                                               
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Thumbnail Navigation -->
                                        <div class="swiper-container single-product-nav-content single-product-nav-slider2">
                                            <div class="swiper-wrapper">
                                                @foreach($product->productImages as $index => $itemImg)
                                                    <div class="swiper-slide">
                                                        <div class="thumb-img-wrapper">
                                                            <img src="{{ asset($itemImg->image) }}" 
                                                                 class="thumbnail-image" 
                                                                 alt="Product Thumbnail" 
                                                                 data-index="{{ $index }}" 
                                                                 data-image="{{ asset($itemImg->image) }}">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>

                            <!-- Product Info -->
                            <div class="col-md-6">
                                <div class="product-single-info">
                                    <h1 class="title">{{ $product->name }}</h1>
                                    
                                    <div class="prices">
                                        @if($product->original_price > $product->selling_price)
                                            <span class="old_price">€{{ number_format($product->original_price, 2) }}</span>
                                        @endif
                                        <span class="price">€{{ number_format($product->selling_price, 2) }}</span>
                                    </div>

                                    <div class="stock-status">
                                        @if($product->quantity > 0)
                                            <span class="stock-badge in-stock mt-4">
                                                <i class="fa fa-check-circle"></i> In Stock
                                            </span>
                                        @else
                                            <span class="stock-badge out-stock">
                                                <i class="fa fa-times-circle"></i> Out of Stock
                                            </span>
                                        @endif
                                    </div>

                                    <div class="product-description">
                                        <ul class="product-desc-list">
                                            @if($product->small_description)
                                                <li>{{ $product->small_description }}</li>
                                            @endif
                                            @if($product->description)
                                                <li>{{ $product->description }}</li>
                                            @endif
                                        </ul>
                                    </div>

                                    <div class="product-quick-action">
                                        <div class="white-bg">                            
                                            <livewire:frontend.cart.add-to-cart :product="$product"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Function to reinitialize zoom
            function reinitializeZoom() {
                $('.zoom-hover').trigger('zoom.destroy');
                $('.zoom-hover').zoom({
                    url: $('#main-image-link').attr('href')
                });
            }

            // Initializing zoom for the first load
            reinitializeZoom();

            // Get all thumbnail images
            const thumbnails = document.querySelectorAll('.thumbnail-image');

            // Iterate over each thumbnail and add click event listener
            thumbnails.forEach(thumbnail => {
                thumbnail.addEventListener('click', function () {
                    // Get the main image and link elements
                    const mainImage = document.getElementById('main-image');
                    const mainImageLink = document.getElementById('main-image-link');

                    // Get the new image source from the clicked thumbnail
                    const newImageSrc = this.getAttribute('data-image');

                    // Update the main image and link
                    mainImage.src = newImageSrc;
                    mainImageLink.href = newImageSrc;

                    // Reinitialize or refresh the zoom functionality
                    reinitializeZoom();

                    // Update fancybox (lightbox) with the new image
                    $.fancybox.destroy();
                    $('[data-fancybox="gallery"]').fancybox();
                });
            });

            // Back button functionality
            const shopLink = document.getElementById('shop-link');
            if (shopLink) {
                shopLink.addEventListener('click', function(event) {
                    event.preventDefault();
                    history.back();
                });
            }
        });
    </script>
    @endpush
</div>