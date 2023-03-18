<?php

use App\Helpers\ConfigHelper;
use App\Product;
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
        $this->createProductTypies();
        $this->createProduct();
    }

    private function createProductTypies(): void
    {
        $typies = ConfigHelper::getConfig('Seeder.ProductType');

        $typies->each(fn ($type) => ProductType::query()->firstOrCreate($type));
    }

    private function createProduct(): void
    {
        $products = ConfigHelper::getConfig('Seeder.Product');

        $products->each(fn ($type) => Product::query()->firstOrCreate($type));
    }
}
