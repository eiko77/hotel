<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <title>@yield('title')</title>
        <style>
            body {
                font-size: 16pt;
                color: #999;
                margin: 5px;
                background-color: #f2f5ee
            }

            h1 {
                font-size: 50px;
                text-align: right;
                color: #f6f6f6;
                margin: -20px 0px -30px 0px;
                letter-spacing: -4pt;
            }

            h3 {
                font-size: 20px;
            }
            ul {
                font-size: 30px;
                list-style: none;
               
               }
            hr {
                /* margin: 25px 100px; */
                
                border-top: 1px solid #ddd;
            }
            .menutitle {
                font-size: 50px;
                font-weight: bold;
                margin: 0px;
            }
            .content {
                margin: 10px;
            }
            .card-body {
                font-size: 15px;
                
            }
            .footer {
                text-align: right;
                font-size: 10px;
                margin: 10px;
                border-bottom: solid 1px #ccc;
                color: #ccc;
            }
           
            p {
                font-size: 15px;
            }

            th{
                background-color: #c1daae;
                padding: 10px;
            }

            td{
                border: solid 1px #aaa;
                padding: 5px 10px;
                background-color: white
            }

            
              .to_top{
               font-size: 15px;
              }

              .logo img {
            width: 120px;  
            }

            .msg{
                margin-top: 20px;
                margin-left: 25px;
                font-size: 15px;
            }
          
        </style>
    </head>
    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <h2 class="menutitle"></h2>
        <ul>
            <li>@show</li>
        </ul>
        <hr size="1">
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>