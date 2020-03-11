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
            <div class="bannerPic" style='background-image: url("{{asset('storage/'. $user->profile_pic)}}");'>
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
                <div class="profilePic" style='background-image: url("storage/{{$user->profile_pic}}")'></div>
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
                    <a href='{{route("posts.show", $post->id)}}'>
                        <div class="postContainer">
                            <div class="postpicca" style='background-image: url("storage/{{$post->img_path}}");'>
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
                        </div>
                    </a>
                @endforeach
                <!-- <div class="postContainer">
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
                </div> -->
            </div>
            <div class="contentX recenties" id="tab2">
                <h1>RECENTIES</h1>
            </div>
                <div class="contentX bewerken" id="tab3">
                <!-- <form action='{{route("profile.update")}}' method='POST'>
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
                    <input type="caption" name="caption" value="{{$user->caption}}" required autocomplete="caption">
                </div>

                <button type="submit" class="button buttonBlue">{{ __('Update') }}
                    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                </button>
                </form>
            </div> -->

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
    <div class="footer">

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
