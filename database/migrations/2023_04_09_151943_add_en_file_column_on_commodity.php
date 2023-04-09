<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnFileColumnOnCommodity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commodities', function (Blueprint $table) {
            $table->string('pdf_name')->default('pdf_name')->comment('pdf名稱')->after('pdf');
            $table->string('en_pdf')->nullable()->comment('英文站pdf連結')->after('pdf_name');
            $table->string('en_pdf_name')->default('pdf_name')->comment('英文站pdf名稱')->after('en_pdf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commodities', function (Blueprint $table) {
            $table->dropColumn('pdf_name');
            $table->dropColumn('en_pdf');
            $table->dropColumn('en_pdf_name');
        });
    }
}
