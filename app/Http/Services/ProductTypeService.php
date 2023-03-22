<?php

namespace App\Http\Services;


use App\Http\Repositories\ProductTypeRepository;
use Illuminate\Database\Eloquent\Collection;

class ProductTypeService
{
    public function __construct(protected ProductTypeRepository $repository)
    {
    }

    /**
     * 獲得所有產品類別
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->repository->getAll();
    }

    /**
     * 獲得部分產品
     *
     * @return Collection
     */
    public function getProducts(): COllection
    {
        return $this->repository->getProducts();
    }
}
