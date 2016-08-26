@extends('layouts.base')

@section('content')
    <div class="details-content">
        <div class="detail product-show pull-left bounceInLeft animated" style="display: none">
            <img class="hero-image" src="/images/product-hero.png"/>
            <div class="description">
                <section class="title">
                    <h1 class="main-title">AKF 808</h1>
                    <h3 class="sub-title">吸油烟机</h3>
                </section>

                <div class="product-show-item">经典T型黄金比例设计</div>
                <div class="product-show-item">晶透钢化玻璃操控面板</div>
                <div class="product-show-item">触摸感应控制开关</div>
                <div class="product-show-item">经典蓝色LED背光显示系统</div>
            </div>
        </div>
        <div class="detail product-tech pull-left bounceInLeft animated" style="display: none">
            <div class="pull-left">
                <section class="title">
                    <h1 class="main-title">TECHNICAL PARAMETERS</h1>
                    <h3 class="sub-title">技术参数</h3>
                </section>

                <table class="product-tech-details">
                    <tbody>
                    <tr>
                        <td>功能参数/型号</td>
                        <td>AKF808</td>
                        <td>尺寸(深×宽×高)mm</td>
                        <td>390*900*600</td>
                    </tr>
                    <tr>
                        <td>颜色</td>
                        <td>不锈钢</td>
                        <td>排风量(m³/min)</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>最大静压(Pa)</td>
                        <td>370</td>
                        <td>噪音(dB(A))</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td>主电机功率(w)</td>
                        <td>218</td>
                        <td>油脂分离度</td>
                        <td>≥80%</td>
                    </tr>
                    <tr>
                        <td>气味降低度</td>
                        <td>≥90%</td>
                        <td>经典T型黄金比例设计</td>
                        <td>有</td>
                    </tr>
                    <tr>
                        <td>触摸感应控制开关</td>
                        <td>有</td>
                        <td>晶透钢化玻璃操控面板</td>
                        <td>有</td>
                    </tr>
                    <tr>
                        <td>经典蓝色LED背光显示系统</td>
                        <td>有</td>
                        <td>17(m³/min)超强吸风能力</td>
                        <td>有</td>
                    </tr>
                    <tr>
                        <td>70dB(A)超静噪音</td>
                        <td>有</td>
                        <td>二档风速调节</td>
                        <td>有</td>
                    </tr>
                    <tr>
                        <td>可调节延时控制开关设计</td>
                        <td>有</td>
                        <td>一体成型80mm深集烟腔</td>
                        <td>有</td>
                    </tr>
                    <tr>
                        <td>"瞬洁"不锈钢双层滤油网</td>
                        <td>有</td>
                        <td>LED节能冷光灯：2*1W</td>
                        <td>有</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="pull-right">
                <div class="product-tech-top">
                    <img src="/images/product-tech-top.png" alt="">
                </div>
                <div class="product-tech-bottom">
                    <img src="/images/product-tech-bottom.png" alt="">
                </div>
            </div>
        </div>
        <div class="detail product-core pull-left bounceInLeft animated" style="display: none">
            <section class="title">
                <h1 class="main-title">突破性3D净吸技术的推广者和引导者</h1>
            </section>

            <section class="product-core-details">
                <div class="product-core-item">
                    <img src="/images/product-core-item4.png" alt="">
                    <span>科恩达效应一体成型集烟腔，高效吸油易清洁</span>
                </div>
                <div class="product-core-item">
                    <img src="/images/product-core-item3.png" alt="">
                    <span>Lituus利特螺线风机系统</span>
                </div>
                <div class="product-core-item">
                    <img src="/images/product-core-item2.png" alt="">
                    <span>滤净合一，瞬间呈现</span>
                </div>
                <div class="product-core-item">
                    <img src="/images/product-core-item1.png" alt="">
                    <span>高品质轴承电机</span>
                </div>
            </section>
        </div>
        <div class="detail product-details pull-left bounceInLeft animated" style="display: none">
            <div class="pull-left">
                <img src="/images/product-detail1.png" alt="">
            </div>
            <div class="pull-right">
                <section class="title">
                    <h1 class="main-title">经典T型黄金比例设计</h1>
                    <h3 class="sub-title">通过我们的高品质产品,给消费者带来轻松愉悦的生活体验 通过我们的细致周到的服务,给合作伙伴带来轻松的合作体验</h3>
                </section>

                <div class="product-detail-items">
                    <div class="product-detail-item active"><img src="/images/product-detail-item4.png" alt=""></div>
                    <div class="product-detail-item"><img src="/images/product-detail-item3.png" alt=""></div>
                    <div class="product-detail-item"><img src="/images/product-detail-item2.png" alt=""></div>
                    <div class="product-detail-item"><img src="/images/product-detail-item1.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid-cell">
        <a href="{{ route('category', 1) }}" class="nav-close"></a>
    </div>
    <div class="grid-cell"></div>
    <div class="grid-cell">
        <section class="title">
            <span class="main-title">AKF808</span>
            <span class="sub-title">吸油烟机</span>
        </section>
    </div>
    <div class="grid-cell">
        <div class="details-nav">
            <ul>
                <a href="javascript:;" data-detail-name="product-show" class="js-details">
                    <li class="active">品牌简介</li>
                </a>
                <a href="javascript:;" data-detail-name="product-tech" class="js-details">
                    <li>技术参数</li>
                </a>
                <a href="javascript:;" data-detail-name="product-core" class="js-details">
                    <li>核心技术</li>
                </a>
                <a href="javascript:;" data-detail-name="product-details" class="js-details">
                    <li>细节展示</li>
                </a>
            </ul>
        </div>
    </div>
@endsection

@section('custom-js')
    <script>
        $(function () {
            $.godetail('product-show');
        })
    </script>
@endsection