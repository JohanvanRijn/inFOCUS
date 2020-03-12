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
            <div class="bannerPic" style='background-image: url("{{asset('storage/'. $user->banner_pic)}}");'>
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
                    <p class="username">{{$user->username}}</p>                   
                        @if($user->caption == '-')
                            <p class="omschrijving"> Klik <div onclick='openTab(3, this);' class='omschrijving' style='color: blue;'>hier</div> om je caption toe te voegen!
                            </p>
                        @else 
                            <p class="omschrijving"> 
                                {{$user->caption}} 
                            </p>
                        @endif          
                </div>
            </div>
            <div class="profilePicContainer">
                <div class="profilePic" style='background-image: url("{{asset('storage/'. $user->profile_pic)}}")'></div>
            </div>
        </div>
        <div class="menu">
            <ul class="tabs">
                <li @if(!isset($_GET['tab']) || $_GET['tab'] == 1) @endif class="active" onclick="openTab(1, this);">Posts</li>
                <li @if(!isset($_GET['tab']) || $_GET['tab'] == 2) @endif class="active" onclick="openTab(2, this);">Recenties</li>
                <li @if(!isset($_GET['tab']) || $_GET['tab'] == 3) @endif class="active" onclick="openTab(3, this);">Bewerken</li>
            </ul>
            <a href='{{route("posts.create")}}'>+</a>
        </div>
        <div class="content">
            <div class="contentX posts" id="tab1">
                @foreach($posts as $post)
                    <div class="postContainer">
                        <a href='{{route("posts.show", $post->id)}}'>
                            <div class="postpicca" style='background-image: url("{{asset('storage/'. $post->img_path)}}");'>
                            <div class="postOverlay">
                                <div class="postCaption">
                                    {{$post->caption}} 
                                </div>
                            </div>
                            </div>
                            <div class="postInfo">
                                <p class="postName">{{$post->title}}</p>
                                <p class="postReview">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="contentX recenties" id="tab2">
                <h1>RECENTIES</h1>
            </div>
                <div class="contentX bewerken" id="tab3">
            <h1>{{$user->name}}</h1>

            <div>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td>Gebruikers Naam</td>
                        <td>{{$user->username}}</td>
                    </tr>
                    <tr>
                        <td>Leeftijd</td>
                        <td>{{$user->age}}</td>
                    </tr>
                </table>

                <a href='{{route("profile.edit")}}'>Edit je profiel Hier</a>
            </div>
        </div>  
    </div>

    <script>
    $(document).ready(function() {
        $('.contentX').hide();
        //direct naar tabblad door /tabladnaam/ achter url
        @if(!isset($_GET['tab'])) $('.contentX:first').show(); @endif
        @if(isset($_GET['tab'])) openTab("{{ $_GET['tab'] }}", this) @endif

        var url = window.location.pathname;
        var get = url.substr(url.lastIndexOf('/') + 1);

        switch (get) {
            case "posts":
                openTab("1", this);
                $('.tabs li:nth-child(1)').addClass('active');
                break;
            case "recenties":
                openTab("2", this);
                $('.tabs li:nth-child(2)').addClass('active');
                break;
            case "bewerken":
                openTab("3", this);
                $('.tabs li:nth-child(3)').addClass('active');
                break;
            default:
                text = "No value found";
                console.log(text);
        }
    });  
    function openTab(id, elem) {
        $('.contentX').hide();
        if(elem != "false") {
            $('.tabs li').removeClass('active');
            $(elem).addClass('active');
        }
        $('#tab'+id).show();
    }
    </script>
@endsection
