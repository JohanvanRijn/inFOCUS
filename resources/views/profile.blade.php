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
            <ul class="tabs">
                <li @if(!isset($_GET['tab']) || $_GET['tab'] == 1) @endif class="active" onclick="openTab(1, this);">Posts</li>
                <li @if(!isset($_GET['tab']) || $_GET['tab'] == 2) @endif class="active" onclick="openTab(2, this);">Recenties</li>
                <li @if(!isset($_GET['tab']) || $_GET['tab'] == 3) @endif class="active" onclick="openTab(3, this);">Bewerken</li>
            </ul>
        </div>
        <div class="content">
            <div class="contentX posts" id="tab1">
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
            <div class="contentX recenties" id="tab2">
                <h1>RECENTIES</h1>
            </div>
            <div class="contentX bewerken" id="tab3">
                <h1>BEWERKEN</h1>
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
