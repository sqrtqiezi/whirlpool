@extends('layouts.base')

@section('content')
    <div class="details-content content-product">
        @include('layouts/mobile_top')
        <div class="mobile-detail only-mobile">
            <section class="title">
                <span class="main-title">PRODUCT LIST</span>
                <span class="sub-title">厨房家电</span>
            </section>
        </div>
        <div class="detail product-detail bounceInLeft animated">
            <div class="scrollbar-macosx">
                <div id="product-show" class="product-detail-item product-show">
                    <img class="hero-image" src="/{{ $product->background }}"/>
                    <div class="description">
                        <section class="title">
                            <h1 class="main-title">{{ $product->main_heading }}</h1>
                            <h3 class="sub-title">{{ $product->sub_heading }}</h3>
                        </section>
                        @foreach($features as $feature)
                            <div class="product-show-item">{{ $feature }}</div>
                        @endforeach
                    </div>
                </div>
                <div id="product-tech" class="product-detail-item product-tech">
                    <div class="pull-left">
                        <section class="title">
                            <h1 class="main-title">TECHNICAL PARAMETERS</h1>
                            <h3 class="sub-title">技术参数</h3>
                        </section>

                        <table class="product-tech-details">
                            <tbody>
                            @for($i=0, $keys = array_keys($product->specification),
                                    $iMax = count($keys); $i < $iMax; $i += 2)
                                <tr>
                                    <td>{{ $product->specification[$keys[$i]]['name'] }}</td>
                                    <td>{{ $product->specification[$keys[$i]]['value'] }}</td>
                                    @if($i+1 < $iMax)
                                        <td>{{ $product->specification[$keys[$i+1]]['name'] }}</td>
                                        <td>{{ $product->specification[$keys[$i+1]]['value'] }}</td>
                                    @else
                                        <td></td>
                                        <td></td>
                                    @endif
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                    <div class="pull-right">
                        <div class="product-tech-image">
                            <img src="/{{ $product->spec_img_one }}" alt="">
                        </div>
                        <div class="product-tech-image">
                            <img src="/{{ $product->spec_img_two }}" alt="">
                        </div>
                    </div>
                </div>
                @if(isset($product->core_tech_detail))
                    <div id="product-core" class="product-detail-item product-core">
                        <section class="title">
                            <h1 class="main-title">{{ $product->core_tech_title }}</h1>
                        </section>

                        <section class="product-core-details">
                            @if(isset($product->core_tech_detail))
                                @foreach($product->core_tech_detail as $detail)
                                    <div class="product-core-item">
                                        <img src="/{{ $detail['image'] }}" alt="">
                                        <span>{{ $detail['description'] }}</span>
                                    </div>
                                @endforeach
                            @endif
                        </section>
                    </div>
                @endif
                @if(isset($product->detail))
                    <div id="product-descriptions" class="product-detail-item product-descriptions">
                        <div class="pull-right">
                            <section class="title">
                                <h1 class="main-title">{{ $product->detail[0]['title'] }}</h1>
                                <h3 class="sub-title">{{ $product->detail[0]['description'] }}</h3>
                            </section>

                            <div class="product-description-items">
                                @if(isset($product->detail))
                                    @for($i = 0, $iMax = count($product->detail); $i < $iMax; $i++)
                                        <div data-title="{{ $product->detail[$i]['title'] }}"
                                             data-description="{{ $detail['description'] }}"
                                             data-image="{{ $product->detail[$i]['preview'] }}"
                                             class="product-description-item @if($i === 0) active @endif">
                                        </div>
                                    @endfor
                                @endif
                            </div>
                        </div>
                        <div class="pull-left">
                            <img class="product-description-image" src="{{ $product->detail[0]['preview'] }}" alt="">
                        </div>
                    </div>
                @endif
            </div>
        </div>
        @include('layouts/mobile_footer')
    </div>

    <div class="grid-cell only-desktop">
        <a data-pjax href="{{ route('category', $product->type_id) }}" class="nav-close"></a>
    </div>
    <div class="grid-cell only-desktop"></div>
    <div class="grid-cell only-desktop">
        <section class="title">
            <span class="main-title">{{ $product->main_heading }}</span>
            <span class="sub-title">{{ $product->sub_heading }}</span>
        </section>
    </div>
    <div class="grid-cell only-desktop">
        <div class="details-nav">
            <ul>
                <a href="#product-show">
                    <li class="product-show active">品牌简介</li>
                </a>
                <a href="#product-tech">
                    <li class="product-tech">技术参数</li>
                </a>
                @if(isset($product->core_tech_detail))
                <a href="#product-core">
                    <li class="product-core">核心技术</li>
                </a>
                @endif
                @if(isset($product->detail))
                    <a href="#product-descriptions">
                        <li class="product-descriptions">细节展示</li>
                    </a>
                @endif
            </ul>
        </div>
    </div>
@endsection