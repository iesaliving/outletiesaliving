<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    protected $table = "showrooms";
  
    protected $fillable = [
			    	  'title',
			    	  'description',
    ];

     protected $dates = [
        'updated_at',
        'created_at',
      ];

    public function detail()
    {
        return $this->hasMany(ShowroomDetail::class,'showroom_id','id');
    }
}
