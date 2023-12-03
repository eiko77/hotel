<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    public function rooms() 
    {
        return $this->hasMany('App\Room');
        
    }
    
    public function getRoomDat()
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
         return $this->id . 
        $this->roomtype_id .  
         $this->room_price .  
        $this->room_no ;
        return $this->id .  
        $this->num_customers .  
        $this->checkin.
         $this->checkout.
        $this->note
         ;
}

public function reservation_details() 
    {
        return $this->hasMany('App\Reservation_detail');
    }

}