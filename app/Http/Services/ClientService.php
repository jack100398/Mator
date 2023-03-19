<?php

namespace App\Http\Services;

use App\Banner;
use App\Http\Repositories\ClientRepository;
use App\Http\Transformer\Banner\BannerTransformer;
use App\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ClientService
{
    public function __construct(
        protected ClientRepository $repository,
        protected BannerTransformer $banner_transformer
    ) {
    }

    public function getBanner(string $route, string $site = 'zh'): array
    {
        $banner = $this->repository->getBanner($route, $site);

        return $this->banner_transformer->transform($banner);
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
     * 獲得分頁後的最新消息
     *
     * @return LengthAwarePaginator
     */
    public function getNews(): LengthAwarePaginator
    {
        return $this->repository->getNews();
    }

    /**
     * 獲得設定
     *
     * @return Collection
     */
    public function getSettings(): Collection
    {
        return $this->repository->getSettings()->keyBy('event');
    }
}
