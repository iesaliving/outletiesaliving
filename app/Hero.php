<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = "images";

    protected $fillable = [
        'type',
        'source',
        'url',
        'img_text',
    ];

     protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
