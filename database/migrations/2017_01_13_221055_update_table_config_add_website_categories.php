<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableConfigAddWebsiteCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $config = \Whirlpool\Config\Entities\Config::findOrFail(1);
        $content = array_merge(
            $config->content, [
                'categories' => [
                    'about' => '关于我们',
                    'product' => '厨房电器',
                    'news' => '新闻中心',
                    'project' => '工程案例',
                    'terminal' => '终端形象',
                    'life' => '"会"生活',
                    'contact' => '联系我们'
                ]
            ]
        );
        $config->update([
            'content' => $content
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
