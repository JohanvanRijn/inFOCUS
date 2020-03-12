@extends('layouts.app')

@section('content')
	<div class="content" style="padding-top: 24px; min-height: 750px;">

		<div class="reviewPic" style="background-image: url('{{asset($img)}}');">
			<h1>{{$post->title}} <a href='{{route("posts.edit", $post->id)}}'>Edit</a></h1>
			<div>{{$post->caption}}</div>
	 	</div>

		<div class="reviewContainer">
			<h1 class="reviewTitle">Reviews</h1>
			@foreach($reviews as $review)
			<div class="review">
				<h1>{{$review->title}}</h1>
				<div class="reviewUser">{{$review->user->username}}</div>
				<div class="reviewContent">{{$review->body}}</div>
				<div class="reviewSter"><b>Sterren:</b> {{$review->rating}}</div>
			</div>
			@endforeach
		</div>
	</div>

@endsection