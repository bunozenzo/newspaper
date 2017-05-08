<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table='news';
    public $fillable = [
        'id',
        'category_id',
        'euser_id',
        'tittle',
        'description',
        'content',
        'images',
        'hot',
        'views',
        'active',
    ];
    protected $timestamp = true;
}
