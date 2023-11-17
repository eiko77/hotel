<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation_detail extends Model
{
     // addエラー：入力画面を作りたいとき考える（後回し）
    // protected $guarded = array('id');
    // public static $rules =array(
    //     'reservation_id' => 'required',
    //     'room_id' => 'required',  
    //     'accom_date' => 'required', 
    //     'accom_fee' => 'required',   
    // );

    //主キー側　設定（超ムズイ）
public function reservations()
{
return $this->belongsTo('App\reservation','customer_id','id');
}
public function getData()
{
return 
$this->id .  
$this->num_customers .
$this->checkin .
$this->checkout ;
}
}
