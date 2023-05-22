<?php

namespace App\Http\Transformer\Product;

use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;

class InputTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'type_id' => $model['type_id'],
            'name' => $model['name'],
            'acting' => $model['acting'],
            'image' => UrlHelper::formatInputUrl($model['image']),
            'features' => $model['features'],
            'remark' => $model['remark'],
            'introduction' => $model['introduction'],
            'sort' => $model['sort'],
            'chart_image' => UrlHelper::formatInputUrl($model['chart_image']),
            'video_url1' => UrlHelper::formatInputUrl($model['video_url1']),
            'video_url2' => UrlHelper::formatInputUrl($model['video_url2']),
            'video_url3' => UrlHelper::formatInputUrl($model['video_url3']),
            'video_url4' => UrlHelper::formatInputUrl($model['video_url4']),
            'pdf' => UrlHelper::formatInputUrl($model['pdf']),
            'pdf_name' => $model['pdf_name'],
        ];
    }
}
