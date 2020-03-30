<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $table = "services";

    protected $fillable = [
		        'title',
				'description',
				'imag_st',
				'title_st',
				'description_st',
				'telf_st',
				'telw_st',
				'email_st',
				'title2',
				'description2',
				'imag_cs',
				'title_cs',
				'description_cs',
				'telf_cs',
				'telw_cs',
				'email_cs',
				'title3',
				'description3'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

   

}
