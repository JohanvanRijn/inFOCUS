@extends('layouts.app')

@section('content')

<div class="container">

        <div class="content">
            <form action='{{route("userReview.store", ["id" => $user->id, "postId" => $post->id])}}' method='POST' enctype="multipart/form-data">
                @csrf

                @if($errors->any())
                    {{implode('', $errors->all('<div>:message</div>'))}}
                @endif

                <div class="form-group">
                    <label>{{ __('Titel van Review') }}</label>
                    <input type="text" name="title" value="{{old('title')}}" required autofocus>
                </div>

                <div class="form-group">
                    <label>{{ __('Review') }}</label>
                    <input type="text" name="body" value="{{old('body')}}">
                </div>

                <div class="form-group">
                    <label>{{ __('Rating') }}</label>
                    <input type="text" name="rating" value="{{old('rating')}}">
                </div>

                <button type="submit" class="button buttonBlue">{{ __('Upload') }}
                    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                </button>
            </form>
        </div>
        <div class="footer">

        </div>
    </div>

@endsection