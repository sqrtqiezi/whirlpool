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
            @if($item = $livesList[0])
                <a data-pjax href="{{ route('lifeDetail', $item->id) }}" class="life-item fadeIn animated"
                   data-title="{{ $item->title }}">
                    <img src="{{ $item->thumbnail }}" alt="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            @endif
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
            @if($item = $livesList[1])
                <a data-pjax href="{{ route('lifeDetail', $item->id) }}" class="life-item fadeIn animated"
                   data-title="{{ $item->title }}">
                    <img src="{{ $item->thumbnail }}" alt="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-9 only-desktop"></div>
        <div class="grid-cell grid-cell-no-10 only-desktop"></div>
        <div class="grid-cell grid-cell-no-11 only-desktop">
            @if($livesList->currentPage() > 1)
                <a data-pjax href="{{ $livesList->previousPageUrl() }}" class="nav-page-prev"></a>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-12 only-desktop"></div>
        <div class="grid-cell grid-cell-no-13 only-desktop"></div>
        <div class="grid-cell grid-cell-no-14">
            @if($item = $livesList[2])
                <a data-pjax href="{{ route('lifeDetail', $item->id) }}" class="life-item fadeIn animated"
                   data-title="{{ $item->title }}">
                    <img src="{{ $item->thumbnail }}" alt="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-15 only-desktop">
            @if($livesList->hasMorePages())
                <a data-pjax href="{{ $livesList->nextPageUrl() }}" class="nav-page-next"></a>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-16 only-desktop"></div>
        <div class="grid-cell grid-cell-no-17 only-desktop"></div>
        <div class="grid-cell grid-cell-no-18 only-desktop">
            @if($item = $livesList[3])
                <a data-pjax href="{{ route('lifeDetail', $item->id) }}" class="life-item fadeIn animated"
                   data-title="{{ $item->title }}">
                    <img src="{{ $item->thumbnail }}" alt="">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </a>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-19 only-desktop"></div>
        <div class="grid-cell grid-cell-no-20 only-desktop"></div>
        @include('layouts/mobile_footer')
    </div>
@endsection