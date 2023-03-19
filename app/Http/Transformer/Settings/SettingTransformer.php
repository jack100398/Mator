<?php

namespace App\Http\Transformer\Settings;

use App\Http\Transformer\Transformer;

class SettingTransformer extends Transformer
{
    public function transform($model)
    {
        return [
            'id' => $model['id'],
            'event' => $model['event'],
            'value' => $model['value'],
            'remark' => $model['remark']
        ];
    }
}
