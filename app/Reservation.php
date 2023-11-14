<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('id');
    public static $rules =array(
        'customer_id' => 'required',
        'num_customers' => 'required',  
        'checkin' => 'required', 
        'checkout' => 'required',   
    );
}
