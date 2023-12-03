@extends('layouts.hotelapp')
@section('title','Roomtype.index')

@section('menubar')
@parent
お部屋のタイプ
@endsection

@section('content')

<div class="msg">
    <h3>【 お部屋のご利用時間 】</h3>
    <div>・チェックイン可能時間 　 　１４時〜</div>
    <div>・チェックアウト可能時間 　　〜１１時</div>
    <small>当ホテルは、オールインクルーシブシステムとなっております。<br>
    宿泊料金には滞在中のお食事、お飲み物がすべて含まれております。</small>
    <small>※一部のお飲み物、特別料理などの有料オプションもありますので、<br>ご希望やご要望などがございましたら、ホテルまで事前にお申し付けください。</small>
    <hr>
</div>
@foreach ($items as $item)
<table>
    <th>お部屋タイプNo.</th>
    <th>お部屋のタイプ名</th>
    <th>ご宿泊可能人数/一室</th>
    <th>お部屋の料金/1名様</th>
    <th>お部屋のイメージ</th>

<tr>
    <td>{{$item->id}}</td>
    <td>{{$item->room_type}}</td>
    <td>{{$item->possible_num}}名様</td>
    <td>{{$item->room_price}}円/1名</td>
    <td><img src="{{ url('img/room_'.$item->id.'.jpg') }}" alt="" width="150px"></td>
   </tr>
@endforeach        
</table>

@endsection
<a href="/" class=to_top>Topページへ戻る</a>
<div class="logo">
    <img src="{{ url('img/logo_gr.png') }}" alt="KIKI SHIRETOKO">
</div>


    
@section('footer')
copyright 2023　NakagaWorld
@endsection


