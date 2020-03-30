<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $table = "testimonies";

    protected $fillable = [
        'active',
        'name',
        'image',
        'text',
    ];

     protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
