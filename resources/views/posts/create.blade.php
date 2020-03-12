@extends('layouts.app')

@section('content')
	<div class="container">

        <div class="content">
            <form action='{{route("posts.store")}}' method='POST' enctype="multipart/form-data">
                @csrf

                @if($errors->any())
                    {{implode('', $errors->all('<div>:message</div>'))}}
                @endif

                <div class="form-group">
                    <label>{{ __('Titel') }}</label>
                    <input type="text" name="title" value="{{old('title')}}" required autofocus>
                </div>

                <div class="form-group">
                    <label>{{ __('Caption') }}</label>
                    <input type="text" name="caption" value="{{old('caption')}}">
                </div>

                <div class="form-group">
                    <label>{{ __('Foto') }}</label>
                    <input type="file" name="pic" value="{{old('pic')}}">
                </div>

                <div>
                    <div>Is deze foto 21+?</div>
                    <input type="checkbox" name="save" value="{{old('save')}}">
                </div>

                <button type="submit" class="button buttonBlue">{{ __('Upload') }}
                    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                </button>
            </form>
        </div>
    </div>
@endsection