@extends('layouts.base')

@section('content')
    <div class="content content-category">
        @include('layouts/mobile_top')
        <div class="mobile-detail only-mobile">
            <section class="title">
                <span class="main-title">PRODUCT LIST</span>
                <span class="sub-title">吸油烟机</span>
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
                <span class="sub-title">吸油烟机</span>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-8">
            <a data-pjax href="{{ route('product', 1) }}" class="product-item fadeIn animated animated-1" data-product-name="AKF808">
                <img src="/images/product-akf808.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-9">
            <a data-pjax href="{{ route('product', 1) }}" class="product-item fadeIn animated animated-2" data-product-name="AKF808">
                <img src="/images/product-akf808.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-10">
            <a data-pjax href="{{ route('product', 1) }}" class="product-item fadeIn animated animated-3" data-product-name="AKF808">
                <img src="/images/product-akf808.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-11">
            <a data-pjax href="{{ route('category', 1) }}" class="nav-page-prev"></a>
        </div>
        <div class="grid-cell grid-cell-no-12">
            <a data-pjax href="{{ route('product', 1) }}" class="product-item fadeIn animated animated-4" data-product-name="AKF808">
                <img src="/images/product-akf808.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-13">
            <a data-pjax href="{{ route('product', 1) }}" class="product-item fadeIn animated animated-5" data-product-name="AKF808">
                <img src="/images/product-akf808.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-14">
            <a data-pjax href="{{ route('product', 1) }}" class="product-item fadeIn animated animated-6" data-product-name="AKF808">
                <img src="/images/product-akf808.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-15">
            <a data-pjax href="{{ route('category', 2) }}" class="nav-page-next"></a>
        </div>
        @include('layouts/mobile_footer')
    </div>
@endsection