<?php

namespace App\Http\Transformer\IndexSilder;

use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;

class InputTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'id' => $model['id'],
            'type' => $model['type'],
            'link' => UrlHelper::formatInputUrl($model['link']),
            'url' => UrlHelper::formatInputUrl($model['url']),
            'disabled' => $model['disabled'] === '啟用' ? 1 : 0,
        ];
    }
}
