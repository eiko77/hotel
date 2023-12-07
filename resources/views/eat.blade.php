<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KIKI -食-</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           html {
                background-image: url(img/forest1.jpg);
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
                height: 250vh;
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
                text-align: left;
            }

            .title {
                font-size: 50px;
            }
            
            .container{
                display: flex;
            }

            img{
                width: 250px;
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

            .logo  {
                margin-top: 25px; 
                margin-left: 25px;           
                margin-bottom: 40px;       
                width: 120px;
            }

            figure {
                margin-top: 40px;
                font-size: 14px;
            }
            .msg{
                margin-left: 25px;
                margin-top: 0;
            }
            .garlley_box{
                margin-left: 30px
            }
            .to_top{
               font-size: 15px;
               margin: 25px,0,25px,0;
              }
            
       
        </style>
    </head>
    <body>
       <div class=to_top><a href="/" >Topページへ戻る</a></div> 
            <img src="{{ url('img/logo_gr.png') }}" alt="KIKI SHIRETOKO" class="logo">
        <div class="msg">
            <h3>世界に誇る知床の食　極上の時間をあなたに</h3>
            <div>オホーツクの恵み北海道産の食材をふんだんに使ったお食事をお楽しみください。</div>
            <div>オールインクルーシブとして滞在中のお食事、お飲み物は、すべて宿泊料金に含まれています。</div>
        </p>
            <div class="content">
            
                <div class="garlley_box container">
                <figure><img src="{{ url('img/kani.jpg') }}" alt="">
                    <figcaption>道東の自慢は海産物。旬の素材をふんだんに仕入れています。</figcaption>
                </figure>

                

                <figure><img src="{{ url('img/dinner4.jpg') }}" alt="">
                    <figcaption>こだわりの素材のみ使用。野菜は無農薬だけを使っています。</figcaption>
                </figure>
            </div> 
            <a href="/" class=to_top>Topページへ戻る</a>      
              </div>
            </div>
        </div>
    </body>
</html>
