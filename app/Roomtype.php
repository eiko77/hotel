<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    // 入力画面を作りたいとき復活
    // protected $guarded = array('id');
    // public static $rules =array(
    //     'room_type' => 'required',
    //     'room_no' => 'required',  
        
    // );
//従キー側　設定（超ムズイ）
    public function rooms() 
    {
        return $this->hasMany('App\Room');
        
    }
    
    public function getRoomData()
    {
        
        return $this->id . $this->roomtype_id .  
        $this->room_price .  
        $this->room_no ;
}

public function reservations() 
    {
        return $this->hasMany('App\Reservation');
        
    }
    
    public function getReservationData()
    {
        
        // return $this->id . 
        // $this->roomtype_id .  
        // $this->room_price .  
        // $this->room_no ;


        
        // return $this->id .  
        // $this->num_customers .  
        // $this->checkin.
        // $this->checkout.
        // $this->note
        //  ;
}



}