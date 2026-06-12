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

        .product-area {
            background: linear-gradient(135deg, #FDFBF7 0%, #fff 100%);
            position: relative;
            padding: 20px 0 40px 0;
        }

        .product-area::before {
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

        /* Shopping Cart */
        .shopping-cart-content {
            background: #fff;
            border-radius: 20px;
            border: 1px solid var(--luxury-border);
            padding: 20px;
        }

        .title {
           font-family: 'Roboto', sans-serif;
            font-size: 22px;
            font-weight: 500;
            color: var(--demanto-dark);
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--demanto-gold);
            display: inline-block;
        }

        .shopping-cart-item {
            padding: 15px 0;
            border-bottom: 1px solid var(--luxury-border);
            transition: var(--transition-smooth);
        }

        .shopping-cart-item:hover {
            background: rgba(179, 146, 86, 0.02);
        }

        .product-thumb {
            background: linear-gradient(135deg, #faf8f3 0%, #fff 100%);
            border-radius: 12px;
            padding: 8px;
            text-align: center;
        }

        .product-thumb img {
            width: 100%;
            object-fit: contain;
            transition: transform 0.3s ease;
        }

        .product-thumb:hover img {
            transform: scale(1.05);
        }

        .product-content .title {
       font-family: 'Roboto', sans-serif;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 5px;
            border: none;
            padding: 0;
        }

        .product-content .title a {
            color: var(--demanto-dark);
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .product-content .title a:hover {
            color: var(--demanto-gold);
        }

        .product-price {
            color: var(--demanto-gold);
            font-size: 13px;
            font-weight: 600;
        }

        /* Quantity Box */
        .quantity__box {
            display: flex;
            align-items: center;
            gap: 3px;
            background: #f8f6f0;
            border-radius: 20px;
            padding: 2px;
            width: fit-content;
        }

        .quantity__value {
            width: 28px;
            height: 28px;
            border: none;
            background: #fff;
            border-radius: 50%;
            cursor: pointer;
            transition: var(--transition-smooth);
            font-size: 14px;
            font-weight: 600;
            color: var(--demanto-dark);
        }

        .quantity__value:hover {
            background: var(--demanto-gold);
            color: #fff;
        }

        .quantity__number {
            width: 40px;
            text-align: center;
            border: none;
            background: transparent;
            font-weight: 600;
            font-size: 13px;
            color: var(--demanto-dark);
        }

        .quantity__number:focus {
            outline: none;
        }

        /* Product Close Button */
        .product-close a {
            color: #999;
            transition: var(--transition-smooth);
            font-size: 16px;
        }

        .product-close a:hover {
            color: #e74c3c;
        }

        /* Button Styles */
        .btn-primary {
            background: linear-gradient(135deg, var(--demanto-gold) 0%, #9a7b45 100%);
            color: #fff;
            font-size: 9px;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 8px 20px;
            border: none;
            border-radius: 20px;
            transition: var(--transition-smooth);
            display: inline-block;
            text-decoration: none;
            margin-top: 15px;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(179, 146, 86, 0.3);
            color: #fff;
        }

        /* Cart Summary */
        .shopping-cart-summary {
            background: #fff;
            border-radius: 20px;
            border: 1px solid var(--luxury-border);
            padding: 20px;
            position: sticky;
            top: 100px;
        }

        .cart-detailed-totals {
            margin-bottom: 15px;
        }

        .card-block-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
        }

        .card-block-item .label {
            color: var(--demanto-muted);
            font-size: 12px;
        }

        .card-block-item .value {
            color: var(--demanto-dark);
            font-weight: 600;
            font-size: 14px;
        }

        .separator {
            height: 1px;
            background: var(--luxury-border);
            margin: 10px 0;
        }

        .btn-checkout {
            background: linear-gradient(135deg, var(--demanto-gold) 0%, #9a7b45 100%);
            color: #fff;
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            transition: var(--transition-smooth);
            display: block;
            text-align: center;
            text-decoration: none;
            width: 100%;
        }

        .btn-checkout:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(179, 146, 86, 0.3);
            color: #fff;
        }

        /* Empty Cart */
        .empty-cart {
            text-align: center;
            padding: 40px 20px;
        }

        .empty-cart i {
            font-size: 48px;
            color: var(--demanto-gold);
            opacity: 0.3;
            margin-bottom: 15px;
        }

        .empty-cart p {
            font-size: 13px;
            color: var(--demanto-muted);
            margin-bottom: 15px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .shopping-cart-content,
            .shopping-cart-summary {
                padding: 15px;
            }
            .title {
                font-size: 20px;
            }
            .product-thumb img {
                width: 60px;
                height: 60px;
            }
        }
    </style>

    <section class="product-area">
        <div class="container">
            <div class="shopping-cart-wrap">
                <div class="row g-3">
                    <div class="col-lg-8">
                        <div class="shopping-cart-content">
                            <h4 class="title">Shopping Cart</h4>

                            @if(count($items) > 0)
                                @foreach($items as $item)
                                    <div class="shopping-cart-item" wire:key="cart-item-{{ $item['id'] }}">
                                        <div class="row align-items-center">
                                            <div class="col-4 col-md-3">
                                                <div class="product-thumb">
                                                    <a href="{{ url('collections/'.$item['category_slug'].'/'.$item['slug']) }}">
                                                        @if($item['image'])
                                                            <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}">
                                                        @else
                                                            <img src="{{ asset('assets/img/no-image.png') }}" alt="no-image">
                                                        @endif
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-8 col-md-4">
                                                <div class="product-content">
                                                    <h5 class="title"><a href="{{ url('collections/'.$item['category_slug'].'/'.$item['slug']) }}">{{ $item['name'] }}</a></h5>
                                                    <h6 class="product-price">${{ number_format($item['price'], 2) }}</h6>
                                                </div>
                                            </div>
                                            <div class="col-12 offset-4 offset-md-0 col-md-5 mt-2 mt-md-0">
                                                <div class="product-info">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-6 col-xs-6">
                                                            <div class="product-quick-qty">
                                                                <div class="quantity__box">
                                                                    <button type="button" class="quantity__value decrease" wire:click="updateQuantity({{ $item['product_id'] }}, 'decrease')" wire:loading.attr="disabled">−</button>
                                                                    <label>
                                                                        <input type="number" class="quantity__number" value="{{ $item['quantity'] }}" readonly />
                                                                    </label>
                                                                    <button type="button" class="quantity__value increase" wire:click="updateQuantity({{ $item['product_id'] }}, 'increase')" wire:loading.attr="disabled">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-xs-2">
                                                            <h6 class="product-price mb-0">${{ number_format($item['price'] * $item['quantity'], 2) }}</h6>
                                                        </div>
                                                        <div class="col-md-2 col-xs-2 text-end">
                                                            <div class="product-close">
                                                                <a href="#" wire:click="removeItem({{ $item['product_id'] }})" wire:loading.attr="disabled">
                                                                    <i class="fa fa-trash-o"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                
                                <a class="btn-primary" href="{{ url('collections') }}">
                                    <i class="fa fa-arrow-left"></i> Continue Shopping
                                </a>
                            @else
                                <div class="empty-cart">
                                    <i class="fa fa-shopping-cart"></i>
                                    <p>Your cart is empty</p>
                                    <a class="btn-primary" href="{{ url('collections') }}">Start Shopping</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    @if(count($items) > 0)
                    <div class="col-lg-4">
                        <div class="shopping-cart-summary">
                            <h4 class="title mb-2" style="font-size: 18px;">Order Summary</h4>
                            <div class="cart-detailed-totals">
                                <div class="card-block-item">
                                    <span class="label">{{ collect($items)->sum('quantity') }} items</span>
                                    <span class="value">${{ number_format($total, 2) }}</span>
                                </div>
                                <div class="separator"></div>
                                <div class="card-block-item">
                                    <span class="label">Shipping</span>
                                    <span class="value text-success">Free</span>
                                </div>
                                <div class="separator"></div>
                                <div class="card-block-item fw-bold">
                                    <span class="label">Total</span>
                                    <span class="value" style="color: var(--demanto-gold); font-size: 18px;">${{ number_format($total, 2) }}</span>
                                </div>
                            </div>
                            
                            @if($total > 0)
                                <div class="checkout-shopping">
                                    <a class="btn-checkout" href="{{ url('checkout') }}">Proceed to Checkout →</a>
                                </div>
                            @endif
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>