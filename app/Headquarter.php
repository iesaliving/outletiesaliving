<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headquarter extends Model
{
    protected $table = "headquarters";

    protected $fillable = [
        'active',
        'name',
        'address',
        'phone',
        'email',
        'schedule',
        'map'
    ];

     protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
