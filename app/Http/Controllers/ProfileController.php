<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function home()
    {
    	$user = Auth::user();

    	return view('profile', compact('user'));
    }
}
