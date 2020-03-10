<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;
use App\Models\Posts;

class ProfileController extends Controller
{
    public function home()
    {
    	$user = Auth::user();
        $posts = Posts::all();

    	return view('profile', compact('user', 'posts'));
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
        ]);

        if($validator->fails())
        {
            return redirect()
                        ->route('profile.edit')
                        ->withErrors($validator);
        } else {
            $user = Auth::user();
            $user->name   = $request->input('name');
            $user->caption  = $request->input('caption');

            // dd($request->input('profile_pic'));

            if($request->file('profile_pic') != null) 
            { 
                $path_profile = $request->file('profile_pic')
                                        ->store('avatars', 'public');
                $user->profile_pic = $path_profile;
            }

            if($request->file('banner_pic') != null) 
            { 
                $path_banner = $request->file('banner_pic')
                                        ->store('banners', 'public');
                $user->banner_pic = $path_banner;
            }

            $user->age = $request->input('age');

            $user->save();

            return redirect()->route('profile.home');
        }
    }
}
