<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Reservation_detail;
use Illuminate\Http\Request;

//index
class Reservation_detailController extends Controller
{
    public function index(Request $request)
    {
        $Reservation_detailItems = Reservation_detail::all();
        return view('reservation_detail.index', ['items' => $Reservation_detailItems]);

        //reservationとつなげたい気持ちで記述
        $hasReservationItems = Reservation_detail::has('reservations')->get();
        $param = ['reservation_items' => $hasReservationItems];
        return view('reservation_detail.index', $param);



        //roomtypeとつなげたい気持ちで記述
        $hasRoomtypeItems = Reservation_detail::has('roomtypes')->get();
        $param = ['roomtype_items' => $hasRoomtypeItems];
        return view('reservation_detail.index', $param);

        //roomとつなげたい気持ちで記述
        $hasRoomItems = Reservation_detail::has('rooms')->get();
        $param = ['room_items' => $hasRoomItems];
        return view('reservation_detail.index', $param);
    }






}
