@extends('layouts.base')

@section('content')
    <div class="content content-home">
        <section class="grid-cell mobile-header">
            <a href="javascript:;" id="responsive-menu-button">
                <i class="fa fa-bars"></i>
            </a>
            <div class="logo">
                <img src="/images/logo.png" alt="">
            </div>
        </section>
        <section class="grid-cell only-desktop">
            <div class="widget-navbar">
                <div data-slider="2" class="widget-nav"></div>
                <div data-slider="1" class="widget-nav"></div>
                <div data-slider="0" class="widget-nav active"></div>
            </div>
        </section>
        <section class="grid-cell">
            <div class="title is-main-page">
                <span class="main-title">100 Years Heritage<br/> Taste The World</span>
                <span class="sub-title">百年品质‧烹饪全球美食</span>
            </div>
            <div class="widget">
                <div class="news-slider fadeIn animated">
                    <ul>
                        <li>
                            <div class="widget-heading clearfix">
                                <div class="widget-title">
                                    NEWS
                                    <a data-pjax href="{{ route('news') }}" class="news-more">more</a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <ul class="news-list">
                                    @foreach($newsList as $news)
                                    <li class="news-item">
                                        <a data-pjax href="{{ route('newsDetail', $news->id) }}">{{ $news->title }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div id="news-item-test">测</div>
                            </div>
                        </li>
                        @foreach($stickNews as $news)
                        <li>
                            <a data-pjax class="news-image-link" href="{{ route('newsDetail', $news->id) }}">
                                <div data-image="{{ $news->thumbnail }}" class="news-image"></div>
                                <span>{{ $news->title }}</span>
                            </a>
                        </li>
                        @endforeach
                        {{--<li>--}}
                            {{--<a data-pjax class="news-image-link" href="{{ route('newsDetail', 1) }}">--}}
                                {{--<div data-image="/images/news-item-2.png" class="news-image"></div>--}}
                                {{--<span>惠而浦中国携手安徽绿地 打造品质生活新标杆</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
        </section>
        <section class="grid-cell only-mobile">
            <div class="widget-navbar">
                <div data-slider="2" class="widget-nav"></div>
                <div data-slider="1" class="widget-nav"></div>
                <div data-slider="0" class="widget-nav active"></div>
            </div>
        </section>

        @include('layouts/mobile_footer')
    </div>
@endsection