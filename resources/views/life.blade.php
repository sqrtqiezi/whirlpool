@extends('layouts.base')

@section('content')
    <div class="content content-life">
        @include('layouts/mobile_top')
        <div class="mobile-detail only-mobile">
            <section class="title">
                <span class="main-title">whirlpool life</span>
                <span class="sub-title">“会”生活</span>
            </section>
        </div>

        <div class="grid-cell grid-cell-no-1 only-desktop"></div>
        <div class="grid-cell grid-cell-no-2 only-desktop">
            <div class="logo">
                <img src="/images/logo.png" alt="">
            </div>
        </div>
        <div class="grid-cell grid-cell-no-3 only-desktop"></div>
        <div class="grid-cell grid-cell-no-4">
            <a data-pjax href="{{ route('lifeDetail', 1) }}" class="life-item fadeIn animated" data-title="浓情布朗尼-爱的礼物">
                <img src="/images/life-item-1.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-5 only-desktop">
            <a data-pjax href="{{ route('home') }}" class="nav-close"></a>
        </div>
        <div class="grid-cell grid-cell-no-6 only-desktop"></div>
        <div class="grid-cell grid-cell-no-7 only-desktop">
            <div class="title">
                <span class="main-title">whirlpool
life</span>
                <span class="sub-title">“会”生活</span>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-8">
            <a data-pjax href="{{ route('lifeDetail', 1) }}" class="life-item fadeIn animated" data-title="浓情布朗尼-爱的礼物">
                <img src="/images/life-item-2.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-9 only-desktop"></div>
        <div class="grid-cell grid-cell-no-10 only-desktop"></div>
        <div class="grid-cell grid-cell-no-11 only-desktop">
            <a data-pjax href="{{ route('life') }}" class="nav-page-prev"></a>
        </div>
        <div class="grid-cell grid-cell-no-12 only-desktop"></div>
        <div class="grid-cell grid-cell-no-13 only-desktop"></div>
        <div class="grid-cell grid-cell-no-14">
            <a data-pjax href="{{ route('lifeDetail', 1) }}" class="life-item fadeIn animated" data-title="浓情布朗尼-爱的礼物">
                <img src="/images/life-item-3.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-15 only-desktop">
            <a data-pjax href="{{ route('life') }}" class="nav-page-next"></a>
        </div>
        <div class="grid-cell grid-cell-no-16 only-desktop"></div>
        <div class="grid-cell grid-cell-no-17 only-desktop"></div>
        <div class="grid-cell grid-cell-no-18 only-desktop">
            <a data-pjax href="{{ route('lifeDetail', 1) }}" class="life-item fadeIn animated" data-title="浓情布朗尼-爱的礼物">
                <img src="/images/life-item-4.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-19 only-desktop"></div>
        <div class="grid-cell grid-cell-no-20 only-desktop"></div>
    </div>
@endsection