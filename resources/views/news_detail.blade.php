@extends('layouts.base')

@section('content')
    <div class="content content-news-detail">
        @include('layouts/mobile_top')
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
            <div class="news-detail bounceInLeft animated">
                <div class="news-detail-heading">
                    <h1 class="news-detail-title">
                        惠而浦中国携手安徽绿地 打造品质生活新标杆
                    </h1>
                    <span>time: 2016-06-27</span>
                </div>
                <div class="news-detail-body">
                    <div class="scrollbar-macosx">
                        <p>
                            2016年2月3日，惠而浦中国与安徽绿地在合肥市绿地海德公馆，举行联合签约仪式，惠而浦(中国)董事长、总裁金友华先生，绿地控股集团安徽房地产事业部总经理李煜先生，作为双方代表出席了本次会议并签署了战略合作文件。双方将遵循互惠互利合作理念，努力扩大双方合作的深度和广度，提高双方经济效益，实现互利共赢。此次跨界战略合作，将拉开双方在安徽乃至全国强强联手、紧密合作的序幕。</p>
                        <img src="/images/news-image1.png" alt="">
                        <p>
                            对于安徽绿地和惠而浦中国的合作，绿地控股集团安徽房地产事业部李总表示，绿地的理念是“绿地让生活更美好”，绿地在提升产品力，选择合作伙伴时，也是希望能够选择有共同理念，志同道合的企业。同时绿地与惠而浦在各自领域都是顶尖存在的企业，希望通过深化合作，能够给大家带来更好的居住和生活体验。惠而浦作为全球家电领导品牌，有着超过百年的技术积淀和品牌领导力，一直将高品质服务作为其不懈追求，其倡导的“百年品质、创易生活”与绿地集团的理念有着相得益彰、异曲同工之妙。</p>
                        <p>
                            在致辞中，李总讲到，“今天，双方确立互为战略合作伙伴关系，并就产品销售及品牌推广，开展深入长期合作，共同形成新的发展优势。绿地同惠而浦中国的战略合作，正是双方企业理念的具体落地和升华，这次合作可谓强强联合，共同目标就是给消费者提供更好的高品质生活体验。”</p>
                        <p>
                            对于安徽绿地和惠而浦中国的合作，绿地控股集团安徽房地产事业部李总表示，绿地的理念是“绿地让生活更美好”，绿地在提升产品力，选择合作伙伴时，也是希望能够选择有共同理念，志同道合的企业。同时绿地与惠而浦在各自领域都是顶尖存在的企业，希望通过深化合作，能够给大家带来更好的居住和生活体验。惠而浦作为全球家电领导品牌，有着超过百年的技术积淀和品牌领导力，一直将高品质服务作为其不懈追求，其倡导的“百年品质、创易生活”与绿地集团的理念有着相得益彰、异曲同工之妙。</p>
                        <p>
                            在致辞中，李总讲到，“今天，双方确立互为战略合作伙伴关系，并就产品销售及品牌推广，开展深入长期合作，共同形成新的发展优势。绿地同惠而浦中国的战略合作，正是双方企业理念的具体落地和升华，这次合作可谓强强联合，共同目标就是给消费者提供更好的高品质生活体验。”</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-cell grid-cell-no-4 only-desktop">
            <a data-pjax href="{{ route('news') }}" class="nav-close"></a>
        </div>
        <div class="grid-cell grid-cell-no-5 only-desktop">
            <div class="title">
                <span class="main-title">NEWS CENTER</span>
                <span class="sub-title">新闻中心</span>
            </div>
        </div>
    </div>
@endsection
