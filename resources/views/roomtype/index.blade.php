@extends('layouts.hotelapp')
@section('title','Roomtype.index')

@section('menubar')
@parent
お部屋のタイプ
@endsection

@section('content')

<table>
    <th>お部屋タイプNo.</th>
    <th>お部屋のタイプ</th>
    <th>ご宿泊可能人数/一室</th>
    <th>お部屋イメージ</th>
@foreach ($items as $item)
<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->room_type}}</td>
    <td>{{$item->possible_num}}名様</td>
   </tr>
@endforeach        
</table>

@endsection

@section('footer')
copyright 2023　NakagaWorld
@endsection