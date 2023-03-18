<?php

use App\Helpers\ConfigHelper;
use App\ProductType;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $typies = ConfigHelper::getConfig('Seeder.ProductType');

        $typies->each(fn ($type) => ProductType::query()->firstOrCreate($type));
    }
}
