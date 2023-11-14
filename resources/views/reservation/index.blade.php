@extends('layouts.hotelapp')
@section('title','Reservation.index')

@section('menubar')
@parent
ご予約情報
@endsection

@section('content')

<table>
    <th>ご予約ID</th>
    <th>お客様ID</th>
    <th>ご予約人数</th>
    <th>チェックイン</th>
    <th>チェックアウト</th>
@foreach ($items as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->customer_id}}</td>
    <td>{{$item->num_customers}}</td>
    <td>{{$item->checkin}}</td>
    <td>{{$item->checkout}}</td>
</tr>
@endforeach        
</table>

@endsection

@section('footer')
copyright 2023　NakagaWorld
@endsection