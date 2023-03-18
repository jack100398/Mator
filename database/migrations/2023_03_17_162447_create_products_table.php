<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('type_id');
            $table->string('name')->comment('產品名稱');
            $table->string('acting')->nullable()->comment('代理商');
            $table->string('image')->nullable()->comment('圖示');
            $table->text('features')->nullable()->comment('特色說明');
            $table->text('remark')->nullable()->comment('備註說明');
            $table->text('introduction')->nullable()->comment('簡介');
            $table->string('chart_image')->nullable()->comment('數據圖');
            $table->string('video_url1')->nullable()->comment('外部影片連結1');
            $table->string('video_url2')->nullable()->comment('外部影片連結2');
            $table->string('video_url3')->nullable()->comment('外部影片連結3');
            $table->string('video_url4')->nullable()->comment('外部影片連結4');
            $table->string('pdf')->nullable()->comment('pdf連結');
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('product_typies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
