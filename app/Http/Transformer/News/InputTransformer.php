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
            'image' => UrlHelper::formatInputUrl($model['image']),
            'text' => $model['text']
        ];
    }
}
