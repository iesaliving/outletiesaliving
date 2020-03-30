<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";
  
    protected $fillable = [
			    	  'image',
			    	  'title',
				      'description'
    ];

     protected $dates = [
        'updated_at',
        'created_at',
      ];

}
