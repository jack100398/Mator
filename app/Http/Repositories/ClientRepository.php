<?php

namespace App\Http\Repositories;

use App\Banner;
use App\GlobalSetting;
use App\News;
use App\Product;
use App\ProductType;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ClientRepository
{
    public function getBanner(string $route, string $site = 'zh'): Banner
    {
        return Banner::query()->where('route', $route)->where('site', $site)->first();
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
        return Product::query()
            ->orderBy('id')
            ->where('type_id', $type_id)
            ->paginate(15);
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
        return ProductType::query()->where('site', $site)->get();
    }

    /**
     * 獲得分頁後的最新消息
     *
     * @return LengthAwarePaginator
     */
    public function getNews(): LengthAwarePaginator
    {
        return News::query()
            ->orderBy('created_at')
            ->paginate(15);
    }


    /**
     * 獲得設定
     *
     * @return Collection
     */
    public function getSettings(): Collection
    {
        return GlobalSetting::query()->get();
    }

    /**
     * 透過輸入的字串模糊搜尋產品
     *
     * @param string $like_name
     *
     * @return Collection
     */
    public function searchProduct(string $like_name): Collection
    {
        return Product::query()->with('type')->where('name', 'like', "%$like_name%")->get();
    }
}
