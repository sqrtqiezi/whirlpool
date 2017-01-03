<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidd
     */
    public function up()
    {
        Schema::create('product_types', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->comment('分类名称');
            /**
             * 属性是特定品类的商品，各不相同的技术参数，
             * 属于特定品类的商品有着共同的属性，在这个商品分类表中，存放的是属性名称，
             * 添加、修改商品时，我们直接读已经设置过的属性，避免用户重复输入属性名
             * 分类属性的格式：
             * [
             *   '型号',
             *   '体积',
             *   '能耗标准',
             * ]
             */
            $table->text('attributes')->nullable()->comment('分类属性');
            $table->tinyInteger('order')->default(0)->comment('展示顺序');
            $table->softDeletes();
            $table->timestamps();

            // 不可能出现同样的栏目。
            $table->unique('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_types');
    }
}
