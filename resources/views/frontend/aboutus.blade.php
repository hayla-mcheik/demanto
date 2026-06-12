@extends('layouts.app')
@section('title','About Us')

@section('content')


  <!-- Dynamic Breadcrumb -->
@include('layouts.inc.frontend.breadcrumb', [
    'breadcrumbs' => [
        [
            'title' => 'About Us',
            'url' => '#'
        ]
    ]
]);

<!-- About Editorial Section -->
<section class="about-editorial-section">
    <div class="container-fluid">
        <div class="row align-items-center g-4">
            <!-- Images -->
            <div class="col-lg-6">
                <div class="row g-2">
                    <div class="col-7">
                        <div class="position-relative overflow-hidden" style="border-radius: 15px;">
                            <img src="{{ ($aboutData && $aboutData->imgone) ? asset('storage/'.$aboutData->imgone) : asset('assets/img/craft-1.jpg') }}"
                                 class="w-100" style="height: 400px; object-fit: cover; transition: transform 0.5s ease;"
                                 alt="Luxury Craftsmanship" loading="lazy">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="mb-2 overflow-hidden" style="border-radius: 15px;">
                            <img src="{{ ($aboutData && $aboutData->imgtwo) ? asset('storage/'.$aboutData->imgtwo) : asset('assets/img/craft-2.jpg') }}"
                                 class="w-100" style="height: 195px; object-fit: cover; transition: transform 0.5s ease;"
                                 alt="Fine Jewelry" loading="lazy">
                        </div>
                        <div class="overflow-hidden" style="border-radius: 15px;">
                            <img src="{{ ($aboutData && $aboutData->imgthree) ? asset('storage/'.$aboutData->imgthree) : asset('assets/img/craft-3.jpg') }}"
                                 class="w-100" style="height: 195px; object-fit: cover; transition: transform 0.5s ease;"
                                 alt="Expert Craftsmanship" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-6 ps-lg-4">
                <h2 class="about-title">
                    {{ $aboutData->title ?? 'Crafting Timeless Elegance Since 2005' }}
                </h2>
                <div class="about-description">
                    {!! nl2br(e($aboutData->description ?? 'With more than 20 years of expertise, DEMANTO is a leading name in fine jewelry manufacturing.')) !!}
                </div>
                
                <hr class="my-3" style="border-color: var(--luxury-border);">
                
                <div class="row text-center g-3">
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

             
            </div>
        </div>
    </div>
</section>

<script setup>
defineProps({ about: Object });
</script>

<style >

    /* About Section */
    .about-editorial-section {
        background: linear-gradient(135deg, #FBF9F4 0%, #fff 100%);
        position: relative;
        overflow: hidden;
        padding: 10px 0;
    }
    
    .about-editorial-section::before {
        content: '♦';
        position: absolute;
        bottom: 20px;
        right: 20px;
        font-size: 60px;
        color: var(--demanto-gold);
        opacity: 0.04;
        font-family: serif;
    }
    
    .about-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 32px;
        line-height: 1.2;
        color: var(--demanto-dark);
        text-transform: uppercase;
        letter-spacing: 1.5px;
        position: relative;
        display: inline-block;
        margin-bottom: 15px;
    }
    
    .about-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 50px;
        height: 2px;
        background: linear-gradient(90deg, var(--demanto-gold), transparent);
    }
    
    .about-description {
        color: #666;
        font-size: 13px;
        line-height: 1.8;
        margin-top: 20px;
    }
    
    .metric-number {
        color: var(--demanto-gold);
        font-size: 28px;
        margin-bottom: 5px;
        font-weight: 600;
        font-family: 'Roboto', sans-serif;
    }
    
    .metric-item {
        text-align: center;
        transition: transform 0.3s ease;
    }
    
    .metric-item:hover {
        transform: translateY(-3px);
    }
    
    .metric-item i {
        font-size: 28px;
        color: var(--demanto-gold);
        transition: all 0.3s ease;
    }
    
    .metric-item:hover i {
        transform: scale(1.05);
    }
    
    .metric-label {
        font-size: 9px;
        letter-spacing: 1.5px;
        color: #333;
        text-transform: uppercase;
        line-height: 1.4;
        font-weight: 500;
        margin-top: 8px;
    }
</style>
  

@endsection