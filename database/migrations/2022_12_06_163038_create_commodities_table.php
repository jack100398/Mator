<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommoditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('品名');
            $table->integer('rated_thrust')->comment('額定推力');
            $table->integer('acceleration_thrust')->comment('加速推力');
            $table->integer('rated_current')->comment('額定電流');
            $table->integer('acceleration_current')->comment('加速電流');
            $table->integer('max_acceleration')->comment('最大加速度');
            $table->integer('max_speed')->comment('最大速度');
            $table->float('accuracy')->comment('重複定位精準度');
            $table->integer('horizontal_load')->comment('水平最大荷重');
            $table->integer('vertical_load')->comment('壁掛最大荷重');
            $table->integer('travel')->comment('行程(雙滑軌)');
            $table->integer('voltage')->comment('電源電壓');
            $table->integer('ambient_temperature')->comment('環境溫度');
            $table->integer('environment_humidity')->comment('環境濕度');
            $table->integer('storage_temperature')->comment('保存溫度');
            $table->string('remark')->comment('備註');
            $table->string('picture_one')->nullable()->comment('圖1');
            $table->string('picture_two')->nullable()->comment('圖2');
            $table->string('picture_three')->nullable()->comment('圖3');
            $table->string('picture_four')->nullable()->comment('圖4');
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
        Schema::dropIfExists('commodities');
    }
}
