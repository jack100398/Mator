<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndexSilder extends Model
{
    protected $fillable = [
        'link',
        'type',
        'url',
        'disabled'
    ];

    protected $cast = [
        'link' => 'string',
        'type' => 'integer',
        'url' => 'string',
        'disabled' => 'boolean'
    ];
}
