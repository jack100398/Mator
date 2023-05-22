<?php

use App\Product;
use App\ProductType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnSortOnProductTable extends Migration
{
    protected string $product_table;

    protected string $type_table;


    public function __construct()
    {
        $this->product_table = (new Product())->getTable();

        $this->type_table = (new ProductType())->getTable();
    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->product_table, function (Blueprint $table) {
            $table->integer('sort')->default(0)->comment('排序');
        });

        Schema::table($this->type_table, function (Blueprint $table) {
            $table->integer('sort')->default(0)->comment('排序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->product_table, function (Blueprint $table) {
            $table->dropColumn('sort');
        });

        Schema::table($this->type_table, function (Blueprint $table) {
            $table->dropColumn('sort');
        });
    }
}
