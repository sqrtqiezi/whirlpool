@extends('layouts.base')

@section('content')
    <div class="content content-news">
        @include('layouts/mobile_top')

        <div class="grid-row">
            <div class="mobile-detail only-mobile">
                <section class="title">
                    <span class="main-title">NEWS CENTER</span>
                    <span class="sub-title">新闻中心</span>
                </section>
            </div>

            <div class="grid-cell grid-cell-no-1 only-desktop"></div>
            <div class="grid-cell grid-cell-no-2 only-desktop">
                <div class="logo">
                    <img src="/images/logo.png" alt="">
                </div>
            </div>
            <div class="grid-cell grid-cell-no-3">
                @if($item = $newsList[0])
                    <a data-pjax href="{{ route('newsDetail', $item->id) }}">
                        <div class="news-item news-item-lg fadeIn animated"
                             data-image="{{ $item->thumbnail }}">
                        </div>
                        <span>{{ $item->title }}
                            <pre>time: {{ $item->updated_at }}</pre>
                    </span>
                    </a>
                @endif
            </div>
            <div class="grid-cell grid-cell-no-4 only-desktop">
                <a data-pjax href="{{ route('home') }}" class="nav-close"></a>
            </div>
        </div>
        <div class="grid-row">
            <div class="grid-cell only-desktop"></div>
            <div class="grid-cell only-desktop">
                <div class="title">
                    <span class="main-title">NEWS CENTER</span>
                    <span class="sub-title">新闻中心</span>
                </div>
            </div>
            <div class="grid-cell only-desktop"></div>
            <div class="grid-cell only-desktop"></div>
            <div class="grid-cell">
                @if($item = $newsList[1])
                    <a data-pjax href="{{ route('newsDetail', $item->id) }}">
                        <div class="news-item fadeIn animated"
                             data-image="{{ $item->thumbnail }}">
                        </div>
                        <span>{{ $item->title }}</span>
                    </a>
                @endif
            </div>
        </div>
        <div class="grid-row">
            <div class="grid-cell only-desktop">
                @if($newsList->currentPage() > 1)
                    <a data-pjax href="{{ $newsList->previousPageUrl() }}" class="nav-page-prev"></a>
                @endif
            </div>
            <div class="grid-cell grid-cell-no-8">
                @if($item = $newsList[2])
                    <a data-pjax href="{{ route('newsDetail', $item->id) }}">
                        <div class="news-item news-item-lg fadeIn animated"
                             data-image="{{ $item->thumbnail }}">
                        </div>
                        <span>{{ $item->title }}
                            <pre>time: {{ $item->updated_at }}</pre>
                    </span>
                    </a>
                @endif
            </div>
            <div class="grid-cell">
                @if($item = $newsList[3])
                    <a data-pjax href="{{ route('newsDetail', $item->id) }}">
                        <div class="news-item fadeIn animated"
                             data-image="{{ $item->thumbnail }}">
                        </div>
                        <span>{{ $item->title }}</span>
                    </a>
                @endif
            </div>
            <div class="grid-cell only-desktop">
                @if($newsList->hasMorePages())
                    <a data-pjax href="{{ $newsList->nextPageUrl() }}" class="nav-page-next"></a>
                @endif
            </div>
        </div>
        <div class="grid-row">
            <div class="grid-cell only-desktop"></div>
            <div class="grid-cell only-desktop"></div>
            <div class="grid-cell only-desktop"></div>
            <div class="grid-cell">
                @if($item = $newsList[4])
                    <a data-pjax href="{{ route('newsDetail', $item->id) }}">
                        <div class="news-item fadeIn animated"
                             data-image="{{ $item->thumbnail }}">
                        </div>
                        <span>{{ $item->title }}</span>
                    </a>
                @endif
            </div>
            <div class="grid-cell only-desktop"></div>
        </div>
        @include('layouts/mobile_footer')
    </div>
@endsection