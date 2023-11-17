@extends('layouts.hotelapp')
@section('title','Reservation_detail.index')

@section('menubar')
@parent
ご予約詳細
@endsection

@section('content')

<table>
    <th>ご予約詳細No.</th>
    <th>ご予約ID</th>
    <th>お客様名</th>
    {{-- <th>お部屋番号</th> --}}
    {{-- <th>お部屋タイプ</th> --}}
    <th>ご宿泊予定日</th>
    <th>ご宿泊料金</th>
   
@foreach ($items as $item)
<tr>
    <td>{{$item->id}}</td>
    {{-- 外部キーデータ1件取得--}}
    <td>{{$item->reservations->reservation_id}}</td>
    <td>{{$item->reservations->name}}</td>
    {{-- <td>{{$item->room_id}}</td> --}}
    
    {{-- <td>{{$item->room_type}}</td> --}}
    <td>{{$item->accom_date}}</td>
    <td>{{$item->accom_fee}}円</td>
</tr>
@endforeach        
</table>

@endsection

@section('footer')
copyright 2023　NakagaWorld
@endsection