<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandDetail extends Model
{
    protected $table = "brand_details";
  
    protected $fillable = [
			    	  	'active',
						'brand_id',
						'image',
						'title',
						'description',
						'features',
						];

     protected $dates = [
        'updated_at',
        'created_at',
      ];

    public function brand()
    {
        return $this->belongsToMany(Brand::class,'brand_id','id');
    }
}
