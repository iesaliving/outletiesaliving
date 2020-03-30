<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $table = "about_us";
  
    protected $fillable = [
			    	  'image',
			    	  'title',
				      'description',
				      'imag_obj',
			    	  'title_obj',
				      'description_obj',
				      'title_d',
			    	  'description_d',
    ];

     protected $dates = [
        'updated_at',
        'created_at',
      ];
}
