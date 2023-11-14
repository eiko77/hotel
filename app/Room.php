<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = array('id');
    public static $rules =array(
        'room_type' => 'required',
        'possible_num' => 'required',  
        
    );

//主キー側　設定（超ムズイ）
public function roomtypes()
{
return $this->belongsTo('App\Roomtype','roomtype_id','id');
}
public function getData()
{
return $this->id . ': ' . $this->room_type . '('. $this->possible_num . ')';

}

}
