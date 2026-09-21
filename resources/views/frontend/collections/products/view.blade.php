@extends('layouts.app')
@section('title', $product->name . ' | DEMANTO Jewelry')
{{ $product->meta_title }}
@endsection

@section('meta_keyword')
{{ $product->meta_keyword }}
@endsection

@section('meta_description')
<meta name="description"
      content="{{ Str::limit(strip_tags($product->description), 155) }}">
{{-- {{ $product->meta_description }} --}}
@endsection

@section('content')

<div>
    <livewire:frontend.product.view :category="$category" :product="$product" />
</div>

@endsection