<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'desktop_url',
        'mobile_url',
        'route',
        'remark'
    ];

    protected $cast = [
        'desktop_url'   => 'string',
        'mobile_url'   => 'string',
        'route'  => 'string',
        'remark' => 'string',
    ];
}
