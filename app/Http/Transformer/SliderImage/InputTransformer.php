<?php

namespace App\Http\Transformer\SliderImage;

use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;

class InputTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'id' => $model['id'],
            'desktop_image' => UrlHelper::formatInputUrl($model['desktop_image']),
            'mobile_image' => UrlHelper::formatInputUrl($model['mobile_image']),
            'disabled' => $model['disabled'] === '啟用' ? 1 : 0,
            'link' => UrlHelper::formatInputUrl($model['link']),
        ];
    }
}
