<?php

namespace App\Http\Services;


use App\Http\Repositories\ClientRepository;
use App\Http\Transformer\Banner\BannerTransformer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection as SupportCollection;

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
     * 獲得指定站台的產品類別
     *
     * @param string $site
     *
     * @return Collection
     */
    public function getProductTypesBySite(string $site = 'zh'): Collection
    {
        return $this->repository->getProductTypesBySite($site);
    }

    /**
     * 獲得分頁後的最新消息
     *
     * @param string $site
     *
     * @return LengthAwarePaginator
     */
    public function getNews(string $site = 'zh'): LengthAwarePaginator
    {
        return $this->repository->getNews($site);
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

    /**
     * 透過輸入的字串模糊搜尋產品
     *
     * @param array $param
     *
     * @return SupportCollection|Collection
     */
    public function searchProduct(array $param): Collection|SupportCollection
    {
        $name = Arr::get($param, 'search');

        if (is_null($name)) {
            return collect();
        }

        return $this->repository->searchProduct($name);
    }
}
