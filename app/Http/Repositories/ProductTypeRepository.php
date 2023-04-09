<?php

namespace App\Http\Repositories;

use App\Product;
use App\ProductType;
use Illuminate\Database\Eloquent\Builder;
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

    /**
     * 獲得站台產品
     */
    public function getProductsBySite(?string $site)
    {
        return Product::query()
            ->when(
                !is_null($site),
                fn (Builder $query) =>
                $query->whereHas('Type', fn ($q) => $q->where('site', $site))
            )->get();
    }
}
