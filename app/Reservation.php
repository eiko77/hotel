<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = array('id');
    public static $rules =array(
        // 'customer_id' => 'required',
        'num_customers' => 'required',  
        'room_type' => 'required',    
        'checkin' => 'required', 
        'checkout' => 'required', 
        'note' => 'required',
    );

//customerとつながる
public function customers()
{
return $this->belongsTo('App\Customer','customer_id','id');
}

public function getCustomerData()
{
return $this->id .  
$this->name .  
$this->address. 
$this->telephone;
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
}
