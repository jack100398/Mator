<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_typies';

    protected $fillable = [
        'name',
        'page_banner',
        'type_banner',
        'image',
        'video',
        'remark',
        'index_image',
        'site'
    ];

    protected $cast = [
        'name' => 'string',
        'page_banner' => 'string',
        'type_banner' => 'string',
        'image' => 'string',
        'video' => 'string',
        'remark' => 'string',
        'index_image' => 'string',
        'site' => 'string'
    ];
}
