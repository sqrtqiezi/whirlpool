@extends('layouts.base')

@section('content')
    <div class="content content-product">
        <section class="grid-cell grid-cel-no-1">
            <a href="#sidr-main" id="responsive-menu-button">
                <i class="fa fa-bars"></i>
            </a>
            <div class="logo">
                <img src="/images/logo.png" alt="">
            </div>
        </section>

        <section class="grid-cell grid-cell-no-2">
            <a href="{{ route('category', 1) }}" class="product-item flipInY animated" data-product-name="吸油烟机">
                <img src="/images/product-xyyj.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-3">
            <a href="{{ route('category', 1) }}" class="product-item flipInY animated" data-product-name="灶具">
                <img src="/images/product-zj.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-4">
            <a href="{{ route('home') }}" class="nav-close"></a>
        </section>
        <section class="grid-cell grid-cell-no-5">
            <div class="title">
                <span class="main-title">PRODUCT LIST</span>
                <span class="sub-title">厨房电器</span>
            </div>
        </section>
        <section class="grid-cell grid-cell-no-6"></section>
        <section class="grid-cell grid-cell-no-7">
            <a href="{{ route('category', 1) }}" class="product-item flipInY animated" data-product-name="微波炉">
                <img src="/images/product-wbl.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-8">
            <a href="{{ route('category', 1) }}" class="product-item flipInY animated" data-product-name="蒸箱">
                <img src="/images/product-zx.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-9"></section>
        <section class="grid-cell grid-cell-no-10">
            <a href="{{ route('category', 1) }}" class="product-item flipInY animated" data-product-name="消毒柜">
                <img src="/images/product-xdg.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-11">
            <a href="{{ route('category', 1) }}" class="product-item flipInY animated" data-product-name="烤箱">
                <img src="/images/product-kx.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-12">
            <a href="{{ route('category', 1) }}" class="product-item flipInY animated" data-product-name="洗碗机">
                <img src="/images/product-xwj.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-13">
            <a href="{{ route('category', 1) }}" class="product-item flipInY animated" data-product-name="嵌入式冰箱">
                <img src="/images/product-qrsbx.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-14">
            <a href="{{ route('category', 1) }}" class="product-item flipInY animated" data-product-name="酒柜">
                <img src="/images/product-jg.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-15">
            <a href="{{ route('category', 1) }}" class="product-item flipInY animated" data-product-name="暖碟机">
                <img src="/images/product-ndj.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-16"></section>
    </div>
@endsection