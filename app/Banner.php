<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    const DESKTOP_DEFAULT_SIZE_WARD = '(圖片使用像素：寬1920*高300 / 解析度72dpi)';

    const MOBILE_DEFAULT_SIZE_WARD = '(圖片使用像素：寬1920*高300 / 解析度72dpi)';

    const DESKTOP_SPECIAL_SIZE_WARD = [
        'index'            => '(圖片使用像素：寬1920*高630 / 解析度72dpi)',
        'recomment_banner' => '(圖片使用像素：寬1280*高182 / 解析度72dpi)'
    ];

    const MOBILE_SPECIAL_SIZE_WARD = [
        'index' => '(圖片使用像素：寬1024*高600 / 解析度72dpi)',
        'recomment_banner' => '(圖片使用像素：寬1432*高812 / 解析度72dpi)'
    ];

    protected $fillable = [
        'desktop_url',
        'mobile_url',
        'route',
        'remark',
        'site'
    ];

    protected $cast = [
        'desktop_url'   => 'string',
        'mobile_url'   => 'string',
        'route'  => 'string',
        'remark' => 'string',
        'site' => 'string'
    ];
}
