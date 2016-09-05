<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>惠而浦中国 | 官方网站—世界万千家庭信任的家用电器品牌</title>
    <meta charset="utf-8" />
    <meta name="keywords" content="进口家电,家用电器,惠而浦洗衣机,惠而浦冰箱,惠而浦微波炉"/>
    <meta name="description" content="进口家电,家用电器,惠而浦洗衣机,惠而浦冰箱,惠而浦微波炉"/>
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
        <div id="pjax-container" >
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
    <div class="footer clearfix">
        <nav class="nav-list pull-left">
            <ul class="nav-top-list">
                <li>
                    <a data-pjax href="javascript:;" class="js-top-nav" data-sub-nav="about-sub-nav" data-hover="关于我们">
                        <span>关于我们</span>
                    </a>
                    <ul id="about-sub-nav" class="nav-sub-list bounceInDown animated">
                        <li><a data-pjax href="{{ route('about') }}#brand-info"><span>品牌简介</span></a></li>
                        <li><a data-pjax href="{{ route('about') }}#brand-course"><span>发展历程</span></a></li>
                        <li><a data-pjax href="{{ route('about') }}#brand-worth"><span>品牌价值观</span></a></li>
                        <li><a data-pjax href="{{ route('about') }}#brand-honour"><span>企业荣誉</span></a></li>
                        <li><a data-pjax href="{{ route('about') }}#brand-responsibility"><span>社会责任</span></a></li>
                    </ul>
                </li>
                <li>
                    <a data-pjax href="javascript:;" class="js-top-nav" data-sub-nav="product-sub-nav" data-hover="厨房电器"><span>厨房电器</span></a>
                    <ul id="product-sub-nav" class="nav-sub-list bounceInDown animated">
                        <li><a data-pjax href="{{ route('products') }}"><span>全部</span></a></li>
                        <li><a data-pjax href="{{ route('category', 1) }}"><span>吸油烟机</span></a></li>
                        <li><a data-pjax href="{{ route('category', 1) }}"><span>灶具</span></a></li>
                        <li><a data-pjax href="{{ route('category', 1) }}"><span>微波炉</span></a></li>
                        <li><a data-pjax href="{{ route('category', 1) }}"><span>蒸箱</span></a></li>
                        <li><a data-pjax href="{{ route('category', 1) }}"><span>消毒柜</span></a></li>
                        <li><a data-pjax href="{{ route('category', 1) }}"><span>烤箱</span></a></li>
                        <li><a data-pjax href="{{ route('category', 1) }}"><span>洗碗机</span></a></li>
                        <li><a data-pjax href="{{ route('category', 1) }}"><span>嵌入式冰箱</span></a></li>
                        <li><a data-pjax href="{{ route('category', 1) }}"><span>酒柜</span></a></li>
                        <li><a data-pjax href="{{ route('category', 1) }}"><span>暖碟机</span></a></li>
                    </ul>
                </li>
                <li>
                    <a data-pjax href="javascript:;" class="js-top-nav" data-sub-nav="news-sub-nav" data-hover="新闻中心"><span>新闻中心</span></a>
                    <ul id="news-sub-nav" class="nav-sub-list bounceInDown animated">
                        <li><a data-pjax href="{{ route('news') }}"><span>全部</span></a></li>
                        <li><a data-pjax href="{{ route('news') }}"><span>企业内讯</span></a></li>
                        <li><a data-pjax href="{{ route('news') }}"><span>媒体报道</span></a></li>
                        <li><a data-pjax href="{{ route('news') }}"><span>促销活动</span></a></li>
                    </ul>
                </li>
                <li>
                    <a data-pjax href="{{ route('projects') }}" data-hover="工程案例"><span>工程案例</span></a>
                </li>
                <li>
                    <a data-pjax href="{{ route('stores') }}" data-hover="终端形象"><span>终端形象</span></a>
                </li>
                <li>
                    <a data-pjax href="javascript:;" class="js-top-nav" data-sub-nav="life-sub-nav" data-hover="“会”生活"><span>“会”生活</span></a>
                    <ul id="life-sub-nav" class="nav-sub-list bounceInDown animated">
                        <li><a data-pjax href="{{ route('life') }}"><span>全部</span></a></li>
                        <li><a data-pjax href="{{ route('life') }}"><span>厨电创想人</span></a></li>
                        <li><a data-pjax href="{{ route('life') }}"><span>"懂"厨电</span></a></li>
                        <li><a data-pjax href="{{ route('life') }}"><span>"品"美味</span></a></li>
                        <li><a data-pjax href="{{ route('life') }}"><span>"绘"厨房</span></a></li>
                    </ul>
                </li>
                <li>
                    <a data-pjax href="{{ route('contact') }}" data-hover="联系我们"><span>联系我们</span></a>
                </li>
            </ul>
        </nav>
        <div class="footer-info pull-right">
            <div class="content-info pull-left">
                <span class="company-name">惠而浦（中国）股份有限公司</span>
                <span class="company-right">沪ICP备13004331号 © 2016 Whirlpool .All Right Reserved</span>
            </div>
            <div class="contact-info pull-right">
                <a data-pjax href="http://weibo.com/u/5889505040" class="contact-weibo"></a>
                <a data-pjax href="javascript:;" class="contact-wechat"></a>
                <a data-pjax href="javascript:;" class="contact-email"></a>
                <span class="design-info">Design by wisnovo</span>
            </div>
        </div>
    </div>
</div>

<div id="mobile-navigation" >
    <nav class="nav">
        <ul>
            <li><a href="{{ route('home') }}">首页</a></li>
            <li><a href="{{ route('about') }}">关于我们</a></li>
            <li><a href="{{ route('products') }}">厨房电器</a></li>
            <li><a href="{{ route('news') }}">新闻中心</a></li>
            <li><a href="{{ route('projects') }}">工程案例</a></li>
            <li><a href="{{ route('stores') }}">终端形象</a></li>
            <li><a href='{{ route('life') }}'>“会” 生活</a></li>
            <li><a href="{{ route('contact') }}">联系我们</a></li>
        </ul>
    </nav>
    <div id="responsive-menu-close" class="nav-close"></div>
</div>

</body>
<script src="https://dn-bts.qbox.me/sdk/bugtags-1.0.3.js"></script>
<script>
    // VERSION_NAME 替换为项目的版本，VERSION_CODE 替换为项目的子版本
    new Bugtags('bc4e9de0b3d5aa9fabb1cd0d59e35600','VERSION_NAME','VERSION_CODE');
</script>
<script src="/js/app.js"></script>
<script src="/js/progress.js"></script>
@yield('custom-js')
</html>