<?php

namespace App\Http\Controllers;
use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        $items = Room::all();
       
//roomtypeとつなげたい気持ちで記述
        $hasItems = Room::has('roomtypes')->get();
        // $noItems = Room::doesntHave('roomtypes')->get();
        $param =['items' => $hasItems];
        return view('room.index',$param);
    }
}
