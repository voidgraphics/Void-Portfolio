<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body',
        'category',
        'desc',
        'thumbnail_path',
        'img_path'
    ];
}
