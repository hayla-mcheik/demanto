<div>
<style>
   
</style>
 <section class="product-area">
    <div class="container-fluid pb-55">
        <div class="row">
            <div class="col-lg-2 order-1 order-lg-1">
                <div class="shop-sidebar-wrapper">
                    <div class="sidebar-item">
                        <h4 class="sidebar-title"><a href="{{ url('/collections') }}">All Categories</a></h4>
                        <div class="sidebar-body">
                            <div class="category-sub-menu">
                                <ul>
                                    @forelse($categories as $categoryItem)
                                        <li>
                                            <a href="{{ url('/collections/'.$categoryItem->slug) }}" 
                                               style="display: block; padding: 10px 0; border-bottom: 1px solid #eee;">
                                                {{ $categoryItem->name }}
                                            </a>
                                        </li>
                                    @empty
                                        <li>No Categories Available</li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            <div class="col-lg-10 order-0 order-lg-2">
                <div class="product-header-wrap">
                    <div class="row">
                        <div class="col-4 col-sm-4 col-md-6">
                            <ul class="nav product-tab-nav" id="pills-tab" role="tablist">
                                <li role="presentation">
                                    <a class="active" id="grid-tab" data-bs-toggle="pill" href="#grid" role="tab" aria-controls="grid" aria-selected="true"><i class="fa fa-th"></i></a>
                                </li>
                            </ul>
                            <div class="total-products">
                                <p class="hidden-sm-down">There are {{ $category->products_count }} products.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-body-wrap">
                    <div class="tab-content product-tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                        <div class="row g-4">

@forelse ($products as $product)

<div class="col-6 col-md-4 col-lg-3">
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

</div>

@empty

<div class="col-12 text-center py-5">
    <h5>No Products Available</h5>
</div>

@endforelse

</div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
</section>
      