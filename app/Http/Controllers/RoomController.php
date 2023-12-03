<?php

namespace App\Http\Controllers;
use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        $items = Room::all();
       
// Roomに関連するRoomtypeアイテムを読み込む
        $hasRoomtypeItems = Room::has('roomtypes')->get();

        $params =[
            'items' => $items,

            'roomtype_items' => $hasRoomtypeItems,
        ];
        return view
        ('room.index',$params);
    }
}
