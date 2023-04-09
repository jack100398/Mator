<?php

use App\ProductType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditProductTypeColumn extends Migration
{
    protected string $table;

    public function __construct()
    {
        $this->table = (new ProductType())->getTable();
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->text('en_remark')->default('zh')->comment('站台')->change();
            $table->renameColumn('en_remark', 'site');
        });

        ProductType::query()->update(['site' => 'zh']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->table, function (Blueprint $table) {
            $table->text('site')->nullable()->default(null)->comment('英文站敘述')->change();
            $table->renameColumn('site', 'en_remark');
        });
    }
}
