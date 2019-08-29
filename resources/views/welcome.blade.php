<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                margin-top: 30px;
            }
            .links > a {
                color: #00aef9;;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-align: center;
            }
            .header-top {
                height: 50px;
                border-bottom: 1px solid #DCDCDC;
            }
            .header-middle {
                height: 120px;
                text-align: center;
                padding: 30px 0 0 0;
            }
            .header-bottom {
                height: 70px;
                background-color: #ea1e10bd;
                text-align: center;
            }
            .category {
                color: white;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            p {
                margin: 0 0 0 0;
                padding: 0 0 0 0;
            }
            .title-top {
                color: black;
                font-size: 25px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="header-top">
                    <img height="50" width="200" src="https://gooyaabitemplates.com/download/Free-Blogger-Templates.png" alt="Blogger Templates" style="max-height: 88px;">
                    <div class="top-right links">
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="#"><i class="fa fa-paint-brush" aria-hidden="true"></i>By Styles</a>
                                <a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i>By Features</a>
                                <a href="#"><i class="fa fa-paperclip" aria-hidden="true"></i>By Topics</a>
                                <a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                @endif
                            @endauth
                    </div>
                </div>
                <div class="header-middle">
                    <p class="title-top">THE FUNC</p>
                    <p class="title-bottom">The Func Blogger Template</p>
                </div>
                <div class="header-bottom">
                    <label class="category">Choose category from here</label>
                </div>
            @endif
            <div>
                <a href="/welcome">Posts</a>
            </div>
        </div>
    </body>
</html>
