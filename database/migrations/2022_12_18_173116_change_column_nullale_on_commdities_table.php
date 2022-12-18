<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnNullaleOnCommditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commodities', function (Blueprint $table) {
            $table->float('rated_thrust')->nullable()->change();
            $table->float('acceleration_thrust')->nullable()->change();
            $table->float('rated_current')->nullable()->change();
            $table->float('acceleration_current')->nullable()->change();
            $table->float('max_acceleration')->nullable()->change();
            $table->float('max_speed')->nullable()->change();
            $table->float('accuracy')->nullable()->change();
            $table->float('ambient_temperature')->nullable()->change();
            $table->float('environment_humidity')->nullable()->change();
            $table->float('storage_temperature')->nullable()->change();
            $table->float('voltage')->nullable()->change();
            $table->string('remark')->nullable()->change();
            $table->integer('linear_ruler')->default(0)->after('heat_resistance')->comment('直線尺形式 0:增量 1:絕對');
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
            $table->dropColumn('linear_ruler');
        });
    }
}
