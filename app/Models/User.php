<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Review;

class User extends Model
{
	public function review()
	{
		return $this->hasMany('App\Models\Review');
	}
}
