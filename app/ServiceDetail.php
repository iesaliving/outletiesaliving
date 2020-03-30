<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    protected $table = "service_details";

    protected $fillable = [
		        'image',
				'title',
				'description'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
