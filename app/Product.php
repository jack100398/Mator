<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'name',
        'type_id',
        'acting',
        'image',
        'features',
        'remark',
        'introduction',
        'chart_image',
        'video_url1',
        'video_url2',
        'video_url3',
        'video_url4',
        'pdf',
        'pdf_name'
    ];

    protected $cast = [
        'name' => 'string',
        'type_id' => 'integer',
        'acting' => 'string',
        'image' => 'string',
        'features' => 'string',
        'remark' => 'string',
        'introduction' => 'string',
        'chart_image' => 'string',
        'video_url1' => 'string',
        'video_url2' => 'string',
        'video_url3' => 'string',
        'video_url4' => 'string',
        'pdf' => 'string',
        'pdf_name' => 'string',
    ];

    public function Type(): BelongsTo
    {
        return $this->belongsTo(ProductType::class, 'type_id', 'id');
    }
}
