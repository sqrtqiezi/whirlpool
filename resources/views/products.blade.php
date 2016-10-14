@extends('layouts.base')

@section('content')
    <div class="content content-products">
        @include('layouts/mobile_top')
        <div class="mobile-detail only-mobile">
            <section class="title">
                <span class="main-title">PRODUCT LIST</span>
                <span class="sub-title">厨房家电</span>
            </section>
        </div>
        <section class="grid-cell grid-cell-no-1">
        </section>
        <section class="grid-cell grid-cell-no-2">
            <div class="logo">
                <img src="/images/logo.png" alt="">
            </div>
        </section>
        <section class="grid-cell grid-cell-no-3">
            <a data-pjax href="{{ route('category', 1) }}" class="product-item fadeIn animated animated-1" data-product-name="吸油烟机">
                <img src="/images/product-xyyj.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-4">
            <a data-pjax href="{{ route('category', 2) }}" class="product-item fadeIn animated animated-2" data-product-name="灶具">
                <img src="/images/product-zj.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-5">
            <a data-pjax data-close="true" href="{{ route('home') }}" class="nav-close"></a>
        </section>
        <section class="grid-cell grid-cell-no-6"></section>
        <section class="grid-cell grid-cell-no-7">
            <div class="title">
                <span class="main-title">PRODUCT LIST</span>
                <span class="sub-title">厨房电器</span>
            </div>
        </section>
        <section class="grid-cell grid-cell-no-8">
        </section>
        <section class="grid-cell grid-cell-no-9">
            <a data-pjax href="{{ route('category', 3) }}" class="product-item fadeIn animated animated-3" data-product-name="微波炉">
                <img src="/images/product-wbl.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-10">
            <a data-pjax href="{{ route('category', 4) }}" class="product-item fadeIn animated animated-4" data-product-name="蒸箱">
                <img src="/images/product-zx.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-11">
        </section>
        <section class="grid-cell grid-cell-no-12">
            <a data-pjax href="{{ route('category', 5) }}" class="product-item fadeIn animated animated-5" data-product-name="消毒柜">
                <img src="/images/product-xdg.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-13">
            <a data-pjax href="{{ route('category', 6) }}" class="product-item fadeIn animated animated-6" data-product-name="烤箱">
                <img src="/images/product-kx.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-14">
            <a data-pjax href="{{ route('category', 7) }}" class="product-item fadeIn animated animated-9" data-product-name="洗碗机">
                <img src="/images/product-xwj.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-15">
            <a data-pjax href="{{ route('category', 8) }}" class="product-item fadeIn animated animated-10" data-product-name="嵌入式冰箱">
                <img src="/images/product-qrsbx.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-16">
            <a data-pjax href="{{ route('category', 9) }}" class="product-item fadeIn animated animated-7" data-product-name="酒柜">
                <img src="/images/product-jg.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-17">
            <a data-pjax href="{{ route('category', 10) }}" class="product-item fadeIn animated animated-8" data-product-name="暖碟机">
                <img src="/images/product-ndj.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-18">
            <a data-pjax href="{{ route('category', 11) }}" class="product-item fadeIn animated animated-11" data-product-name="咖啡机">
                <img src="/images/product-kfj.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-19">
            <a data-pjax href="{{ route('category', 12) }}" class="product-item fadeIn animated animated-12" data-product-name="垃圾处理器">
                <img src="/images/product-ljclq.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </section>
        <section class="grid-cell grid-cell-no-20"></section>
        @include('layouts/mobile_footer')
    </div>
@endsection