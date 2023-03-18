<?php

namespace App\Http\Transformer\News;

use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;

class NewsTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'id' => $model['id'],
            'title' => $model['title'],
            'type' => $model['type'],
            'image' => UrlHelper::formatOutPutUrl($model['image']),
            'text' => $model['text']
        ];
    }
}
