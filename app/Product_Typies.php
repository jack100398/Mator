<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Typies extends Model
{
    protected $fillable = [
        'name',
        'page_banner',
        'type_banner',
        'image',
        'video',
        'remark'
    ];

    protected $cast = [
        'name' => 'string',
        'page_banner' => 'string',
        'type_banner' => 'string',
        'image' => 'string',
        'video' => 'string',
        'remark' => 'string'
    ];
}
