<?php

namespace App\Http\Transformer\News;

use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;
use Carbon\Carbon;

class NewsTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'id' => $model['id'],
            'title' => $model['title'],
            'type' => $model['type'],
            'introduction' => $model['introduction'],
            'image' => UrlHelper::formatOutPutUrl($model['image']),
            'text' => $model['text'],
            'created_at' => Carbon::parse($model['created_at'])->toDateString(),
        ];
    }
}
