@extends('layouts.hotelapp')
@section('title', 'Reservation.add')

@section('menubar')
    @parent
    ご予約画面
@endsection

@section('content')
    @if (count($errors) > 0)
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- <p>お名前: </p>
    <p>{{ $item->customers->name }}</p> --}}
    <form action="/reservation/add" method="post">
        <table>
            <table>
                @csrf
                <tr>
                    <th></th>
                    <td><input type="hidden" name="customer_id" value="customer_id">名様</td>
                </tr>
                <tr>
                    <th>ご宿泊人数: </th>
                    <td><input type="number" name="num_customers" value="{{ old('num_customers') }}">名様</td>
                </tr>
                <tr>
                    <th>お部屋の数: </th>
                    <td><input type="number" name="num_rooms" value="{{ old('num_rooms') }}">室</td>
                </tr>
                <tr>
                    <th>お部屋のタイプ: </th>
                    <td><input type="radio" name="roomtype_id" value="1" checked>スタンダード
                        <input type="radio" name="roomtype_id" value="2">デラックス
                        <input type="radio" name="roomtype_id" value="3">スィート
                    </td>
                </tr>

                <tr>
                    <th>ご到着日: </th>
                    <td><input type="date" name="checkin" value="{{ old('checkin') }}"></td>
                </tr>
                <tr>
                    <th>ご出発日: </th>
                    <td><input type="date" name="checkout" value="{{ old('checkout') }}"></td>
                </tr>
                <tr>
                    <th>ご要望など: </th>
                    <td><input type="text" name="note" value="{{ old('note') }}"></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="確定"></td>
                </tr>


            </table>

        @endsection

        @section('footer')
            copyright 2023　NakagaWorld
        @endsection
