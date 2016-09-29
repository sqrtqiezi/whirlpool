@extends('layouts.base')

@section('content')
    <div class="content content-news-detail">
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
        <div class="grid-cell grid-cell-no-3">
            <div class="news-detail bounceInLeft animated">
                <div class="news-detail-heading">
                    <h1 class="news-detail-title">
                        {{ $life->title }}
                    </h1>
                    <span>time: {{ $life->created_at }}</span>
                </div>
                <div class="news-detail-body">
                    <div class="scrollbar-macosx">
                        <div>{!! $life->content !!}</div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts/mobile_footer')
        <div class="grid-cell grid-cell-no-4 only-1desktop">
            <a data-pjax href="{{ route('life') }}" class="nav-close"></a>
        </div>
        <div class="grid-cell grid-cell-no-5 only-desktop">
            <div class="title">
                <span class="main-title">whirlpool
life</span>
                <span class="sub-title">“会”生活</span>
            </div>
        </div>
    </div>
@endsection
