<?php

namespace App\Http\Transformer\Product;

use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;

class ProductDetailTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'id' => $model->id,
            'name' => $model->name,
            'type' => $model->type->name,
            'acting' => $model->acting,
            'features' => $model->features,
            'remark' => $model->remark,
            'introduction' => $model->introduction,
            'image' => UrlHelper::formatOutPutUrl($model['image']),
            'chart_image' => UrlHelper::formatOutPutUrl($model['chart_image']),
            'video_urls' => collect([
                UrlHelper::formatOutPutUrl($model['video_url1']),
                UrlHelper::formatOutPutUrl($model['video_url2']),
                UrlHelper::formatOutPutUrl($model['video_url3']),
                UrlHelper::formatOutPutUrl($model['video_url4']),
            ])->filter()->toArray(),
            'pdf' => UrlHelper::formatOutPutUrl($model['pdf']),
        ];
    }
}
