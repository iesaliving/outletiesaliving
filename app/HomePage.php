<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $table = "home_pages";

    protected $fillable = [
        'active',
        'image',
        'title',
        'text',
    ];

     protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
