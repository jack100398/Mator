<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'type',
        'image',
        'text',
        'introduction',
        'created_at',
    ];

    protected $cast = [
        'title' => 'string',
        'type' => 'string',
        'image' => 'string',
        'text' => 'string',
        'introduction' => 'string',
        'created_at' => 'datetime'
    ];
}
