@extends('layouts.hotelapp')
@section('title','Reservation_detail.index')

@section('menubar')
<div class="logo">
    <img src="{{ url('img/logo_gr.png') }}" alt="KIKI SHIRETOKO">
</div>
@parent

ご予約詳細
@endsection

@section('content')

@foreach ($items as $items)

<table class="table table-bordered" >
 <p>No. {{$items->id}}</p>

        <th scope="col">ご予約ID</th> <td>{{$items->reservation_id}}</td>
    </tr> <tr>
        <th scope="col">お名前</th> <td>{{$items->reservations->customers->name}} 様</td>
    </tr> <tr>
        <th scope="col">ご住所</th>  <td>{{$items->reservations->customers->address}}</td>
    </tr> <tr>
        <th scope="col">お電話番号</th> <td>{{$items->reservations->customers->telephone}}</td>
    </tr> <tr>

    <tr><th>ご宿泊人数</th><td>{{$items->reservations->num_customers}}名</td>  
    </tr> <tr>
        <th>お部屋の数</th> <td>{{$items->reservations->num_rooms}}室</td>
    </tr> <tr>
        <th>お部屋タイプ</th> <td>{{$items->reservations->roomtypes->room_type}}</td>
    </tr> <tr>   
        <th>チェックイン</th>  <td>{{$items->reservations->checkin}}</td>
    </tr> <tr>  
        <th>チェックアウト</th>  <td>{{$items->reservations->checkout}}</td> 
    </tr>
    <th><td></td></th>
    <tr>  
        <th>お部屋番号 </th>  
        <td>{{$items->rooms->room_no}}号室</td>
    </tr>
    <tr>
         <th>ご宿泊料金</th> <td>{{$items->hotel_fee}}円/税抜</td>
         <th>その他の料金</th>  <td>{{$items->other_charge}}円/税抜</td><th>内訳詳細</th><td>{{$items->details}}</td>
    </tr>    
<tr><th>ご請求料金</th> <td >計  {{$items->total_amount}}円</td>
    <th>内消費税</th> <td>{{$items->tax}}円　［消費税率　10%］</td>
</tr>
<hr>
@endforeach              
</table>


@endsection

@section('footer')
copyright 2023　NakagaWorld
@endsection