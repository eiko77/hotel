<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $items = Reservation::all();
        return view('reservation.index', ['items' => $items]);

        //customerとつなげたい気持ちで記述
        $hasCustomerItems = Reservation::has('customers')->get();
        $param =['customer_items' => $hasCustomerItems];
        return view('reservation.index',$param);

        //roomtypeとつなげたい気持ちで記述
        $hasRoomtypeItems = Reservation::has('roomtypes')->get();
        $param =['roomtype_items' => $hasCustomerItems];
        return view('reservation.index',$param);
    }

    public function add(Request $request)
    {
         return view('reservation.add');
    }

    public function create(Request $request)
    {
         $this->validate($request, Reservation::$rules);
         $reservation = new Reservation;
         $form = $request->all();

         unset($form['_token']);

         $reservation->fill($form)->save();
         return redirect('/reservation');
     }

    // public function delete(Request $request)
    // {
    //     $customer = Customer::find($request->id);
    //     return view('customer.del', ['form' => $customer]);
    // }

    // public function remove(Request $request)
    // {
    //     Customer::find($request->id)->delete();
    //     return redirect('/customer');
    // }


    // public function edit(Request $request)
    // {
    //     $rental = Customer::find($request->id);
    //     return view('rental.edit', ['form' => $rental]);
    // }

    // public function update(Request $request)
    // {
    //     $this->validate($request, Customer::$rules);
    //     $rental = Customer::find($request->id);
    //     $form = $request->all();
    //     unset($form['_token']);
    //     $rental->fill($form)->save();
    //     return redirect('/rental');
    // }

    // public function find(Request $request)
    // {
    //     return view('rental.find', ['input' => '']);
    // }

    // public function search(Request $request)
    // {

    //     // // 完全一致検索（原始的方法）
    //     $item = Customer::where('bookname', $request->input)->first();
    //     $param = ['input' => $request->input, 'item' => $item];

    //     return view('rental.find', $param);
    // }

    // public function show(Request $request)
    // {
    //     $bookname= $request ->bookname;
    //     $items = Customer::table('rentals')
    //     ->where('bookname','like','%'.$bookname.'%')
    //     ->get();
    //     return view('rental.show', ['items' => $items]);
    // }
}
