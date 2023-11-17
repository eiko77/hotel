<?php

namespace App\Http\Controllers;

use App\Reservation_detail;
use Illuminate\Http\Request;

class Reservation_detailController extends Controller
{
    public function index(Request $request)
    {
        $items = Reservation_detail::all();

 //reservationとつなげたい気持ちで記述
 $hasItems = Reservation_detail::has('reservations')->get();
 $param =['items' => $hasItems];
 return view('reservation_detail.index',$param);
    }
}
