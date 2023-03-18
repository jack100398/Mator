<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTypiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_typies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('類別名稱');
            $table->string('page_banner')->nullable()->comment('頁面banner (product-list頁面上面)');
            $table->string('type_banner')->nullable()->comment('類別banner (product-list頁面中間)');
            $table->string('image')->nullable()->comment('類別圖片');
            $table->string('video')->nullable()->comment('影片連結');
            $table->string('remark')->nullable()->comment('類別介紹');
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
        Schema::dropIfExists('product_typies');
    }
}
