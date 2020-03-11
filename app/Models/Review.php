<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Posts;
use User;

class Review extends Model
{
	protected $fillable = [
        'title', 'body', 'rating', 'post_id', 'user_id'
    ];

    public function posts()
    {
    	return $this->belongsTo('App\Models\Posts');
    }

    public function user()
    {
    	return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
