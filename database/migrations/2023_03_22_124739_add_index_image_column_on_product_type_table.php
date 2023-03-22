<?php

use App\ProductType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexImageColumnOnProductTypeTable extends Migration
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
            $table->string('index_image')->nullable()->after('image');
            $table->text('en_remark')->nullable()->after('remark');
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
            $table->dropColumn('index_image');
            $table->dropColumn('en_remark');
        });
    }
}
