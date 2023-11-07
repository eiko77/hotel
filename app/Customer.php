<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
protected $guarded = array('customer_id');
public static $rules =array(
    'customer_name' => 'required',
    'address' => 'required',  
    'telephone' => 'required',   
  );

}
