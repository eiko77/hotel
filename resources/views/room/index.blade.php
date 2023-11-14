@extends('layouts.hotelapp')
@section('title', 'Room.index')

@section('menubar')
    @parent
    お部屋一覧
@endsection

@section('content')

    <table>
        <tr>
            <th>No.</th>
            <th>お部屋のタイプ</th>
            <th>お部屋番号</th>
           
               </tr>

        @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                {{-- 外部キーデータ1件取得の試み --}}
                <td>{{ $item->roomtypes->room_type }}</td>
                <td>
                    <table width="100%">
                        <tr>
                            <td>{{ $item->room_no }}</td>
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
