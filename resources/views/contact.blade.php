@extends('layouts.base')

@section('content')
    <div class="content content-contact">
        @include('layouts/mobile_top')
        <div class="mobile-detail only-mobile">
            <section class="title">
                <span class="main-title">Contact us</span>
                <span class="sub-title">联系我们</span>
            </section>
        </div>

        <div class="grid-cell grid-cell-no-1 only-desktop"></div>
        <div class="grid-cell grid-cell-no-2 only-desktop">
            <div class="logo">
                <img src="/images/logo.png" alt="">
            </div>
        </div>
        <div class="grid-cell grid-cell-no-3 only-desktop"></div>
        <div class="grid-cell grid-cell-no-4 only-desktop"></div>
        <div class="grid-cell grid-cell-no-5 only-desktop">
            <a data-pjax href="{{ route('home') }}" class="nav-close"></a>
        </div>
        <div class="grid-cell grid-cell-no-6 only-desktop"></div>
        <div class="grid-cell grid-cell-no-7 only-desktop">
            <div class="title">
                <span class="main-title">Contact us</span>
                <span class="sub-title">联系我们</span>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-8 only-desktop"></div>
        <div class="grid-cell grid-cell-no-9 only-desktop"></div>
        <div class="grid-cell grid-cell-no-10 only-desktop"></div>
        <div class="grid-cell grid-cell-no-11 only-desktop"></div>
        <div class="grid-cell grid-cell-no-12">
            <div class="contact-content">
                <section>
                    <i class="fa fa-phone"></i>
                    <span class="contact-type">咨询电话</span>
                    <span class="contact-info">0551-65335225</span>
                </section>
                <section>
                    <i class="fa fa-envelope"></i>
                    <span class="contact-type">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</span>
                    <span class="contact-info">whirlpool_ca@163.com</span>
                </section>
                <section>
                    <i class="fa fa-map-pin"></i>
                    <span class="contact-type">地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址</span>
                    <span class="contact-info">安徽省合肥市高新区科学大道96号惠而浦（中国）股份有限公司</span>
                </section>
                <section>
                    <i class="fa fa-users"></i>
                    <span class="contact-type">客服中心</span>
                    <span class="contact-info">9510569</span>
                </section>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-13 only-desktop"></div>
        <div class="grid-cell grid-cell-no-14 only-desktop"></div>
        <div class="grid-cell grid-cell-no-15 only-desktop"></div>
        <div class="grid-cell grid-cell-no-16 only-desktop"></div>
        <div class="grid-cell grid-cell-no-17 only-desktop"></div>
        <div class="grid-cell grid-cell-no-18 only-desktop"></div>
        <div class="grid-cell grid-cell-no-19 only-desktop"></div>
        <div class="grid-cell grid-cell-no-20 only-desktop"></div>
        @include('layouts/mobile_footer')
    </div>
@endsection