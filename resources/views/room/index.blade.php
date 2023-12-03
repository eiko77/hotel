@extends('layouts.hotelapp')
@section('title', 'Room.index')
@section('menubar')
<div class="logo">
    <img src="{{ url('img/logo_gr.png') }}" alt="KIKI SHIRETOKO">
</div>
    @parent
    お部屋一覧
@endsection

@section('content')
    <table>
        <tr>
            <th>No.</th>
            <th>お部屋のタイプ</th>
            <th>お部屋の料金</th>
            <th>宿泊可能人数/1部屋</th>
            <th>お部屋番号</th>
         </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->roomtypes->room_type }}</td>
                <td>{{ $item->roomtypes->room_price }}</td>
                <td>{{ $item->roomtypes->possible_num}}名/1部屋</td>
                <td>
                    <table width="100%">
                        <tr>
                            <td>{{ $item->room_no }}号室</td>
                        </tr>
                    </table>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyright 2023　NakagaWorld
@endsection
