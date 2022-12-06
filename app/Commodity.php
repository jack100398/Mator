<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    protected $fillable = ['name', 'power', 'image_url'];

    protected $cast = ['name' => 'string', 'power' => 'integer', 'image_url' => 'string'];
}
