<?php

namespace App\Http\Transformer\IndexSilder;

use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;

class IndexSilderTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'id' => $model->id,
            'type' => $model->type === 1 ? '1' : '2',
            'link' => UrlHelper::formatOutPutUrl($model['link']),
            'url' => UrlHelper::formatOutPutUrl($model['url']),
            'disabled' => $model['disabled'] ? true : false,
        ];
    }
}
