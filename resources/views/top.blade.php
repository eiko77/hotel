<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KIKI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html {
                background-image: url(img/forest2.jpg);
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            body {
                background-color: #f1f1e8;
                background-position: center;
                opacity: 0.9;
                margin-top: 40px;
                margin-left: 60px;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                width: 90%;
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
                font-size: 50px;
            } 

            img{
                width: 200px;       
            }

            .card {
                margin: 15px;
            }
            .card-text {
                text-align: left;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            margin-bottom: 20px;
            }

            .m-b-md {
                margin-top: 10px;
                margin-bottom: 30px;
               
                text-align: left;
                margin-left: 20px;
              
            }
            .container2 {
                display: flex;
                justify-content: space-around;
            }
            .btn {         
                opacity: 1;
                border:1px solid darkgray;
                border-radius: 6px;
                color:darkgreen;
                width: 120px;
                height: 35px;
            }
       
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    <img src="{{ url('img/logo_gr.png') }}" alt="KIKI SHIRETOKO">
                </div>
         
                <div class="container2">
                <div><img src="{{ url('img/hotel1.jpg') }}" alt="">
                </div>
                <div><img src="{{ url('img/eagle.jpg') }}" alt="">
                </div>
                <div><img src="{{ url('img/bath1.jpg') }}" alt="">
                </div>
                <div><img src="{{ url('img/risu.jpg') }}" alt="">
                </div>
            </div>
            <br>
                <div class="container">
                <div class="links">
                    <a href="customer/add"><button 
                        type="button" class="btn btn-success btn-lg">新規会員登録</button></a>
                    <a href="login/"><button 
                            type="button" class="btn btn-success">ホテルご予約</button></a>
                    <a href="eat/"><button 
                        type="button" class="btn btn btn-success">お食事</button></a>
                    <a href="roomtype"><button 
                        type="button" class="btn btn btn-success">お部屋料金</button></a>
                    <a href="https://blog.laravel.com"><button 
                        type="button" class="btn btn btn-success">お知らせ（工事中）</button></a>
                    <a href="https://nova.laravel.com"><button 
                        type="button" class="btn btn btn-success">アクセス（工事中）</button></a>
                </div>
            </div>
        </div>
    </body>
</html>
