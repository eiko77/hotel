<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    protected $guarded = array('id');
    public static $rules =array(
        'room_type' => 'required',
        'room_no' => 'required',  
        
    );
//従キー側　設定（超ムズイ）
    public function rooms() 
    {
        return $this->hasMany('App\Room');
        // return $this->belongsTo('App/Room','room_id','id');
        // public function rooms() {
        //     return $this->belongsTo('App/Room','roomtype_id','id');
        // }
    }
    
    public function getData()
    {
        // return $this-> $this->roomtype->room_type;
        return $this->id . ': ' . $this->roomtype_id . '('. $this->room_no . ')';
}


}