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
        </div>
        <div class="grid-cell grid-cell-no-5">
            <a href="{{ route('home') }}" class="nav-close"></a>
        </div>
        <div class="grid-cell grid-cell-no-6"></div>
        <div class="grid-cell grid-cell-no-7">
            <div class="title">
                <span class="main-title">Terminal</span>
                <span class="sub-title">终端形象</span>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-8">
            <select class="stores-select" >
                <option value="137">安徽</option>
                <option value="138">北京</option>
                <option value="139">重庆</option>
                <option value="140">福建</option>
                <option value="141">贵州</option>
                <option value="142">广东</option>
                <option value="143">四川</option>
                <option value="144">辽宁</option>
                <option value="145">湖北</option>
                <option value="146">江苏</option>
                <option value="147">浙江</option>
                <option value="148">上海</option>
                <option value="149">云南</option>
                <option value="150">山东</option>
                <option value="151">吉林</option>
                <option value="152">湖北</option>
                <option value="153">湖南</option>
                <option value="154">甘肃</option>
                <option value="155">青海</option>
                <option value="156">天津</option>
                <option value="157">河北</option>
                <option value="158">贵州</option>
                <option value="159">江西</option>
                <option value="160">辽宁</option>
                <option value="161">宁夏</option>
                <option value="162">新疆</option>
                <option value="163">重庆</option>
                <option value="164">西藏</option>
                <option value="165">陕西</option>
                <option value="166">福建</option>
                <option value="167">河南</option>
                <option value="168">广西</option>
                <option value="169">海南</option>
                <option value="170">黑龙江</option>
            </select>
        </div>
        <div class="grid-cell grid-cell-no-9">
            <div class="search-input">
                <input type="text" placeholder="输入专卖店网点关键词">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-10"></div>
        <div class="grid-cell grid-cell-no-11">
            <div class="store-item fadeIn animated">
                <img src="/images/store-item-1.png" alt="">
                <div class="store-content">
                    <span class="store-title">合肥市蜀山区网点</span>
                    <span class="store-telephone">
                        <i class="fa fa-phone" aria-hidden="true"></i>0551-65335225
                    </span>
                    <span class="store-address">
                        <i class="fa fa-map-pin" aria-hidden="true"></i>安徽省合肥市高新区科学大道96号
                    </span>
                </div>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-12">
            <div class="store-item fadeIn animated">
                <img src="/images/store-item-2.png" alt="">
                <div class="store-content">
                    <span class="store-title">合肥市蜀山区网点</span>
                    <span class="store-telephone">
                        <i class="fa fa-phone" aria-hidden="true"></i>0551-65335225
                    </span>
                    <span class="store-address">
                        <i class="fa fa-map-pin" aria-hidden="true"></i>安徽省合肥市高新区科学大道96号
                    </span>
                </div>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-13">
            <div class="store-item fadeIn animated">
                <img src="/images/store-item-3.png" alt="">
                <div class="store-content">
                    <span class="store-title">合肥市蜀山区网点</span>
                    <span class="store-telephone">
                        <i class="fa fa-phone" aria-hidden="true"></i>0551-65335225
                    </span>
                    <span class="store-address">
                        <i class="fa fa-map-pin" aria-hidden="true"></i>安徽省合肥市高新区科学大道96号
                    </span>
                </div>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-14">
            <div class="store-item fadeIn animated">
                <img src="/images/store-item-4.png" alt="">
                <div class="store-content">
                    <span class="store-title">合肥市蜀山区网点</span>
                    <span class="store-telephone">
                        <i class="fa fa-phone" aria-hidden="true"></i>0551-65335225
                    </span>
                    <span class="store-address">
                        <i class="fa fa-map-pin" aria-hidden="true"></i>安徽省合肥市高新区科学大道96号
                    </span>
                </div>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-15">
            <div class="store-item fadeIn animated">
                <img src="/images/store-item-5.png" alt="">
                <div class="store-content">
                    <span class="store-title">合肥市蜀山区网点</span>
                    <span class="store-telephone">
                        <i class="fa fa-phone" aria-hidden="true"></i>0551-65335225
                    </span>
                    <span class="store-address">
                        <i class="fa fa-map-pin" aria-hidden="true"></i>安徽省合肥市高新区科学大道96号
                    </span>
                </div>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-16">
            <a href="{{ route('stores') }}" class="nav-page-prev"></a>
        </div>
        <div class="grid-cell grid-cell-no-17"></div>
        <div class="grid-cell grid-cell-no-18"></div>
        <div class="grid-cell grid-cell-no-19"></div>
        <div class="grid-cell grid-cell-no-20">
            <a href="{{ route('stores') }}" class="nav-page-next"></a>
        </div>
    </div>
@endsection