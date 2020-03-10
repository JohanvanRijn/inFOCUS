@extends('layouts.app')

@section('content')
	<div class="content">
		<h1>{{$post->title}}</h1>

		<img src="{{asset($img)}}">
		<span>{{$post->caption}}</span>

		<a href='{{route("posts.edit", $post->id)}}'>Edit</a>
	</div>

@endsection