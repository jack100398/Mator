<?php

namespace App\Http\Repositories;

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
}
