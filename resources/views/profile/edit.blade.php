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
        <div class="bannerContainer">
            <div class="bannerPic">
                <div class="bannerText">
                    <div class="name_review">
                        <h1>{{$user->name}}</h1>
                        <div class="avReview">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p class="username">mika_JEMJ</p>
                    <p class="omschrijving">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
            <div class="profilePicContainer">
                <div class="profilePic"></div>
            </div>
        </div>
        <div class="menu">
            <a href={{route('profileHome')}}>Posts</a>
            <a>Recenties</a>
            <a href={{route('profileEdit')}}>Bewerken</a>
        </div>
        <div class="content">
            <form action='{{route("profileUpdate")}}' method='POST'>
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label>{{ __('Name') }}</label>
                    <input type="text" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>
                </div> 

                <div class="form-group">
                    <label>{{ __('E-Mail Address') }}</label>
                    <input type="email" name="email" value="{{$user->email}}" required autocomplete="email">
                </div>

                <div class="form-group">
                    <label>{{ __('Caption') }}</label>
                    <input type="text" name="caption" value="{{$user->caption}}" required autocomplete="caption">
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
