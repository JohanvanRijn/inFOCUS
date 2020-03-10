@extends('layouts.app')

@section('content')
	
	<div class="container">

        <div class="content">
            <form action='{{route("posts.update", $post->id)}}' method='POST' enctype="multipart/form-data">
                @method('PUT')
                @csrf

                @if($errors->any())
                    {{implode('', $errors->all('<div>:message</div>'))}}
                @endif

                <div class="form-group">
                    <label>{{ __('Titel') }}</label>
                    <input type="text" name="title" value="{{$post->title}}" required autofocus>
                </div>

                <div class="form-group">
                    <label>{{ __('Caption') }}</label>
                    <input type="text" name="caption" value="{{$post->caption}}">
                </div>

                <button type="submit" class="button buttonBlue">{{ __('Update') }}
                    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                </button>
            </form>
        </div>
        <div class="footer">

        </div>
    </div>

@endsection