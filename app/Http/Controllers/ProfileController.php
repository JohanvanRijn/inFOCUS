<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;

class ProfileController extends Controller
{
    public function home()
    {
    	$user = Auth::user();

    	return view('profile', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();

        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
        ]);

        if($validator->fails()) {
            return redirect()->route('profileEdit');
        } else {
            $user = Auth::user();
            $user->name   = $request->input('name');
            $user->email  = $request->input('email');
            $user->caption  = $request->input('caption');
            $user->save();

            return redirect()->route('profileHome');
        }
    }
}
