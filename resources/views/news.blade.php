@extends('layouts.base')

@section('content')
    <div class="content content-news">
        @include('layouts/mobile_top')

        <div class="grid-row">
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
                <a data-pjax href="{{ route('newsDetail', 1) }}">
                    <div class="news-item news-item-lg fadeIn animated animated-1"
                         data-image="/images/news-item-1.png"></div>
                    <span>惠而浦中国携手安徽绿地，打造品质生活新标杆
                    <pre>time: 2016-06-27</pre>
                </span>
                </a>
            </div>
            <div class="grid-cell grid-cell-no-4 only-desktop">
                <a data-pjax href="{{ route('home') }}" class="nav-close"></a>
            </div>
        </div>
        <div class="grid-row">
            <div class="grid-cell only-desktop"></div>
            <div class="grid-cell only-desktop">
                <div class="title">
                    <span class="main-title">NEWS CENTER</span>
                    <span class="sub-title">新闻中心</span>
                </div>
            </div>
            <div class="grid-cell only-desktop"></div>
            <div class="grid-cell only-desktop"></div>
            <div class="grid-cell">
                <a data-pjax href="{{ route('newsDetail', 1) }}">
                    <div class="news-item fadeIn animated" data-image="/images/news-item-2.png"></div>
                    <span>惠而浦中国携手安徽绿地</span>
                </a>
            </div>
        </div>
        <div class="grid-row">
            <div class="grid-cell only-desktop">
                <a data-pjax href="{{ route('news') }}" class="nav-page-prev"></a>
            </div>
            <div class="grid-cell grid-cell-no-8">
                <a data-pjax href="{{ route('newsDetail', 1) }}">
                    <div class="news-item news-item-lg fadeIn animated" data-image="/images/news-item-3.png"></div>
                    <span>
                        惠而浦 “厨电创想人”将亮相AWE，智能厨房大势所趋
                        <pre>time: 2016-06-27</pre>
                    </span>
                </a>
            </div>
            <div class="grid-cell only-desktop">
                <a data-pjax href="{{ route('newsDetail', 1) }}">
                    <div class="news-item fadeIn animated" data-image="/images/news-item-4.png"></div>
                    <span>惠而浦中国携手安徽绿地</span>
                </a>
            </div>
            <div class="grid-cell only-desktop">
                <a data-pjax href="{{ route('news') }}" class="nav-page-next"></a>
            </div>
        </div>
        <div class="grid-row">
            <div class="grid-cell only-desktop"></div>
            <div class="grid-cell only-desktop"></div>
            <div class="grid-cell only-desktop"></div>
            <div class="grid-cell">
                <a data-pjax href="{{ route('newsDetail', 1) }}">
                    <div class="news-item fadeIn animated" data-image="/images/news-item-5.png"></div>
                    <span>惠而浦中国携手安徽绿地</span>
                </a>
            </div>
            <div class="grid-cell only-desktop"></div>
        </div>
        @include('layouts/mobile_footer')
    </div>
@endsection