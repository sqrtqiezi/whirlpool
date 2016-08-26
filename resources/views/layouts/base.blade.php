<!DOCTYPE html>
<html>
<head>
    <title>惠而浦中国 | 官方网站—世界万千家庭信任的家用电器品牌</title>
    <meta name="keywords" content="进口家电,家用电器,惠而浦洗衣机,惠而浦冰箱,惠而浦微波炉"/>
    <meta name="description" content="进口家电,家用电器,惠而浦洗衣机,惠而浦冰箱,惠而浦微波炉"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="/images/icon.ico" rel="shortcut icon"/>
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/jquery.sidr.dark.min.css">
    <link rel="stylesheet" href="/css/unslider.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div id="big-video-wrap">
    <video autoplay muted loop id="bgvid">
        <source src="http://obz9qz3z4.bkt.clouddn.com/whirlpool3" type="video/mp4">
    </video>
</div>
<div class="main wrapper clearfix">
    <div id="video-raster"></div>
    <article>
        @yield('content')
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
    <div class="footer clearfix">
        <nav class="nav-list pull-left">
            <ul class="nav-top-list">
                <li>
                    <a href="{{ route('about') }}" data-hover="关于我们">
                        <span>关于我们</span>
                    </a>
                    <ul class="nav-sub-list flipInX animated">
                        <li><a href="{{ route('about') }}#brand-info"><span>品牌简介</span></a></li>
                        <li><a href="{{ route('about') }}#brand-course"><span>发展历程</span></a></li>
                        <li><a href="{{ route('about') }}#brand-worth"><span>品牌价值观</span></a></li>
                        <li><a href="{{ route('about') }}#brand-honour"><span>企业荣誉</span></a></li>
                        <li><a href="{{ route('about') }}#brand-responsibility"><span>社会责任</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('products') }}" data-hover="厨房电器"><span>厨房电器</span></a>
                    <ul class="nav-sub-list flipInX animated">
                        <li><a href="{{ route('category', 1) }}"><span>吸油烟机</span></a></li>
                        <li><a href="{{ route('category', 1) }}"><span>灶具</span></a></li>
                        <li><a href="{{ route('category', 1) }}"><span>微波炉</span></a></li>
                        <li><a href="{{ route('category', 1) }}"><span>蒸箱</span></a></li>
                        <li><a href="{{ route('category', 1) }}"><span>消毒柜</span></a></li>
                        <li><a href="{{ route('category', 1) }}"><span>烤箱</span></a></li>
                        <li><a href="{{ route('category', 1) }}"><span>洗碗机</span></a></li>
                        <li><a href="{{ route('category', 1) }}"><span>嵌入式冰箱</span></a></li>
                        <li><a href="{{ route('category', 1) }}"><span>酒柜</span></a></li>
                        <li><a href="{{ route('category', 1) }}"><span>暖碟机</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('news') }}" data-hover="新闻中心"><span>新闻中心</span></a>
                    <ul class="nav-sub-list flipInX animated">
                        <li><a href="#"><span>企业内讯</span></a></li>
                        <li><a href="#"><span>媒体报道</span></a></li>
                        <li><a href="#"><span>促销活动</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-hover="工程案例"><span>工程案例</span></a>
                </li>
                <li>
                    <a href="#" data-hover="终端形象"><span>终端形象</span></a>
                </li>
                <li>
                    <a href="#" data-hover="“会”生活"><span>“会”生活</span></a>
                    <ul class="nav-sub-list flipInX animated">
                        <li><a href="#"><span>厨电创想人</span></a></li>
                        <li><a href="#"><span>"懂"厨电</span></a></li>
                        <li><a href="#"><span>"品"美味</span></a></li>
                        <li><a href="#"><span>"绘"厨房</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-hover="联系我们"><span>联系我们</span></a>
                </li>
            </ul>
        </nav>
        <div class="footer-info pull-right">
            <div class="content-info pull-left">
                <span class="company-name">惠而浦（中国）股份有限公司</span>
                <span class="company-right">沪ICP备13004331号 © 2016 Whirlpool .All Right Reserved</span>
            </div>
            <div class="contact-info pull-right">
                <div class="contact-weibo"></div>
                <div class="contact-wechat"></div>
                <div class="contact-email"></div>
            </div>
        </div>
    </div>
</div>

<div id="navigation" style="display: none">
    <nav class="nav">
        <ul>
            <li><a href="{{ route('home') }}">首页</a></li>
            <li><a href="{{ route('about') }}">关于我们</a></li>
            <li><a href="{{ route('products') }}">厨房电器</a></li>
            <li><a href="{{ route('news') }}">新闻中心</a></li>
            <li><a href="#">工程案例</a></li>
            <li><a href="#">终端形象</a></li>
            <li><a href="#">“会” 生活</a></li>
            <li><a href="#">联系我们</a></li>
        </ul>
    </nav>
</div>

</body>
<script src="/js/app.js"></script>
@yield('custom-js')
</html>