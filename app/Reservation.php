<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('id');
    public static $rules =array(
        'customer_id' => 'required',
        'num_customers' =>'integer|min:1|max:4',  
        'num_rooms' =>'integer|min:1|max:5', 
        'roomtype_id' => 'required',    
        'checkin' => 'required', 
        'checkout' => 'required', 
        'note' => '',
    );

    public function getReservationData()
{
    return 
    $this->id . 
    $this->customer_id .  
    $this->num_customers.
    $this->num_rooms.
    $this->checkin.
    $this->checkout.
    $this->note ;
}

//customerとつながる
public function customers()
{
return $this->belongsTo('App\Customer','customer_id','id');
}

public function getCustomerData()
{
return 
$this->id .  
$this->name .  
$this->address .
$this->telephone .
$this->mail;

}

//roomtypeとつながりたい
public function roomtypes() 
{
return $this->belongsTo('App\Roomtype','roomtype_id','id');    
}

public function getRoomtypesData()
{
    return $this->id . 
    $this->room_type .  
    $this->room_price .  
    $this->possible_num ;
}

//reservation_detailとつながりたい
public function reservation_details() 
{
    return $this->hasMany('App\Reservation_detail', 'reservation_id', 'id');
}

public function reservation_detailsData()
{
    return $this->id . 
    $this->reservation_id . 
    $this->room_id .  
    $this->checkin ;
    $this->hotel_fee;
    
}

}
