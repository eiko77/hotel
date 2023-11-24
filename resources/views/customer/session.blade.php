@extends('layouts.hotelapp')
@section('title','Session')

@section('menubar')
@parent
セッションページ
@endsection

@section('content')

<p>{{section_data}}</p>
<form action="/hotel/session" method="post">
    @csrf
    <input type="text" name="input">
    <input type="submit" name="send">
@endsection

@section('footer')
copyright 2023　NakagaWorld
@endsection