<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Reservation;
use App\Reservation_detail;
use App\Roomtype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        //下記２行を消すとエラーになるから注意
        //$ReservationItems = Reservation::all();
        $user_id = Auth::user();
        
      
        $ReservationItems=Reservation::where('customer_id',$user_id->id)->get();
     
        return view('reservation.index', ['items' => $ReservationItems]);

    }

    public function add(Request $request)
    {
        $user=Auth::user();
        $customer=Customer::where('name',$user->name)->first();
        return view('reservation.add',['id'=>$customer->id]);
        
    }

    public function create(Request $request)
    {
        
        $this->validate($request, Reservation::$rules);
        $reservation = new Reservation;
        $reservation_detail = new Reservation_detail;
        $form = $request->all();
        unset($form['_token']);

        if (is_null($form['note'])) {
            $form['note']="";   
        };
       //多対多
        //$form_reservation =$form['id','cutomer_id','num_customers','num_rooms','roomtype_id','checkin','checkout','note'];
        //$form_detail =$form['id','reservation_id','room_id','roomtype_id'];

        $reservation->fill($form)->save(); 
        //$reservation_detail->fill($form_detail)->save(); 
     
        return redirect('/reservation');
    }

   
}

        //ダーッと書く（Reservation_detailにデータを送る処理20231206
     
        // $this->validate($request, Reservation_detail::$rules);
        // $reservation_detail = new Reservation_detail;
        // $form = $request->all();
        // unset($form['_token']);
        // if (is_null($form['note'])) {
        //     $form['note']="";   
        // };
        // $reservation_detail->fill($form)->save();
//入力後　表示させたい
   //$this->validate($request, Reservation::$rules);
   
        //if (isset($request->id)) {
        //$param = ['id' => $request->id];
       
        // } else {
        //     $ReservationItems = DB::select('select * from reservations');
        // }
        // return view('reservation.index', ['items' => $ReservationItems]);

        
        //$form = $request->all();
        //unset($form['_token']);
        //if (is_null($form['note'])) {
             //$form['note']="";   
         //};
         //$reservation_detail->fill($form)->save();
    //  isset($form['_token']);
    //      $param = [
    //          'reservation_id' => $request->reservation_id,
    //          'customer_id' => $request->room_id,
    //          'num_customers' => $request->num_customers,
    //          'num_rooms' => $request->num_rooms,
    //          'roomtype_id' => $request->roomtype_id,
    //          'checkin' => $request->checkin,
    //          'checkout' => $request->checkout,
    //          'note' => $request->note,
    //      ];

    //      DB::table('reservation_details')->insert($param);
    
        //ダーッと書く_終わり

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

