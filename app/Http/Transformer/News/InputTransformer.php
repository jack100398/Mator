<?php

namespace App\Http\Transformer\News;

use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;

class InputTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'title' => $model['title'],
            'type' => $model['type'],
            'introduction' => $model['introduction'],
            'image' => UrlHelper::formatInputUrl($model['image']),
            'text' => $model['text']
        ];
    }
}
