@extends('layouts.app')

@section('content')
	<div class="content">
		<h1>{{$post->title}}</h1>

		<img src="{{asset($img)}}">
		<span>{{$post->caption}}</span>

		<a href='{{route("posts.edit", $post->id)}}'>Edit</a>

		@foreach($reviews as $review)
			<h1>{{$review->title}}</h1>
			<div>{{$review->user->username}}</div>
			<div>{{$review->body}}</div>
			<div>{{$review->rating}}</div>
		@endforeach
	</div>

@endsection