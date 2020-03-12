@extends('layouts.app')

@section('content')
	
	<div class="content">
		<h1>{{$post->title}}</h1>

		<img src="{{asset($img)}}">
		<span>{{$post->caption}}</span>
	</div>

	<a href='{{route("userReview.add", ["id" => $user->id, "postId" => $post->id])}}'>Plaats review</a>

	@foreach($reviews as $review)
		<h1>{{$review->title}}</h1>
		<div>{{$review->user->username}}</div>
		<div>{{$review->body}}</div>
		<div>{{$review->rating}}</div>
	@endforeach
	
@endsection