<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndexSildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('index_silders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type')->default(1)->comment('1:圖片,2:影片');
            $table->string('url')->comment('圖片/影片連結');
            $table->string('link')->nullable()->comment('連結');
            $table->boolean('disabled')->default(true)->comment('是否啟用');
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
        Schema::dropIfExists('index_silders');
    }
}
