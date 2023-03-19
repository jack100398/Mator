<?php

namespace App\Http\Transformer\Banner;

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
            'site' => $model['site'] === 'zh' ? '中文站' : '英文站'
        ];
    }
}
