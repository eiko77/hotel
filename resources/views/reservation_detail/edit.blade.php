@extends('layouts.hotelapp')
@section('title','Reservation_detail.edit')

@section('menubar')
@parent
部屋番号入力（管理者用）
@endsection

@section('content')

<form action="reservation_detail/edit" method="post">
<table>

    <input type="hidden" name="id" value="{{$form->id}}"> 
    <tr>
        <th>ご予約ID</th>
        <td><input type="text" name="reservation_id" 
            value="{{$form->reservation_id}}"></td>
        <th>お名前</th> 
        <td><input type="text" name="name" 
        value="{{$form->name}}"></td>
    </tr> 
    <tr>
        <th>ご住所</th> 
        <td><input type="text" name="adrress" 
            value="{{address}}"></td>
        <th>お電話番号</th>
        <td><input type="text" name="telephone" 
            value="{{telephone}}"></td>
    </tr>
    <tr>
        <th>ご宿泊人数</th>
        <td><input type="number" name="num_customers" 
            value="{{num_customers}}"></td>
        <th>お部屋の数</th>
        <td><input type="number" name="num_rooms" 
            value="{{num_rooms}}"></td>
        <th>お部屋タイプ</th> 
        <td><input type="text" name="room_type" 
            value="{{room_type}}"></td>
    </tr> 
    <tr>   
        <th>チェックイン</th>
        <td><input type="date" name="checkin" 
            value="{{checkin}}"></td>
        <th>チェックアウト</th> 
        <td><input type="date" name="checkout" 
            value="{{checkout}}"></td>
    </tr>
    <tr>  
        <th>お部屋番号 </th>  
        <td><input type="text" name="room_no" 
            value="{{room_no}}"></td>
    </tr><tr>
         <th>ご宿泊料金</th> 
         <td><input type="number" name="hotel_fee" 
            value="{{hotel_fee}}"></td>
         <th>その他の料金</th> 
         <td><input type="number" name="other_charge"
            value="{{other_charge}}"></td>       
         <th>内訳詳細</th>
            <input type="text" name="details" 
         value="{{details}}"></td>
          </tr>    
          <tr><th>ご請求料金</th>
          <td><input type="number" name="total_amount" 
          value="{{total_amount}}"></td>
          <th>内消費税</th>
          <td><input type="number" name="tax" 
           value="{{tax}}"></td>
           </tr>
           <tr><th></th><td><input type="submit" value="send"></td>
        </tr>        
</table>
</form>

@endsection
@section('footer')
copyright 2023　NakagaWorld
@endsection