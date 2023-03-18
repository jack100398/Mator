<?php

namespace App\Http\Repositories;

use App\Product;
use App\ProductType;
use Illuminate\Database\Eloquent\Collection;

class ProductTypeRepository
{

    /**
     * 獲得所有產品類別
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return ProductType::query()->get();
    }

    /**
     * 獲得部分產品
     *
     * @return Collection
     */
    public function getProducts(): Collection
    {
        return Product::query()->orderByDesc('id')->limit(15)->get();
    }
}
