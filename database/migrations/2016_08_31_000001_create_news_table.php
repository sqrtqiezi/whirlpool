<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->index()->comment('标题');
            $table->text('content')->comment('内容');
            $table->tinyInteger('type')->comment('内容分类');
            $table->string('thumbnail')->default('')->comment('封面图');
            $table->tinyInteger('is_stick')->default(0)->comment('是否置顶');
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
        Schema::drop('news');
    }
}
