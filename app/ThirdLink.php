<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThirdLink extends Model
{
    protected $fillable = [
        'url' => 'string',
        'image' => 'string',
        'remark' => 'string',
    ];

    protected $cast = [
        'url' => 'string',
        'image' => 'string',
        'remark' => 'string',
    ];
}
