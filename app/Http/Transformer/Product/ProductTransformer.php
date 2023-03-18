<?php

namespace App\Http\Transformer\Product;

use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;

class ProductTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'id' => $model->id,
            'name' => $model->name,
            'type_id' => $model->type_id,
            'acting' => $model->acting,
            'features' => $model->features,
            'remark' => $model->remark,
            'introduction' => $model->introduction,
            'image' => UrlHelper::formatOutPutUrl($model['image']),
            'chart_image' => UrlHelper::formatOutPutUrl($model['chart_image']),
            'video_url1' => UrlHelper::formatOutPutUrl($model['video_url1']),
            'video_url2' => UrlHelper::formatOutPutUrl($model['video_url2']),
            'video_url3' => UrlHelper::formatOutPutUrl($model['video_url3']),
            'video_url4' => UrlHelper::formatOutPutUrl($model['video_url4']),
            'pdf' => UrlHelper::formatOutPutUrl($model['pdf']),
        ];
    }
}
