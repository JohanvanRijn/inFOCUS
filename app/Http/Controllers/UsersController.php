<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Posts;

class UsersController extends Controller
{
    public function show($id) 
    {
    	$user = User::find($id);
    	$posts = Posts::all()->where('user_id', $user->id);

    	return view('users.show', compact('user', 'posts'));
    }

    public function showPost($id, $postId)
    {
    	$user = User::find($id);
    	$post = Posts::find($postId);

    	$img = 'storage/'. $post->img_path;

    	return view('users.post', compact('post', 'user', 'img'));
    }
}
