@extends('layouts.base')

@section('content')
    <div class="content">
        <section class="grid-cell">
            <a href="#sidr-main" id="responsive-menu-button">
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
                <span class="main-title">100 Years Heritage Taste The World</span>
                <span class="sub-title">百年品质 ‧ 烹饪全球美食</span>
            </div>
            <div class="widget">
                <div class="widget-heading clearfix">
                    <div class="widget-title">NEWS</div>
                    <div class="widget-link">MORE</div>
                </div>
                <div class="widget-body">
                    <div class="news-slider">
                        <ul>
                            <li>
                                <ul class="news-list">
                                    <li class="news-item">
                                        领导赴一线慰问员工
                                    </li>
                                    <li class="news-item">
                                        公司冠名书法报海选活动 文化营销助理品牌
                                    </li>
                                    <li class="news-item">
                                        中共惠而浦(中国)公司第二次代表大会召开
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul class="news-list">
                                    <li class="news-item">
                                        领导赴一线慰问员工
                                    </li>
                                    <li class="news-item">
                                        公司冠名书法报海选活动 文化营销助理品牌
                                    </li>
                                    <li class="news-item">
                                        中共惠而浦(中国)公司第二次代表大会召开
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul class="news-list">
                                    <li class="news-item">
                                        领导赴一线慰问员工
                                    </li>
                                    <li class="news-item">
                                        公司冠名书法报海选活动 文化营销助理品牌
                                    </li>
                                    <li class="news-item">
                                        中共惠而浦(中国)公司第二次代表大会召开
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
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