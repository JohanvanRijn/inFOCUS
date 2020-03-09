@extends('layouts.app')

@section('content')
	<!-- <h1>TESTJE</h1>
	<table>
		<tr>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
		</tr>
	</table> -->
	<div class="container">

        <div class="content">
            <form action='{{route("profileUpdate")}}' method='POST' enctype="multipart/form-data">
                @method('PUT')
                @csrf

                @if($errors->any())
                    {{implode('', $errors->all('<div>:message</div>'))}}
                @endif

                <div class="form-group">
                    <label>{{ __('Name') }}</label>
                    <input type="text" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>
                </div>

                <div class="form-group">
                    <label>{{ __('Caption') }}</label>
                    <input type="text" name="caption" value="{{$user->caption}}" required autocomplete="caption">
                </div>

                <div class='form-group' style='width: calc(33% - 10px); float: left; margin-right: 20px'>
                    <label>{{ __('Profiel Foto') }}</label>
                    <input type='file' name='profile_pic'>
                </div>

                <div class='form-group' style='width: calc(33% - 10px); float: left; margin-right: 20px' >
                    <label>{{ __('Banner Foto') }}</label>
                    <input type='file' name='banner_pic'>
                </div>


                <div class='form-group' style='width: calc(33% - 10px); float: left'>
                    <label>{{ __('Leeftijd') }}</label>
                    <input type="date" name="age" value="{{$user->age}}" required>
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
