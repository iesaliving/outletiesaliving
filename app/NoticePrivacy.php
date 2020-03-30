<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticePrivacy extends Model
{
    protected $table = "notice_privacy";
  
    protected $fillable = [
			    	  'title',
			    	  'intro',
				      'description'
    ];

     protected $dates = [
        'updated_at',
        'created_at',
      ];

}
