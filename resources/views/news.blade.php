@extends('layouts.base')

@section('content')
    <div class="content content-news">
        <div class="grid-cell grid-cell-no-1"></div>
        <div class="grid-cell grid-cell-no-2">
            <div class="logo">
                <img src="/images/logo.png" alt="">
            </div>
        </div>
        <div class="grid-cell grid-cell-no-3">
            <div class="news-item news-item-lg" data-image="/images/news-item-1.png">
                <a href="{{ route('newsDetail', 1) }}">
                    <span>
                        惠而浦中国携手安徽绿地，打造品质生活新标杆
                        <pre>time: 2016-06-27</pre>
                    </span>
                </a>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-4"></div>
        <div class="grid-cell grid-cell-no-5"></div>
        <div class="grid-cell grid-cell-no-6">
            <a href="{{ route('home') }}" class="nav-close"></a>
        </div>
        <div class="grid-cell grid-cell-no-7">
        </div>
        <div class="grid-cell grid-cell-no-8">
            <div class="title">
                <span class="main-title">NEWS CENTER</span>
                <span class="sub-title">新闻中心</span>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-9"></div>
        <div class="grid-cell grid-cell-no-10"></div>
        <div class="grid-cell grid-cell-no-11">
            <div class="news-item" data-image="/images/news-item-2.png">
                <a href="{{ route('newsDetail', 1) }}">
                    <span>
                        惠而浦中国携手安徽绿地
                    </span>
                </a>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-12">
            <a href="{{ route('news') }}" class="nav-page-prev"></a>
        </div>
        <div class="grid-cell grid-cell-no-13">
            <div class="news-item news-item-lg" data-image="/images/news-item-3.png">
                <a href="{{ route('newsDetail', 1) }}">
                    <span>
                        惠而浦 “厨电创想人”将亮相AWE，智能厨房大势所趋
                        <pre>time: 2016-06-27</pre>
                    </span>
                </a>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-14"></div>
        <div class="grid-cell grid-cell-no-15"></div>
        <div class="grid-cell grid-cell-no-16">
            <div class="news-item" data-image="/images/news-item-4.png">
                <a href="{{ route('newsDetail', 1) }}">
                    <span>
                        惠而浦中国携手安徽绿地
                    </span>
                </a>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-17">
            <a href="{{ route('news') }}" class="nav-page-next"></a>
        </div>
        <div class="grid-cell grid-cell-no-18"></div>
        <div class="grid-cell grid-cell-no-19"></div>
        <div class="grid-cell grid-cell-no-20"></div>
        <div class="grid-cell grid-cell-no-21">
            <div class="news-item" data-image="/images/news-item-5.png">
                <a href="{{ route('newsDetail', 1) }}">
                    <span>
                        惠而浦中国携手安徽绿地
                    </span>
                </a>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-22"></div>
    </div>
@endsection