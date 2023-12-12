<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
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
                width: 50px;
               
            }

            td{
                border: solid 1px #aaa;
                padding: 5px 10px;
                background-color: white;
                width: 200px;
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

            .table-bordered  {
                font-size: 12px;
            }

            .table2 {
                width: 1000px;
                height: 100px;
            }

            .table1 {
                width: 600px;
                height: 100px;
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