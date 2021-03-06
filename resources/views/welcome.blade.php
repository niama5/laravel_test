<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        
        
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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>   
                        <a href="{{ url('/submit') }}">Nowy link</a>
                    @else                        
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>                                            
                    @endauth
                    <a href="{{ url('testgrid') }}">TestGrid</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

<!--                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>-->

            <div class="links  jumbotron">
                @foreach ($links as $link)
                    <a href="{{ $link->url }}">{{ $link->title }}</a>
                @endforeach
                
               
            </div>

            <div class="row">
                   @foreach ($tests as $test)
                   <div class="col"><label>"{{ $test->id }}" - {{ $test->nazwa }}</label></div>
                   @endforeach
            </div>

            </div>
        </div>
    </body>
</html>

<?php
function getConn($db)
{
	$uid = "sa";
	$pwd = "haslo2";
	//$uid = "test";
	//$pwd = "test";
	$connectionInfo = array("UID" => $uid, "PWD" => $pwd, "Database"=>$db);
	$serverName = "127.0.0.1\mojsql";
	//$serverName = "uks-v-21-400\sqlexpress";
	
	
	return sqlsrv_connect( $serverName, $connectionInfo);
}
//phpinfo();
 //$z = getConn("laravel");

?>