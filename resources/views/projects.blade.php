@extends('layouts.base')

@section('content')
    <div class="content content-projects">
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
        <div class="grid-cell grid-cell-no-6">
            <div class="scrollbar-macosx">
                <div class="project-wrapper">
                    <div class="project-item">
                        <img src="/images/project-item-1.png" alt="">
                        <section class="project-content">
                            <span class="title">星汇云锦</span>
                            <span class="content">是广州大道沿线唯一采用蝶形开放式塔楼布局的建筑，与周边项目传统的南北朝向和行列格局相比，不仅避免了住宅之间的视线干扰，还增加了开阔的景观视野，尽显超高层豪宅优势。放眼望去，北面白云山延绵起伏，冬面珠江公寓郁郁葱葱，南面江水波光粼粼，二沙、海心沙绿岛点缀其中，滨江公园缤纷灿烂，中信广场、珠江新城双塔、广州新电视台等地标建筑举目即及，可谓将羊城美景尽收眼底。
建筑类别包括超高层洋房、公寓、写字楼。</span>
                        </section>
                    </div>
                    <div class="project-item">
                        <img src="/images/project-item-2.png" alt="">
                        <section class="project-content">
                            <span class="title">星汇云锦</span>
                            <span class="content">是广州大道沿线唯一采用蝶形开放式塔楼布局的建筑，与周边项目传统的南北朝向和行列格局相比，不仅避免了住宅之间的视线干扰，还增加了开阔的景观视野，尽显超高层豪宅优势。放眼望去，北面白云山延绵起伏，冬面珠江公寓郁郁葱葱，南面江水波光粼粼，二沙、海心沙绿岛点缀其中，滨江公园缤纷灿烂，中信广场、珠江新城双塔、广州新电视台等地标建筑举目即及，可谓将羊城美景尽收眼底。
建筑类别包括超高层洋房、公寓、写字楼。</span>
                        </section>
                    </div>
                    <div class="project-item">
                        <img src="/images/project-item-1.png" alt="">
                        <section class="project-content">
                            <span class="title">星汇云锦</span>
                            <span class="content">是广州大道沿线唯一采用蝶形开放式塔楼布局的建筑，与周边项目传统的南北朝向和行列格局相比，不仅避免了住宅之间的视线干扰，还增加了开阔的景观视野，尽显超高层豪宅优势。放眼望去，北面白云山延绵起伏，冬面珠江公寓郁郁葱葱，南面江水波光粼粼，二沙、海心沙绿岛点缀其中，滨江公园缤纷灿烂，中信广场、珠江新城双塔、广州新电视台等地标建筑举目即及，可谓将羊城美景尽收眼底。
建筑类别包括超高层洋房、公寓、写字楼。</span>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-16">
            <a href="{{ route('projects') }}" class="nav-page-prev"></a>
        </div>
        <div class="grid-cell grid-cell-no-17"></div>
        <div class="grid-cell grid-cell-no-18"></div>
        <div class="grid-cell grid-cell-no-19"></div>
        <div class="grid-cell grid-cell-no-20">
            <a href="{{ route('projects') }}" class="nav-page-next"></a>
        </div>
    </div>
@endsection
