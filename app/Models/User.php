<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table='uses';
    public $fillable = [
        'id',
        'name',
        'email',
        'password',
        'phone',
        'gender',
        'image',
        'role',
    ];
    protected $timestamp = true;
}
