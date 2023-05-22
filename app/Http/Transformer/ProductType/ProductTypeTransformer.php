<?php

namespace App\Http\Transformer\ProductType;

use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;

class ProductTypeTransformer extends Transformer
{
    public function transform($model)
    {
        $is_zh = $model->site === 'zh';

        return [
            'id' => $model->id,
            'name' => $model->name,
            'admin_select_name' => ($is_zh ? '[中文站]' : '[英文站]') . $model->name,
            'page_banner' => UrlHelper::formatOutPutUrl($model->page_banner),
            'type_banner' => UrlHelper::formatOutPutUrl($model->type_banner),
            'image' => UrlHelper::formatOutPutUrl($model->image),
            'video' => $model->video,
            'remark' => $model->remark,
            'site' => $model->site,
            'sort' => $model->sort,
            'index_image' => UrlHelper::formatOutPutUrl($model->index_image),
        ];
    }
}
