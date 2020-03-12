@extends('layouts.app')

@section('content')
	
	<div class="container">
        <div class="bannerContainer">
            <div class="bannerPic" style='background-image: url("{{asset('storage/'. $user->banner_pic)}}");'>
                <div class="bannerText">
                    <div class="name_review">
                        <h1>{{$user->name}}</h1>
                        <div class="avReview">
                            <p class="postReview" style="--rating:{{$user_average}}; font-size: 34px;">
                        </div>
                    </div>
                    <p class="username">{{$user->username}}</p>                   
                        @if($user->caption == '-')
                            <p class="omschrijving"></p>
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
            </ul>
        </div>
        <div class="content">
            <div class="contentX posts" id="tab1">
                @foreach($posts as $post)
                    <a href='{{route("userPost.show", ["id" => $user->id, "postId" => $post->id])}}'>
                        <div class="postContainer">
                            <div class="postpicca" style='background-image: url("{{asset('storage/'. $post->img_path)}}");'>
                            </div>
                            <div class="postInfo">
                                <p class="postName">{{$post->title}}</p>
                                    <p class="postReview" style="--rating:{{$post->img_rating}}">
                                </p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="contentX recenties" id="tab2">
                <h1>RECENTIES</h1>
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
