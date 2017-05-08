<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table='category';
    public $fillable = [
        'id',
        'name',
        'description',
        'parent_id',
        'active',
    ];
    protected $timestamp = true;
}
