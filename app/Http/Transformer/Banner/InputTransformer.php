<?php

namespace App\Http\Transformer\Banner;

use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;

class InputTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'desktop_url' => UrlHelper::formatInputUrl($model['desktop_url']),
            'mobile_url' => UrlHelper::formatInputUrl($model['mobile_url']),
        ];
    }
}
