<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsTypes extends Model
{
     protected $table = "news_types";
	protected $fillable = [

		'name',
		'status',
		
	];
}
