<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = "brands";
  
    protected $fillable = [
			    	  	'active',
					 	'name',
					 	'slug',
					    'logo',
						'logo_txt',
						'intro',
						'social_network',
                        'social_img',
                        'social_txt'
						];

     protected $dates = [
        'updated_at',
        'created_at',
      ];

    public function detail()
    {
        return $this->hasMany(BrandDetail::class,'brand_id','id');
    }
}
