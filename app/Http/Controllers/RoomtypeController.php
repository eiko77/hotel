<?php

namespace App\Http\Controllers;
use App\Roomtype;
use App\Reservation;
use App\Reservation_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomtypeController extends Controller
{
    public function index(Request $request)
    {
          // 全てのRoomtypeアイテムを読み込む
        $items = Roomtype::all();

        $hasRoomItems = Roomtype::has('rooms')->get();

        $hasReservationItems = Roomtype::has('reservations')->get();

        
        $param =[
            'items' => $items,
            'room_items' => 
            $hasRoomItems,
            'reservation_items' => $hasReservationItems,

        ];
        return view('roomtype.index',$param);
    
    }
}
