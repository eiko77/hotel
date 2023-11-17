@extends('layouts.hotelapp')
@section('title','Roomtype.index')

@section('menubar')
@parent
お部屋のタイプ
@endsection

@section('content')

<table>
    <th>お部屋タイプNo.</th>
    <th>お部屋のタイプ名</th>
    <th>ご宿泊可能人数/一室</th>
    <th>お部屋の料金/1名</th>
@foreach ($items as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->room_type}}</td>
    <td>{{$item->possible_num}}名様</td>
    <td>{{$item->room_price}}</td>
   </tr>
@endforeach        
</table>

@endsection

@section('footer')
copyright 2023　NakagaWorld
@endsection