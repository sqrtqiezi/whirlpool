@extends('layouts.base')

@section('content')
    <div class="content content-category">
        <div class="grid-cell grid-cell-no-1"></div>
        <div class="grid-cell grid-cell-no-2">
            <div class="logo">
                <img src="/images/logo.png" alt="">
            </div>
        </div>
        <div class="grid-cell grid-cell-no-3"></div>
        <div class="grid-cell grid-cell-no-4"></div>
        <div class="grid-cell grid-cell-no-5">
            <a href="{{ route('products') }}" class="nav-close"></a>
        </div>
        <div class="grid-cell grid-cell-no-6"></div>
        <div class="grid-cell grid-cell-no-7">
            <div class="title">
                <span class="sub-title">吸油烟机</span>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-8">
            <a href="{{ route('product', 1) }}" class="product-item flipInY animated" data-product-name="AKF808">
                <img src="/images/product-akf808.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-9">
            <a href="{{ route('product', 1) }}" class="product-item flipInY animated" data-product-name="AKF808">
                <img src="/images/product-akf808.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-10">
            <a href="{{ route('product', 1) }}" class="product-item flipInY animated" data-product-name="AKF808">
                <img src="/images/product-akf808.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-11">
            <a href="{{ route('category', 1) }}" class="nav-page-prev"></a>
        </div>
        <div class="grid-cell grid-cell-no-12">
            <a href="{{ route('product', 1) }}" class="product-item flipInY animated" data-product-name="AKF808">
                <img src="/images/product-akf808.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-13">
            <a href="{{ route('product', 1) }}" class="product-item flipInY animated" data-product-name="AKF808">
                <img src="/images/product-akf808.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-14">
            <a href="{{ route('product', 1) }}" class="product-item flipInY animated" data-product-name="AKF808">
                <img src="/images/product-akf808.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-15">
            <a href="{{ route('category', 2) }}" class="nav-page-next"></a>
        </div>
    </div>
@endsection