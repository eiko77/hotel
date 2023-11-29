<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        //下記２行を消すとエラーになるから注意
        $ReservationItems = Reservation::all();
        return view('reservation.index', ['items' => $ReservationItems]);

        //入力後　表示させたい
        if (isset($request->id)) {
            $param = ['id' => $request->id];
            $ReservationItems = DB::select('select * from reservations where id = :id', $param);
        } else {
            $ReservationItems = DB::select('select * from reservations');
        }
        return view('reservation.index', ['items' => $ReservationItems]);

        //customerとつなげたい気持ちで記述
        $hasCustomerItems = Reservation::has('customers')->get();
        $param = ['customer_items' => $hasCustomerItems];
        return view('reservation.index', $param);

        //roomtypeとつなげたい気持ちで記述
        $hasRoomtypeItems = Reservation::has('roomtypes')->get();
        $param = ['roomtype_items' => $hasRoomtypeItems];
        return view('reservation.index', $param);
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
        if (is_null($form['note'])) {
            $form['note']="";   
        };
        $reservation->fill($form)->save();
        return redirect('/reservation');

    }
}
        // //ここから試し
        // isset($form['_token']);
        // $param = [
        //     'customer_id' => $request->customer_id,
        //     'num_customers' => $request->num_rooms,
        //     'num_rooms' => $request->num_rooms,
        //     'roomtype_id' => $request->roomtype_id,
        //     'checkin' => $request->checkin,
        //     'checkout' => $request->checkout,
        //     'note' => $request->note,
        // ];
        // DB::table('reservations')->insert($param);
        // return redirect('/reservation');
    

    // DB::insert('insert into reservations(customer_id,num_customers,num_rooms,roomtype_id,checkin,checkout,note) values(customer_id,num_customers,num_rooms,checkin,checkout,note',$param);
    // return redirect('/reservation');




    // //  customerとroomtypeの設定をかく

    // // DB::insert('insrt into reservations(num_customers,num_rooms,roomtype_id,checkin,checkout,note) values(num_customers,num_rooms,roomtype_id,checkin,checkout,note)',$param);

    // return redirect('/reservation');

    //  $this->validate($request, Reservation::$rules);
    //  $reservation = new Reservation;
    //  $form = $request->all();

    //  unset($form['_token']);

    //  $reservation->fill($form)->save();
    //  return redirect('/reservation');


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

