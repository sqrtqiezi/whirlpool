<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTerminalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terminals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('')->comment('终端店名');
            $table->tinyInteger('location')->default(0)->comment('省份');
            $table->string('address')->default('')->comment('详细地址');
            $table->string('telephone')->default('')->comment('联系电话');
            $table->string('thumbnail')->default('')->comment('封面图');
            $table->softDeletes();
            $table->timestamps();

            $table->index('location');
            $table->index(['name', 'address', 'telephone']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('terminals');
    }
}
