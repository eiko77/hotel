@extends('layouts.hotelapp')
@section('title','Reservation.index')

@section('menubar')
@parent
ご予約情報
@endsection

@section('content')
{{-- test --}}
@if(Auth::check())



<table>
    <th>ご予約ID</th>
    <th>お客様名</th>
    <th>ご予約人数</th>
    <th>お部屋のタイプ</th>
    <th>お部屋の数</th>
    <th>ご到着予定日</th>
    <th>ご出発予定日</th>
    <th>ご要望など</th>
@foreach ($items as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->customers->name}}</td>
    <td>{{$item->num_customers}}</td>
    <td>{{$item->num_rooms}}</td>
    <td>{{$item->roomtypes->room_type}}</td> 
    <td>{{$item->checkin}}</td>
    <td>{{$item->checkout}}</td>
    <td>{{$item->note}}</td>
</tr>
@endforeach        
</table>
{{-- if文終了 --}}
@endif

@endsection

@section('footer')
copyright 2023　NakagaWorld
@endsection