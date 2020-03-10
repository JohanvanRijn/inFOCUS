<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use User;

class Posts extends Model
{
    protected $fillable = [
        'title', 'caption', 'img_save', 'img_path', 'user_id',
    ];

    public function User() 
    {
    	return $this->belongsTo('App/Models/User');
    }
}
