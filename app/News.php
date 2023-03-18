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
    ];

    protected $cast = [
        'title' => 'string',
        'type' => 'string',
        'image' => 'string',
        'text' => 'string',
    ];
}
