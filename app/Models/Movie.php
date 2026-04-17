<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $fillable = [
    'title',
    'year',
    'category_id',
    'image_url',
    'synopsis'
    ];

    public function category() {

    return $this->belongsTo(\App\Models\Category::class);

    }
}
