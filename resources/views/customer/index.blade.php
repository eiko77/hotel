@extends('layouts.hotelapp')
@section('title','Customer.index')

@section('menubar')
@parent
お客様情報
@endsection

@section('content')

@if(Auth::check())
<p>USER:{{$user->name . '(' . $user->email . ')'}}</p>
@else
<P>※ログインしていません(<a href="/login">ログイン</a>
    <a href="/register">登録</a>)</p>
    
@endif

<table>
    <th>お客様ID</th>
    <th>お名前</th>
    <th>ご住所</th>
    <th>お電話番号</th>
    <th>メールアドレス</th>
{{-- @foreach ($items as $item) --}}
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}　様</td>
    <td>{{$item->address}}</td>
    <td>{{$item->telephone}}</td>
    <td>{{$item->mail}}</td>
</tr>
{{-- @endforeach         --}}
</table>

@endsection

@section('footer')
copyright 2023　NakagaWorld
@endsection