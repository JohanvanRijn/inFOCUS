<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Posts;
use App\Models\Review;
use Validator;
use Auth;

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
    	$reviews = Review::all()
    						->where('post_id', $postId);

    	$img = 'storage/'. $post->img_path;

    	return view('users.post', compact('post', 'user', 'img', 'reviews'));
    }

    public function addReview($id, $postId)
    {
    	$user = User::find($id);
    	$post = Posts::find($postId);

    	$img = 'storage/'. $post->img_path;

    	return view('users.review', compact('post', 'user', 'img'));
    }

    public function storeReview(Request $request, $id, $postId)
    {
    	$val = Validator::make($request->all(), [
    		'rating' => 'required|numeric',
    	]);

    	if( $val->fails() )
    	{
    		return redirect()
    				->route('userReview.add', [ 'id'=>$id, 'postId'=>$postId ])
    				->withErrors($val);
    	}

    	$user = Auth::user()->id;

    	$review = new Review;
    	if( $request->input('title') == null ) 
    	{ $review->titel = ''; } else { $review->title = $request->input('title'); }
    	if( $request->input('body') == null ) 
    	{ $review->body = ''; } else { $review->body = $request->input('body'); }
    	$review->rating = $request->input('rating');
    	$review->post_id = $postId;
    	$review->user_id = Auth::user()->id;
    	$review->save();

    	return redirect()
    			->route('userPost.show', [ 'id' => $id, 'postId' => $postId ]);
    }
}
