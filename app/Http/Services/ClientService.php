<?php

namespace App\Http\Services;

use App\Banner;
use App\Http\Repositories\ClientRepository;
use App\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ClientService
{
    public function __construct(
        protected ClientRepository $repository
    ) {
    }

    public function getBanner(string $route): Banner
    {
        $banner = $this->repository->getBanner($route);

        if (!filter_var($banner->desktop_url, FILTER_VALIDATE_URL)) {
            $banner->desktop_url = asset($banner->desktop_url);
        }

        if (!filter_var($banner->mobile_url, FILTER_VALIDATE_URL)) {
            $banner->mobile_url = asset($banner->mobile_url);
        }

        return $banner;
    }


    /**
     * 取得在目標類別下的產品
     *
     * @param int $type_id
     *
     * @return LengthAwarePaginator
     */
    public function getProductsByType(int $type_id): LengthAwarePaginator
    {
        return $this->repository->getProductsByType($type_id);
    }

    /**
     * 
     */
    public function getProduct(int $product_id): Product
    {
        return $this->repository->getProduct($product_id);
    }
}
