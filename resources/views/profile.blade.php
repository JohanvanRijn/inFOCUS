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
                        <h1>{{$user->name}} {{$user->lastname}}</h1>
                        <div class="avReview">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <p class="username">{{$user->username}}</p>
                    <p class="omschrijving">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
            <div class="profilePicContainer">
                <div class="profilePic"></div>
            </div>
        </div>
        <div class="menu">
            <a>Posts</a>
            <a>Recenties</a>
            <a>Bewerken</a>
        </div>
        <div class="content">

        </div>
        <div class="footer">

        </div>
    </div>
@endsection
