<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation_detail extends Model
{
    protected $guarded = array('id');
    public static $rules =array(
        'reservation_id' => 'required',
        'room_id' => 'required',  
        'accom_date' => 'required', 
        'accom_fee' => 'required',   
    );
}
