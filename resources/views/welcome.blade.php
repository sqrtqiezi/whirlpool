@extends('layouts.base')

@section('content')
    <div class="content content-home">
        <section class="grid-cell">
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
                                    <a href="{{ route('news') }}" class="news-more">more</a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <ul class="news-list">
                                    <li class="news-item">
                                        <a href="{{ route('newsDetail', 1) }}">领导赴一线慰问员工</a>
                                    </li>
                                    <li class="news-item">
                                        <a href="{{ route('newsDetail', 1) }}">公司冠名书法报海选活动 文化营销助理品牌</a>
                                    </li>
                                    <li class="news-item">
                                        <a href="{{ route('newsDetail', 1) }}">中共惠而浦(中国)公司第二次代表大会召开</a>
                                    </li>
                                    <li class="news-item">
                                        <a href="{{ route('newsDetail', 1) }}">中共惠而浦(中国)公司第二次代表大会召开</a>
                                    </li>
                                </ul>
                                <div id="news-item-test">测</div>
                            </div>
                        </li>
                        <li>
                            <a class="news-image-link" href="{{ route('newsDetail', 1) }}">
                                <div data-image="/images/news-item-1.png" class="news-image"></div>
                                <span>惠而浦中国携手安徽绿地 打造品质生活新标杆</span>
                            </a>
                        </li>
                        <li>
                            <a class="news-image-link" href="{{ route('newsDetail', 1) }}">
                                <div data-image="/images/news-item-2.png" class="news-image"></div>
                                <span>惠而浦中国携手安徽绿地 打造品质生活新标杆</span>
                            </a>
                        </li>
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
    </div>
@endsection