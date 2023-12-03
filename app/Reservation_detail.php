<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation_detail extends Model
{
  //reservationとつながりたい

public function reservations()
{
    return $this->belongsTo('App\Reservation', 'reservation_id', 'id');
}


public function getReservationsData()
{
return 
$this->id .  
$this->roomtype_id .
$this->customer_id .
$this->num_customers .
$this->num_rooms .
$this->checkin .
$this->checkout .
$this->note ;
}

//roomとつながりたい
public function rooms()
{
return $this->belongsTo('App\Room','room_id','id');
}
public function getRoomData()
{
return 
$this->id .  
$this->room_no ;
}

//roomtypeとつながりたい
public function roomtypes()
{
return $this->belongsTo('App\Roomtype','roomtype_id','id');
}

public function getRoomtypeData()
{
return 
$this->id .  
$this->room_type . 
$this->room_price .
$this->possible_num ;
}

}
