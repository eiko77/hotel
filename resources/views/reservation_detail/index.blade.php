@extends('layouts.hotelapp')
@section('title','Reservation_detail.index')

@section('menubar')
@parent
ご予約詳細
@endsection

@section('content')

@foreach ($items as $item)

<table class="row_detail" >
   <br> <p>No. {{$item->id}}</p>
    <tr>
        <th>ご予約ID</th>
        <th>お名前</th>
        <th>ご住所</th>
        <th>お電話番号</th>
    </tr>
    <tr>
        <td>{{$item->reservation_id}}</td>
        <td>{{$item->reservations->customers->name}} 様</td>
        <td>{{$item->reservations->customers->address}}</td>
        <td>{{$item->reservations->customers->telephone}}</td>
    </tr>
    <tr>
        <th>お部屋の数</th>
        <th>お部屋タイプ</th>
        <th>お部屋番号 </th>
        <th>ご宿泊人数</th>
    </tr>
    <tr><td>{{$item->reservations->num_rooms}}室</td>
        <td>{{$item->reservations->roomtypes->room_type}}</td>
        <td>{{$item->rooms->room_no}}号室</td>
        <td>{{$item->reservations->num_customers}}名</td>   
    </tr>
    <tr>
         <th>チェックイン</th> 
         <th>チェックアウト</th>
         <th>ご宿泊料金</th>
         <th>その他の料金</th>
    </tr>    
    <tr>
        <td>{{$item->reservations->checkin}}</td>
        <td>{{$item->reservations->checkout}}</td>
        <td>{{$item->hotel_fee}}円/税抜</td>
        <td>{{$item->other_charge}}円/税抜</td>
    </tr> 
    <tr></tr>
    <th></th>
    <th>ご請求料金</th>
    <th>内消費税</th>
    <th>内訳詳細</th>
    
</tr>
<tr>
    <td></td>
    <td >計  {{$item->total_amount}}円</td>
    <td>{{$item->tax}}円　［消費税率　10%］</td>
    <td>{{$item->details}}</td>
    
</tr>
<hr>

    
@endforeach              
</table>


@endsection

@section('footer')
copyright 2023　NakagaWorld
@endsection