<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title> {!! $siteConfig->title or '官方网站' !!}</title>
    <meta charset="utf-8"/>
    <meta name="keywords" content="{!! $siteConfig->keyword or '关键字' !!}"/>
    <meta name="description" content="{!! $siteConfig->description or '网站描述' !!}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="/images/icon.ico" rel="shortcut icon"/>
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/unslider.css">
    <link rel="stylesheet" href="/css/progressjs.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div id="bg-video-wrap"></div>
<div class="main wrapper clearfix">
    <div id="video-raster"></div>
    <article>
        <div id="pjax-container">
            @yield('content')
        </div>
        <div class="grid">
            <section class="grid-cell grid-cell-no-1"></section>
            <section class="grid-cell grid-cell-no-2"></section>
            <section class="grid-cell grid-cell-no-3"></section>
            <section class="grid-cell grid-cell-no-4"></section>
            <section class="grid-cell grid-cell-no-5"></section>
            <section class="grid-cell grid-cell-no-6"></section>
            <section class="grid-cell grid-cell-no-7"></section>
            <section class="grid-cell grid-cell-no-8"></section>
            <section class="grid-cell grid-cell-no-9"></section>
            <section class="grid-cell grid-cell-no-10"></section>
            <section class="grid-cell grid-cell-no-11"></section>
            <section class="grid-cell grid-cell-no-12"></section>
            <section class="grid-cell grid-cell-no-13"></section>
            <section class="grid-cell grid-cell-no-14"></section>
            <section class="grid-cell grid-cell-no-15"></section>
            <section class="grid-cell grid-cell-no-16"></section>
            <section class="grid-cell grid-cell-no-17"></section>
            <section class="grid-cell grid-cell-no-18"></section>
            <section class="grid-cell grid-cell-no-19"></section>
            <section class="grid-cell grid-cell-no-20"></section>
        </div>
    </article>
    <div class="footer clearfix only-desktop">
        <nav class="nav-list pull-left">
            <ul class="nav-top-list">
                @foreach($siteConfig->categories as $key => $name)
                    @include('layouts.menu.' . $key)
                @endforeach
            </ul>
        </nav>
        <div class="footer-info pull-right">
            <div class="contact-info pull-right">
                <a data-pjax href="http://weibo.com/u/5874901998" class="contact-weibo"></a>
                <a data-pjax href="javascript:;" class="contact-wechat"></a>
                <a data-pjax href="javascript:;" class="contact-email"></a>
                <span class="design-info only-desktop">Design by wisnovo</span>
            </div>
            <div class="content-info pull-left">
                <span class="company-name">{!! $siteConfig->brand or '某公司' !!}</span>
                <span class="company-right">{!! $siteConfig->icp or '备案号' !!}
                    © 2016 Whirlpool .All Right Reserved</span>
            </div>
        </div>
    </div>
</div>

<div id="mobile-navigation">
    <div class="mobile-top">
        <i class="fa fa-close btn-menu js-btn-menu-close animated bounceInDown"></i>
        <i class="fa fa-chevron-left btn-menu js-btn-menu-back animated bounceInDown" style="display: none"></i>
        <div class="logo">
            <img src="/images/logo.png" alt="">
        </div>
    </div>
    <nav class="nav animated bounceInDown">
        <ul>
            <li>
                <i class="fa fa-home link-icon" aria-hidden="true"></i>
                <a href="{{ route('home') }}">首页</a>

                @foreach($siteConfig->categories as $key => $name)
                    @include('layouts.menu-mobile.' . $key)
                @endforeach
            </li>
        </ul>
    </nav>
    <div>
        {{--"会生活"的子菜单--}}
        <ul id="life-sub-nav" class="nav-sub-list life-list animated bounceInRight">
            <li>
                <i class="fa fa-home link-icon" aria-hidden="true"></i>
                <a href="{{ route('life') }}"><span>全部</span></a>
            </li>
            <li>
                <i class="fa fa-user link-icon" aria-hidden="true"></i>
                <a href="{{ route('life') }}?type={{ \Whirlpool\Life\Entities\Life::TYPE_PEOPLE }}"><span>厨电创想人</span></a>
            </li>
            <li>
                <i class="fa fa-tachometer link-icon" aria-hidden="true"></i>
                <a href="{{ route('life') }}?type={{ \Whirlpool\Life\Entities\Life::TYPE_APPLIANCE }}"><span>"懂"厨电</span></a>
            </li>
            <li>
                <i class="fa fa-spoon link-icon" aria-hidden="true"></i>
                <a href="{{ route('life') }}?type={{ \Whirlpool\Life\Entities\Life::TYPE_DELICIOUS }}"><span>"品"美味</span></a>
            </li>
            <li>
                <i class="fa fa-pencil-square-o link-icon" aria-hidden="true"></i>
                <a href="{{ route('life') }}?type={{ \Whirlpool\Life\Entities\Life::TYPE_KITCHEN }}"><span>"绘"厨房</span></a>
            </li>
        </ul>

        {{--厨房电器的子菜单--}}
        <ul id="product-sub-nav" class="nav-sub-list nav-list-col-2 product-list animated bounceInRight">
            <li>
                <i class="fa fa-beer link-icon" aria-hidden="true"></i>
                <a href="{{ route('products') }}"><span>全部</span></a>
            </li>
            @foreach($productTypes->reverse() as $type)
                <li>
                    <span class="link-icon sub-link-icon category-{{ $type->id }}"></span>
                    <a href="{{ route('category', $type->id) }}"><span>{{ $type->name }}</span></a>
                </li>
            @endforeach
        </ul>

        {{--新闻中心的子菜单--}}
        <ul id="news-sub-nav" class="nav-sub-list news-list animated bounceInRight">
            <li>
                <i class="fa fa-newspaper-o link-icon" aria-hidden="true"></i>
                <a href="{{ route('news') }}"><span>全部</span></a>
            </li>
            <li>
                <i class="fa fa-users link-icon" aria-hidden="true"></i>
                <a href="{{ route('news') }}?type={{ \Whirlpool\News\Entities\News::TYPE_COMPANY }}"><span>企业内讯</span></a>
            </li>
            <li>
                <i class="fa fa-camera link-icon" aria-hidden="true"></i>
                <a href="{{ route('news') }}?type={{ \Whirlpool\News\Entities\News::TYPE_MEDIA }}"><span>媒体报道</span></a>
            </li>
            <li>
                <i class="fa fa-bullhorn link-icon" aria-hidden="true"></i>
                <a href="{{ route('news') }}?type={{ \Whirlpool\News\Entities\News::TYPE_PROMOTION }}"><span>促销活动</span></a>
            </li>
        </ul>
    </div>
</div>

</body>
<script src="/js/app.js"></script>
<script src="/js/progress.js"></script>
@yield('custom-js')
</html>