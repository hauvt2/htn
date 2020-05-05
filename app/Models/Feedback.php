<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
	protected $table = "feedback";
    protected $dateFormat = 'd-m-Y';
	protected $fillable = [
		'name', 'email', 'question', 'answer', 'answer_by', 'status',
	];

}
