<?php

namespace App\Http\Controllers;
use App\Roomtype;
use Illuminate\Http\Request;

class RoomtypeController extends Controller
{
    public function index(Request $request)
    {
        $items = Roomtype::all();

        //roomとつなげたい気持ちで記述
        $hasItems = Roomtype::has('rooms')->get();
        $param =['items' => $hasItems];
        return view('roomtype.index',$param);

        //reserveとつなげたい気持ちで記述 11/17 試行
        $hasReserveItems = Roomtype::has('reserves')->get();
        $param =['items' => $hasReserveItems];
        return view('roomtype.index',$param);
    
    }
}
