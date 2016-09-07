<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            // 品牌展示
            $table->string('background')->default('')->comment('背景大图');
            $table->string('main_heading')->default('')->comment('主标题');
            $table->string('sub_heading')->default('')->comment('副标题');
            /**
             * [
             *    '无需提纯的海洛因加工技术',
             *    '经典'
             * ]
             */
            $table->text('feature')->default('')->comment('四句话特点');
            // 技术参数
            $table->string('spec_img_one')->default('')->comment('规格小图1');
            $table->string('spec_img_two')->default('')->comment('规格小图2');
            /**
             * [
             *    [
             *      'name' => '型号',
             *      'value' => 'CEC007'
             *    ],
             *     [
             *      'name' => '噪音 (dB(A))',
             *      'value' => '70'
             *     ],
             * ]
             */
            $table->text('specification')->default('')->comment('技术参数图表');
            // 核心技术
            $table->string('core_tech_title')->default('')->comment('核心技术主标题');
            /**
             * 主标题、四张小图和描述，结构：
             * [
             *   [
             *     'image' => 'uploads/05/43/44/123.jpg',
             *     'description' => '领先地球科技 200 年的反重力技术，将油烟抛至太空',
             *   ],
             *   [
             *     'image' => 'uploads/05/43/44/123.jpg',
             *     'description' => '克林贡人遗落的质子轴承技术，万年无需维修',
             *   ],
             * ]
             */
            $table->text('core_tech_detail')->default('')->comment('核心技术图片和表述');
            // 细节展示
            /**
             * 细节，四张大图，对应四段描述内容（有标题，和描述文字），结构:
             * [
             *   [
             *     'image' => 'uploads/05/43/44/123.jpg',
             *     'title' => '经典 T 型黄金比例设计',
             *     'description' => '通过我们的高品质产品, 给消费者带来轻松愉悦的生活体验 通过我们的细致周到的服务, 给合作伙伴带来轻松的合作体验',
             *   ],
             *   [
             *     'image' => 'uploads/05/43/44/45.jpg',
             *     'title' => '独创零下无摄氏度无结冰技术',
             *     'description' => '让您的肉从冷冻室拿出来，就可以切',
             *   ]
             * ]
             */
            $table->text('detail')->default('')->comment('细节展示');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
