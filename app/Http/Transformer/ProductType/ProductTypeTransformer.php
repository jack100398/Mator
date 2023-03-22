<?php

namespace App\Http\Transformer\ProductType;

use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;

class ProductTypeTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'id' => $model->id,
            'name' => $model->name,
            'page_banner' => UrlHelper::formatOutPutUrl($model->page_banner),
            'type_banner' => UrlHelper::formatOutPutUrl($model->type_banner),
            'image' => UrlHelper::formatOutPutUrl($model->image),
            'video' => $model->video,
            'remark' => $model->remark,
            'en_remark' => $model->en_remark,
            'index_image' => UrlHelper::formatOutPutUrl($model->index_image),
        ];
    }
}
