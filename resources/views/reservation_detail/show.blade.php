@extends('layouts.hotelapp')
@section('title','Reservation_detail.show')

@section('menubar')

@parent
予約詳細 データ抽出（管理者用）
@endsection

@section('content')

<table class="table table-bordered" >
 <p>No. {{$item->id}}</p>

        <th scope="col">ご予約ID</th> <td>{{$item->reservation_id}}</td>
    </tr> <tr>
        <th scope="col">お名前</th> <td>{{$item->reservations->customers->name}} 様</td>
    </tr> <tr>
        <th scope="col">ご住所</th>  <td>{{$item->reservations->customers->address}}</td>
    </tr> <tr>
        <th scope="col">お電話番号</th> <td>{{$item->reservations->customers->telephone}}</td>
    </tr> <tr>

    <tr><th>ご宿泊人数</th><td>{{$item->reservations->num_customers}}名</td>  
    </tr> <tr>
        <th>お部屋の数</th> <td>{{$item->reservations->num_rooms}}室</td>
    </tr> <tr>
        <th>お部屋タイプ</th> <td>{{$item->reservations->roomtypes->room_type}}</td>
    </tr> <tr>   
        <th>チェックイン</th>  <td>{{$item->reservations->checkin}}</td>
    </tr> <tr>  
        <th>チェックアウト</th>  <td>{{$item->reservations->checkout}}</td> 
    </tr>
    <th><td></td></th>
    <tr>  
        <th>お部屋番号 </th>  
        <td>{{$item->rooms->room_no}}号室</td>
    </tr>
    <tr>
         <th>ご宿泊料金</th> <td>{{$item->hotel_fee}}円/税抜</td>
         <th>その他の料金</th>  <td>{{$item->other_charge}}円/税抜</td><th>内訳詳細</th><td>{{$item->details}}</td>
    </tr>    
<tr><th>ご請求料金</th> <td >計  {{$item->total_amount}}円</td>
    <th>内消費税</th> <td>{{$item->tax}}円　［消費税率　10%］</td>
</tr>
<hr>          
</table>
@endsection

@section('footer')
copyright 2023　NakagaWorld
@endsection