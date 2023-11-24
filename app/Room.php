<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    // 入力画面を作りたいとき復活
    // protected $guarded = array('id');
    // public static $rules =array(
    //     'room_type' => 'required',
    //     'possible_num' => 'required',  
        
    // );

//主キー側　設定（超ムズイ）
public function roomtypes()
{
return $this->belongsTo('App\Roomtype','roomtype_id','id');
}
public function getData()
{
return 
$this->id .  
$this->room_type . 
$this->room_price ; 
$this->possible_num ;

}

public function reservation_details() 
    {
        return $this->hasMany('App\Reservation_detail');
    }

}
