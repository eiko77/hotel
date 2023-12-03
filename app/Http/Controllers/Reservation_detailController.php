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
         // 全てのReservation_detailアイテムを読み込む
        $items = Reservation_detail::all();
      
         // Reservation_detailに関連するReservationアイテムを読み込む
        $hasReservationItems = Reservation_detail::has('reservations')->get();

         // Reservation_detailに関連するRoomtypeアイテムを読み込む
         $hasRoomtypeItems = Reservation_detail::has('roomtypes')->get();

          // Reservation_detailに関連するRoomアイテムを読み込む
          $hasRoomItems = Reservation_detail::has('rooms')->get();

          $params = [
            'items' => $items,

            'reservation_items' => $hasReservationItems,

            'roomtype_items' => $hasRoomtypeItems,

            'room_items' => $hasRoomItems,
            ];
            return view('reservation_detail.index', $params);
    }

    public function show(Request $request)
    {
    $id = $request->id;
    $Reservation_detailItem = Reservation_detail::findOrFail($id); 
    // エラー処理をより良くするためにfindOrFailを使います
    return view('reservation_detail.show', ['item' => $item]);
    }

    public function edit(Request $request)
    {
    $param = ['id' => $request->id];
    $item= Reservation_detail::find($request->id);
    //$item = Reservation_detail::select('select * from reservation_details where id = :id', $param);
    return view('reservation_detail.edit',[$form => $item]);  
  }
    //$items = Reservation_detail::find($request->id);
      //$items = DB::table('reservation_details')->where('id', $request->id)->update($param);
    //GPT_$items = DB::table('reservation_details')->where('id', $request->id)->update($param);
  
    // public function update(Request $request)
    // {
    //     $this->validate($request, Customer::$rules);
    //     $rental = Customer::find($request->id);
    //     $form = $request->all();
    //     unset($form['_token']);
    //     $rental->fill($form)->save();
    //     return redirect('/rental');

    public function update(Request $request)
    {
    //$form = $request->all();
    $id = $request->id;
    unset($form['_token']);
    $item= Reservation_detail::find($request->id);

    $item->fill($request->all())->save();
    return redirect('/reservation_detail/edit');
    }
    //$param = [
      //'id' => $request-> id,
      //'reservation_id' => $request-> reservation_id,
      //'room_id' => $request-> room_id,
      //'room_id' => $request-> roomtype_id,
      //'name' => $request-> name,
      //'address' => $request-> address,
      //'telephone' => $request-> telephone,
      //'num_customers' => $request->num_customers,
      //'num_rooms' => $request-> num_rooms,
      //'room_type' => $request-> room_type,
      //'checkin' => $request-> checkin,
      //'checkout' => $request-> checkout,
      //'room_no' => $request-> require,
      //'other_charge' => $request-> other_charge,
      //'details' => $request-> details,
      //'total_amount' => $request-> total_amount,
      //'tax' => $request-> tax,
      //];

      //DB::update('update reservation_details set 
      //id =: id,
      //reservation_id =: reservation_id,
      //name =: name,
      //address =: address,
      //telephone =: telephone,
      //num_customers =: num_customers,
      //num_rooms =: num_rooms,
      //room_type =: room_type,
      //checkin =: checkin,
      //checkout =: checkout,
      //room_no =: room_no,
      //other_charge =:other_charge,
      //details =:details,
      //total_amount =:total_amount,
      //tax =:tax',
      //$param);
    

    }

