@extends('layouts.base')

@section('content')
    <div class="content content-life">
        <div class="grid-cell grid-cell-no-1"></div>
        <div class="grid-cell grid-cell-no-2">
            <div class="logo">
                <img src="/images/logo.png" alt="">
            </div>
        </div>
        <div class="grid-cell grid-cell-no-3"></div>
        <div class="grid-cell grid-cell-no-4">
            <a href="{{ route('lifeDetail', 1) }}" class="life-item" data-title="浓情布朗尼-爱的礼物">
                <img src="/images/life-item-1.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-5">
            <a href="{{ route('home') }}" class="nav-close"></a>
        </div>
        <div class="grid-cell grid-cell-no-6"></div>
        <div class="grid-cell grid-cell-no-7">
            <div class="title">
                <span class="main-title">whirlpool
life</span>
                <span class="sub-title">“会”生活</span>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-8">
            <a href="{{ route('lifeDetail', 1) }}" class="life-item" data-title="浓情布朗尼-爱的礼物">
                <img src="/images/life-item-2.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-9"></div>
        <div class="grid-cell grid-cell-no-10"></div>
        <div class="grid-cell grid-cell-no-11">
            <a href="{{ route('life') }}" class="nav-page-prev"></a>
        </div>
        <div class="grid-cell grid-cell-no-12"></div>
        <div class="grid-cell grid-cell-no-13"></div>
        <div class="grid-cell grid-cell-no-14">
            <a href="{{ route('lifeDetail', 1) }}" class="life-item" data-title="浓情布朗尼-爱的礼物">
                <img src="/images/life-item-3.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-15">
            <a href="{{ route('life') }}" class="nav-page-next"></a>
        </div>
        <div class="grid-cell grid-cell-no-16"></div>
        <div class="grid-cell grid-cell-no-17"></div>
        <div class="grid-cell grid-cell-no-18">
            <a href="{{ route('lifeDetail', 1) }}" class="life-item" data-title="浓情布朗尼-爱的礼物">
                <img src="/images/life-item-4.png" alt="">
                <i class="fa fa-search" aria-hidden="true"></i>
            </a>
        </div>
        <div class="grid-cell grid-cell-no-19"></div>
        <div class="grid-cell grid-cell-no-20"></div>
    </div>
@endsection