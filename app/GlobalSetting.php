<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlobalSetting extends Model
{
    protected $fillable = [
        'event',
        'value',
        'remark'
    ];

    protected $cast = [
        'event' => 'string',
        'value' => 'string',
        'remark' => 'string'
    ];
}
