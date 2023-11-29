<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    // 入力画面
protected $guarded = array('id');
public static $rules =array(
    'name' => 'required',
    'address' => 'required',  
    'telephone' => 'required',   
    'mail' => 'required', 
  );

public function getData()
{
    return 
    $this->id . 
    $this->name .  
    $this->address.
    $this->telephone.
    $this->mail ;
}

// 外部連結設定_これを消すとエラーになる
public function reservations() 
{
    return $this->hasMany('App\Reservation');
}

public function reservation_details() 
{
    return $this->hasMany('App\Reservation_detail');
}
}
