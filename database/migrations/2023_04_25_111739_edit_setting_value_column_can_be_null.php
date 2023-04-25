<?php

use App\GlobalSetting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditSettingValueColumnCanBeNull extends Migration
{
    private string $table;

    public function __construct()
    {
        $this->table = (new GlobalSetting())->getTable();
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->string('value')->nullable()->comment('設定值')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->string('value')->comment('設定值')->change();
        });
    }
}
