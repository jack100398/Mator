<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    protected $fillable = [
        'name',
        'rated_thrust',
        'acceleration_thrust',
        'rated_current',
        'acceleration_current',
        'max_acceleration',
        'max_speed',
        'accuracy',
        'horizontal_load',
        'vertical_load',
        'travel',
        'voltage',
        'ambient_temperature',
        'environment_humidity',
        'storage_temperature',
        'remark',
        'picture_one',
        'picture_two',
        'picture_three',
        'picture_four',
    ];

    protected $cast = [
        'name' => 'string',
        'rated_thrust' => 'integer',
        'acceleration_thrust' => 'integer',
        'rated_current' => 'integer',
        'acceleration_current' => 'integer',
        'max_acceleration' => 'integer',
        'max_speed' => 'integer',
        'accuracy' => 'integer',
        'horizontal_load' => 'integer',
        'vertical_load' => 'integer',
        'travel' => 'integer',
        'voltage' => 'integer',
        'ambient_temperature' => 'integer',
        'environment_humidity' => 'integer',
        'storage_temperature' => 'integer',
        'remark' => 'string',
        'picture_one' => 'string',
        'picture_two' => 'string',
        'picture_three' => 'string',
        'picture_four' => 'string',
    ];
}
