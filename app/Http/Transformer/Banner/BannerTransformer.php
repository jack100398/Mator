<?php

namespace App\Http\Transformer\Banner;

use App\Banner;
use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;

class BannerTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'id' => $model['id'],
            'desktop_url' => UrlHelper::formatInputUrl($model['desktop_url']),
            'mobile_url' => UrlHelper::formatInputUrl($model['mobile_url']),
            'route' => $model['route'],
            'remark' => $model['remark'],
            'site' => $model['site'] === 'zh' ? '中文站' : '英文站',
            'desktop_ward' => $this->getDesktopSizeWard($model['route']),
            'mobile_ward' => $this->getMobileSizeWard($model['route']),
        ];
    }

    private function getDesktopSizeWard(string $route)
    {
        $ward = collect(Banner::DESKTOP_SPECIAL_SIZE_WARD)->filter(
            fn ($ward, $key) => $route === $key
        )->first();

        return $ward ?? Banner::DESKTOP_DEFAULT_SIZE_WARD;
    }

    private function getMobileSizeWard(string $route)
    {
        $ward = collect(Banner::MOBILE_SPECIAL_SIZE_WARD)->filter(
            fn ($ward, $key) => $route === $key
        )->first();

        return $ward ?? Banner::MOBILE_DEFAULT_SIZE_WARD;
    }
}
