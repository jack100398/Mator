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
        'rated_thrust' => 'float',
        'acceleration_thrust' => 'float',
        'rated_current' => 'float',
        'acceleration_current' => 'float',
        'max_acceleration' => 'float',
        'max_speed' => 'float',
        'accuracy' => 'float',
        'horizontal_load' => 'float',
        'vertical_load' => 'float',
        'travel' => 'float',
        'voltage' => 'float',
        'ambient_temperature' => 'float',
        'environment_humidity' => 'float',
        'storage_temperature' => 'float',
        'remark' => 'string',
        'picture_one' => 'string',
        'picture_two' => 'string',
        'picture_three' => 'string',
        'picture_four' => 'string',
    ];
}
