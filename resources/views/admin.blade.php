<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- //Bootstrap 開始--}}
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script> --}}
        {{-- //Bootstrap ここまで--}}

        <title>Management 
            System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: lightblue;
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
                text-align: left;
            }

            .title {
                font-size: 30px;
            }

        

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
               
                text-align: left;
                margin-left: 20px;
            }

            .btn {
            
             border:1px solid darkgray;
             border-radius: 3px;
             background-color: rgb(160, 156, 156);
             color: white;
             width: 180px;
             height: 45px;
             margin-bottom: 20px;
             font-size: 15px
         }

            .logo img {
            width: 150px;  
            margin-left: 18px;
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
                        <a href="{{ route('login') }}">管理者Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register_デモ操作用</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="logo">
                    <img src="{{ url('img/logo_gr.png') }}" alt="KIKI SHIRETOKO">
                </div>
               
                <div class="title m-b-md">
                    Hotel Management 
                    System
                    <hr>
                </div>
                <br>
                <br>

                <div class="links">
                   
                    <a href="reservation/"><button 
                        type="button" class="btn btn-secondary btn-lg">予約一覧</button></a>
                    <a href="reservation_detail/"><button 
                        type="button" class="btn btn-outline-success btn-lg">予約詳細一覧 </button></a>
                        <a href="room/"><button 
                            type="button" class="btn btn-outline-success btn-lg">部屋番号一覧</button></a>
                            <a href="roomtype/"><button 
                                type="button" class="btn btn-outline-success btn-lg">料金一覧</button></a>
                    <a href="customer/"><button 
                        type="button" class="btn btn-outline-success btn-lg" style="color: red">会員情報一覧（工事中）</button></a>
                        <a href="reservation/"><button 
                            type="button" class="btn btn-secondary btn-lg"style="color: red">検索（工事中）</button></a> <a href="reservation_detail/edit"><button 
                                type="button" class="btn btn-secondary btn-lg"style="color: red">入力（工事中）</button></a>
                        <a href="/"><button 
                            type="button" class="btn btn-outline-success btn-lg">Hotel 公式WEB</button></a>       
                </div>
        
            </div>
        </div>
    </body>
</html>
