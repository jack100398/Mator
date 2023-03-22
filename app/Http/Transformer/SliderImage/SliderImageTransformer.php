<?php

namespace App\Http\Transformer\SliderImage;

use App\Helpers\UrlHelper;
use App\Http\Transformer\Transformer;

class SliderImageTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'id' => $model->id,
            'desktop_image' => UrlHelper::formatOutPutUrl($model['desktop_image']),
            'mobile_image' => UrlHelper::formatOutPutUrl($model['mobile_image']),
            'disabled' => $model['disabled'] ? true : false,
            'link' => UrlHelper::formatOutPutUrl($model['link']),
        ];
    }
}
