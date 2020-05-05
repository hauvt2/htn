<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTypes extends Model
{
    protected $table = "project_types";

    protected $fillable = [
      
        'name',
        'status',
    ];

    public $timestamps = false;
}
