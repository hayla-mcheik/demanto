{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    {{-- Homepage --}}
    <url>
        <loc>{{ url('/') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

    {{-- Main pages --}}
    <url>
        <loc>{{ url('/collections') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>

    <url>
        <loc>{{ url('/categories') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/new-arrivals') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/featured-products') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/aboutus') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>{{ url('/blogs') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>

    <url>
        <loc>{{ url('/contactus') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>


    {{-- Categories --}}
    @foreach($categories as $category)
        <url>
            <loc>{{ url('/collections/' . $category->slug) }}</loc>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach


    {{-- Products --}}
    @foreach($products as $product)
        @if($product->slug)
            <url>
                <loc>{{ url('/collections/' . $product->category->slug . '/' . $product->slug) }}</loc>
                <lastmod>{{ optional($product->updated_at)->toAtomString() }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.9</priority>
            </url>
        @endif
    @endforeach


    {{-- Blogs --}}
    @foreach($blogs as $blog)
        <url>
            <loc>{{ url('/blog/details/' . $blog->id) }}</loc>
            <lastmod>{{ optional($blog->updated_at)->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.7</priority>
        </url>
    @endforeach

</urlset>