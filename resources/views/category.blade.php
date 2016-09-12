@extends('layouts.base')

@section('content')
    <div class="content content-category">
        @include('layouts/mobile_top')
        <div class="mobile-detail only-mobile">
            <section class="title">
                <span class="main-title">PRODUCT LIST</span>
                <span class="sub-title">{{ $productType->name }}</span>
            </section>
        </div>
        <div class="grid-cell grid-cell-no-1"></div>
        <div class="grid-cell grid-cell-no-2">
            <div class="logo">
                <img src="/images/logo.png" alt="">
            </div>
        </div>
        <div class="grid-cell grid-cell-no-3"></div>
        <div class="grid-cell grid-cell-no-4"></div>
        <div class="grid-cell grid-cell-no-5">
            <a data-pjax data-close="true" href="{{ route('products') }}" class="nav-close"></a>
        </div>
        <div class="grid-cell grid-cell-no-6"></div>
        <div class="grid-cell grid-cell-no-7">
            <div class="title">
                <span class="main-title">PRODUCT LIST</span>
                <span class="sub-title">{{ $productType->name }}</span>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-8">
            @if($item = $products[0])
                <a data-pjax href="{{ route('product', $item->id) }}" class="product-item fadeIn animated animated-1"
                   data-product-name="{{ $item->main_heading }}">
                    <img src="/{{ $item->spec_img_one }}" alt="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-9">
            @if($item = $products[1])
                <a data-pjax href="{{ route('product', $item->id) }}" class="product-item fadeIn animated animated-1"
                   data-product-name="{{ $item->main_heading }}">
                    <img src="/{{ $item->spec_img_one }}" alt="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-10">
            @if($item = $products[2])
                <a data-pjax href="{{ route('product', $item->id) }}" class="product-item fadeIn animated animated-1"
                   data-product-name="{{ $item->main_heading }}">
                    <img src="/{{ $item->spec_img_one }}" alt="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-11">
            @if($products->currentPage() > 1)
                <a data-pjax href="{{ $products->previousPageUrl() }}" class="nav-page-prev"></a>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-12">
            @if($item = $products[3])
                <a data-pjax href="{{ route('product', $item->id) }}" class="product-item fadeIn animated animated-1"
                   data-product-name="{{ $item->main_heading }}">
                    <img src="/{{ $item->spec_img_one }}" alt="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-13">
            @if($item = $products[4])
                <a data-pjax href="{{ route('product', $item->id) }}" class="product-item fadeIn animated animated-1"
                   data-product-name="{{ $item->main_heading }}">
                    <img src="/{{ $item->spec_img_one }}" alt="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-14">
            @if($item = $products[5])
                <a data-pjax href="{{ route('product', $item->id) }}" class="product-item fadeIn animated animated-1"
                   data-product-name="{{ $item->main_heading }}">
                    <img src="/{{ $item->spec_img_one }}" alt="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-15">
            @if($products->hasMorePages())
                <a data-pjax href="{{ $products->nextPageUrl() }}" class="nav-page-next"></a>
            @endif
        </div>
        @include('layouts/mobile_footer')
    </div>
@endsection