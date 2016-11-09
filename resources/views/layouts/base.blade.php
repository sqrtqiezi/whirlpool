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
                <li>
                    <div class="top-nav">
                        <a data-pjax href="{{ route('about') }}" class="js-top-nav" data-sub-nav="about-sub-nav">
                            <span data-hover="关于我们">关于我们</span>
                        </a>
                        <div class="nav-sub-list">
                            <ul class="menuIn animated">
                                <li><a data-pjax href="{{ route('about') }}#brand-info"
                                       class="nav-sub-link nav-sub-text">品牌简介</a></li>
                                <li><a data-pjax href="{{ route('about') }}#brand-course"
                                       class="nav-sub-link nav-sub-text">发展历程</a></li>
                                <li><a data-pjax href="{{ route('about') }}#brand-worth"
                                       class="nav-sub-link nav-sub-text">品牌价值观</a></li>
                                <li><a data-pjax href="{{ route('about') }}#brand-honour"
                                       class="nav-sub-link nav-sub-text">企业荣誉</a></li>
                                <li><a data-pjax href="{{ route('about') }}#brand-responsibility"
                                       class="nav-sub-link nav-sub-text">社会责任</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="top-nav">
                        <a data-pjax href="{{ route('products') }}" class="js-top-nav" data-sub-nav="product-sub-nav">
                            <span data-hover="厨房电器">厨房电器</span>
                        </a>
                        <div class="nav-sub-list">
                            <ul class="menuIn animated animated-slowly">
                                @foreach($productTypes as $type)
                                    <li><a data-pjax
                                           href="{{ route('category', $type->id) }}"
                                           class="nav-sub-link nav-sub-image">
                                            {!! $type->name !!}
                                        </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="top-nav">
                        <a data-pjax href="{{ route('news') }}" class="js-top-nav" data-sub-nav="news-sub-nav">
                            <span data-hover="新闻中心">新闻中心</span>
                        </a>
                        <div class="nav-sub-list">
                            <ul class="menuIn animated">
                                <li><a data-pjax
                                       href="{{ route('news') }}?type={{ \Whirlpool\News\Entities\News::TYPE_COMPANY }}"
                                       class="nav-sub-link nav-sub-text">企业内讯</a>
                                </li>
                                <li><a data-pjax
                                       href="{{ route('news') }}?type={{ \Whirlpool\News\Entities\News::TYPE_MEDIA }}"
                                       class="nav-sub-link nav-sub-text">媒体报道</a>
                                </li>
                                <li><a data-pjax
                                       href="{{ route('news') }}?type={{ \Whirlpool\News\Entities\News::TYPE_PROMOTION }}"
                                       class="nav-sub-link nav-sub-text">促销活动</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="top-nav">
                        <a data-pjax href="{{ route('projects') }}">
                            <span data-hover="工程案例">工程案例</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="top-nav">
                        <a data-pjax href="{{ route('stores') }}">
                            <span data-hover="终端形象">终端形象</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="top-nav">
                        <a data-pjax href="{{ route('life') }}" class="js-top-nav" data-sub-nav="life-sub-nav">
                            <span data-hover="“会”生活">“会”生活</span>
                        </a>
                        <div class="nav-sub-list">
                            <ul class="menuIn animated">
                                <li><a data-pjax
                                       href="{{ route('life') }}?type={{ \Whirlpool\Life\Entities\Life::TYPE_PEOPLE }}"
                                       class="nav-sub-link nav-sub-text">厨电创想人</a>
                                </li>
                                <li><a data-pjax
                                       href="{{ route('life') }}?type={{ \Whirlpool\Life\Entities\Life::TYPE_APPLIANCE }}"
                                       class="nav-sub-link nav-sub-text">“懂”厨电</a>
                                </li>
                                <li><a data-pjax
                                       href="{{ route('life') }}?type={{ \Whirlpool\Life\Entities\Life::TYPE_DELICIOUS }}"
                                       class="nav-sub-link nav-sub-text">“品”美味</a>
                                </li>
                                <li><a data-pjax
                                       href="{{ route('life') }}?type={{ \Whirlpool\Life\Entities\Life::TYPE_KITCHEN }}"
                                       class="nav-sub-link nav-sub-text">“绘”厨房</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="top-nav">
                        <a data-pjax href="{{ route('contact') }}">
                            <span data-hover="联系我们">联系我们</span>
                        </a>
                    </div>
                </li>
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
            </li>
            <li>
                <i class="fa fa-question link-icon" aria-hidden="true"></i>
                <a href="{{ route('about') }}">关于我们</a>
            </li>
            <li class="has-expand" data-sub-name="product-list">
                <i class="fa fa-beer link-icon" aria-hidden="true"></i>
                <a href="javascript:;">厨房电器</a>
                <i class="fa fa-chevron-right link-expand"></i>
            </li>
            <li class="has-expand" data-sub-name="news-list">
                <i class="fa fa-newspaper-o link-icon" aria-hidden="true"></i>
                <a href="javascript:;">新闻中心</a>
                <i class="fa fa-chevron-right link-expand"></i>
            </li>
            <li>
                <i class="fa fa-truck link-icon" aria-hidden="true"></i>
                <a href="{{ route('projects') }}">工程案例</a>
            </li>
            <li>
                <i class="fa fa-stack-overflow link-icon" aria-hidden="true"></i>
                <a href="{{ route('stores') }}">终端形象</a>
            </li>
            <li class="has-expand" data-sub-name="life-list">
                <i class="fa fa-home link-icon" aria-hidden="true"></i>
                <a href='javascript:;'>“会” 生活</a>
                <i class="fa fa-chevron-right link-expand"></i>
            </li>
            <li>
                <i class="fa fa-phone link-icon" aria-hidden="true"></i>
                <a href="{{ route('contact') }}">联系我们</a>
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