@extends('layouts.hotelapp')
@section('title','Customer.Add')

@section('menubar')
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
    <table>
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
                        <td><input type="submit" value="登録"></td></tr>
        </table>
</form>
@endsection

@section('footer')
copyright 2023　NakagaWorld
@endsection

