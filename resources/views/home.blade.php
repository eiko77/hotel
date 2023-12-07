@extends('layouts.app')

@section('content')
<div class="container">
    <div class="logo">
        <img src="{{ url('img/logo_gr.png') }}" alt="KIKI SHIRETOKO">
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Laravelホテル　会員画面</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    現在、ログインしています。
                
            <div class="container2">
            <div class="d-grid gap-2">
                <a href="customer/add"><button type="button" class="btn btn-success btn-lg display-6"> ホテルのご予約へ</button></a>
             </div>
          
             <div class="d-grid gap-2">
                <a href="reservation/"><button 
                    type="button" class="btn btn-outline-success btn-lg"> ご予約履歴</button></a>
             </div>

             {{-- <div class="d-grid gap-2">
                <a href="customer/"><button 
                    type="button" class="btn btn-outline-success btn-lg"> 会員登録内容</button></a>
             </div> --}}
             <div class="d-grid gap-2">
                
             <a href="customer/add"><button 
                type="button" class="btn btn-success btn-lg">新規会員登録</button></a>
             </div>

            </div>
                
        </div>
        <a href="/" class=to_top>ログイン状態で、Topページへ戻る</a>
            </div>
        </div>
    </div>
</div>
@endsection
