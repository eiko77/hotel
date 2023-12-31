@extends('layouts.hotelapp')
@section('title','Customer.Add')

@section('menubar')
<div class="logo">
    <img src="{{ url('img/logo_gr.png') }}" alt="KIKI SHIRETOKO">
</div>
@parent
会員登録画面
@endsection

@section('content')
@if(count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="/customer/add" method="post">
    <table class="table1">
        @csrf
            <tr><th>お名前: </th>
                <td><input type="text" name="name" value="{{old('name')}}"></td></tr>
                <tr><th>ご住所: </th>
                    <td><input type="text" name="address" value="{{old('address')}}"></td></tr>

                <tr><th>お電話番号: </th>
                        <td><input type="text" name="telephone" value="{{old('telephone')}}"></td></tr>
                        <tr><th>メールアドレス: </th>
                            <td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
                    <tr><th></th>
                        <td><input type="submit" value="登録" a href="/" class=reservation/add></td></tr>
        </table>
</form>
@endsection

<a href="/" class=to_top>Topページへ戻る</a>

@section('footer')
copyright 2023　NakagaWorld
@endsection

