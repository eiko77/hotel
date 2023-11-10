@extends('layouts.hotelapp')
@section('title','Customer.index')

@section('menubar')
@parent
お客様情報
@endsection

@section('content')

<table>
    <th>お客様ID</th>
    <th>お名前</th>
    <th>ご住所</th>
    <th>お電話番号</th>
@foreach ($items as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->name}}</td>
    <td>{{$item->address}}</td>
    <td>{{$item->telephone}}</td>
</tr>
@endforeach        
</table>

@endsection

@section('footer')
copyright 2020 tuyano
@endsection