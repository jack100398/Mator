<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderImage extends Model
{
    protected $fillable = [
        'desktop_image',
        'mobile_image',
        'disabled',
        'link'
    ];

    protected $cast = [
        'desktop_image' => 'string',
        'mobile_image' => 'string',
        'disabled' => 'boolean',
        'link' => 'string'
    ];
}
