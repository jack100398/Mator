<?php

namespace App\Http\Repositories;

use App\Banner;
use App\GlobalSetting;
use App\News;
use App\Product;
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
     * 獲得分頁後的最新消息
     *
     * @return LengthAwarePaginator
     */
    public function getNews(): LengthAwarePaginator
    {
        return News::query()
            ->orderBy('id')
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
}
