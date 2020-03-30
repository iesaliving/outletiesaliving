<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = "faqs";
  
    protected $fillable = [
			    	  'image',
			    	  'title',
			    	  'slug',
				      'description'
    ];

    protected $dates = [
        'updated_at',
        'created_at',
    ];
}
