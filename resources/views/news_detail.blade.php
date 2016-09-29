@extends('layouts.base')

@section('content')
    <div class="content content-news-detail">
        @include('layouts/mobile_top')
        <div class="mobile-detail only-mobile">
            <section class="title">
                <span class="main-title">NEWS CENTER</span>
                <span class="sub-title">新闻中心</span>
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
                        {{ $news->title }}
                    </h1>
                    <span>time: {{ $news->created_at }}</span>
                </div>
                <div class="news-detail-body">
                    <div class="scrollbar-macosx">
                        <div>{!! $news->content !!}</div>

                    </div>
                </div>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-4 only-desktop">
            <a data-pjax href="{{ route('news') }}" class="nav-close"></a>
        </div>
        <div class="grid-cell grid-cell-no-5 only-desktop">
            <div class="title">
                <span class="main-title">NEWS CENTER</span>
                <span class="sub-title">新闻中心</span>
            </div>
        </div>
        @include('layouts/mobile_footer')
    </div>
@endsection
