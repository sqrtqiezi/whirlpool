@extends('layouts.base')

@section('content')
    <div class="content content-stores">
        @include('layouts/mobile_top')
        <div class="mobile-detail only-mobile">
            <section class="title">
                <span class="main-title">Terminal</span>
                <span class="sub-title">终端形象</span>
            </section>
        </div>
        <div class="grid-cell grid-cell-no-1 only-desktop"></div>
        <div class="grid-cell grid-cell-no-2 only-desktop">
            <div class="logo">
                <img src="/images/logo.png" alt="">
            </div>
        </div>
        <div class="grid-cell grid-cell-no-3 only-desktop"></div>
        <div class="grid-cell grid-cell-no-4 only-desktop">
        </div>
        <div class="grid-cell grid-cell-no-5 only-desktop">
            <a data-pjax href="{{ route('home') }}" class="nav-close"></a>
        </div>
        <div class="grid-cell grid-cell-no-6 only-desktop"></div>
        <div class="grid-cell grid-cell-no-7 only-desktop">
            <div class="title">
                <span class="main-title">Terminal</span>
                <span class="sub-title">终端形象</span>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-8 only-desktop">
            <select class="stores-select">
                @foreach(\Whirlpool\Terminal\Entities\Terminal::LOCATIONS as $key => $location)
                    <option value="{{ $key }}">{{ $location }}</option>
                @endforeach
            </select>
        </div>
        <div class="grid-cell grid-cell-no-9 only-desktop">
            <div class="search-input">
                <input type="text" placeholder="输入专卖店网点关键词">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-10 only-desktop"></div>
        <div class="grid-cell grid-cell-no-11">
            @if($item = $terminalsList[0])
                <div class="store-item fadeIn animated">
                    <img src="{{ $item->thumbnail }}" alt="">
                    <div class="store-content">
                        <span class="store-title">{{ $item->name }}</span>
                        <span class="store-telephone">
                        <i class="fa fa-phone" aria-hidden="true"></i>{{ $item->telephone }}
                    </span>
                        <span class="store-address">
                        <i class="fa fa-map-pin" aria-hidden="true"></i>{{ $item->address }}
                    </span>
                    </div>
                </div>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-12">
            @if($item = $terminalsList[1])
                <div class="store-item fadeIn animated">
                    <img src="{{ $item->thumbnail }}" alt="">
                    <div class="store-content">
                        <span class="store-title">{{ $item->name }}</span>
                        <span class="store-telephone">
                        <i class="fa fa-phone" aria-hidden="true"></i>{{ $item->telephone }}
                    </span>
                        <span class="store-address">
                        <i class="fa fa-map-pin" aria-hidden="true"></i>{{ $item->address }}
                    </span>
                    </div>
                </div>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-13">
            @if($item = $terminalsList[2])
                <div class="store-item fadeIn animated">
                    <img src="{{ $item->thumbnail }}" alt="">
                    <div class="store-content">
                        <span class="store-title">{{ $item->name }}</span>
                        <span class="store-telephone">
                        <i class="fa fa-phone" aria-hidden="true"></i>{{ $item->telephone }}
                    </span>
                        <span class="store-address">
                        <i class="fa fa-map-pin" aria-hidden="true"></i>{{ $item->address }}
                    </span>
                    </div>
                </div>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-14">
            @if($item = $terminalsList[3])
                <div class="store-item fadeIn animated">
                    <img src="{{ $item->thumbnail }}" alt="">
                    <div class="store-content">
                        <span class="store-title">{{ $item->name }}</span>
                        <span class="store-telephone">
                        <i class="fa fa-phone" aria-hidden="true"></i>{{ $item->telephone }}
                    </span>
                        <span class="store-address">
                        <i class="fa fa-map-pin" aria-hidden="true"></i>{{ $item->address }}
                    </span>
                    </div>
                </div>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-15">
            @if($item = $terminalsList[4])
                <div class="store-item fadeIn animated">
                    <img src="{{ $item->thumbnail }}" alt="">
                    <div class="store-content">
                        <span class="store-title">{{ $item->name }}</span>
                        <span class="store-telephone">
                        <i class="fa fa-phone" aria-hidden="true"></i>{{ $item->telephone }}
                    </span>
                        <span class="store-address">
                        <i class="fa fa-map-pin" aria-hidden="true"></i>{{ $item->address }}
                    </span>
                    </div>
                </div>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-16 only-desktop">
            @if($terminalsList->currentPage() > 1)
                <a data-pjax href="{{ $terminalsList->previousPageUrl() }}" class="nav-page-prev"></a>
            @endif
        </div>
        <div class="grid-cell grid-cell-no-17 only-desktop"></div>
        <div class="grid-cell grid-cell-no-18 only-desktop"></div>
        <div class="grid-cell grid-cell-no-19 only-desktop"></div>
        <div class="grid-cell grid-cell-no-20 only-desktop">
            @if($terminalsList->hasMorePages())
                <a data-pjax href="{{ $terminalsList->nextPageUrl() }}" class="nav-page-next"></a>
            @endif
        </div>
        @include('layouts/mobile_footer')
    </div>
@endsection