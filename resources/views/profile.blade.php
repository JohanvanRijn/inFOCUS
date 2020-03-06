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
            <a href={{route('profileHome')}}>Posts</a>
            <a>Recenties</a>
            <a href={{route('profileEdit')}}>Bewerken</a>
        </div>
        <div class="content">
            <div class="posts">
                <div class="postContainer">
                    <div class="postpicca postPic1">
                    </div>
                    <div class="postInfo">
                        <p class="postName">Test foto</p>
                        <p class="postReview">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                    </div>
                </div>
                <div class="postContainer">
                    <div class="postpicca postPic2">
                    </div>
                    <div class="postInfo">
                        <p class="postName">Slechte review</p>
                        <p class="postReview">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </p>
                    </div>
                </div>
                <div class="postContainer">
                    <div class="postpicca postPic3">
                    </div>
                    <div class="postInfo">
                        <p class="postName">Pipo de clown</p>
                        <p class="postReview">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </p>
                    </div>
                </div>
                <div class="postContainer">
                    <div class="postpicca postPic4">
                    </div>
                    <div class="postInfo">
                        <p class="postName">Volgende rij</p>
                        <p class="postReview">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">

    </div>
@endsection
