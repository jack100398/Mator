<?php

namespace App\Http\Transformer\ProductType;

use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;

class InputTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'name' => $model['name'],
            'page_banner' => UrlHelper::formatInputUrl($model['page_banner']),
            'type_banner' => UrlHelper::formatInputUrl($model['type_banner']),
            'image' => UrlHelper::formatInputUrl($model['image']),
            'video' => $model['video'],
            'remark' => $model['remark'],
            'en_remark' => $model['en_remark'],
            'index_image' => UrlHelper::formatInputUrl($model['index_image']),
        ];
    }
}
