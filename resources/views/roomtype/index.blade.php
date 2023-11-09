@extends('layouts.hotelapp')
@section('title','Roomtype.index')

@section('menubar')
@parent
お部屋のタイプ
@endsection

@section('content')

<table>
    <th>お部屋タイプNo.</th>
    <th>お部屋タイプ</th>
    <th>ご宿泊可能人数/一室</th>
    
@foreach ($items as $item)
<tr>
    <td>{{$item->roomtype_id}}</td>
    <td>{{$item->roomtype}}</td>
    <td>{{$item->possible_num}}</td>
</tr>
@endforeach        
</table>

@endsection

@section('footer')
copyright 2020 tuyano
@endsection