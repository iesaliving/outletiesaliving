<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShowroomDetail extends Model
{
    protected $table = "showroom_details";
  
    protected $fillable = [
			    	          'showroom_id',
                      'title',
                      'description',
                      'image'
    ];

     protected $dates = [
        'updated_at',
        'created_at',
      ];

    public function showroom()
    {
        return $this->belongsToMany(Showroom::class,'id','showroom_id');
    }
}
