<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Whirlpool\Config\Entities\Config;

class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content')->comment('配置内容');
            $table->timestamps();
        });

        Config::create([
            'content' => [
                'title' => '欢迎来到某网站',
                'keyword' => '台灯，热水器，除湿器，空调',
                'description' => '湾流宇航公司是目前世界上生产豪华、大型公务机的著名厂商。1999 年由通用动力公司完全收购，其主要产品为 “湾流” 系列飞机。',
                'brand' => '湾流宇航',
                'icp' => '京 icp 备 12345678'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('configs');
    }
}
