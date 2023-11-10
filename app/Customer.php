<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
protected $guarded = array('id');
public static $rules =array(
    'name' => 'required',
    'address' => 'required',  
    'telephone' => 'required',   
  );

// //検索用
// public function getData()
// {
//     return $this->id . ': ' . $this->bookname . '(現在、'. $this->borrower . 'さんが借りています)';
// }
// //検索　スコープ(クエリビルダを使ったので多分不要)
// public function scopeNameEqual($query,$str)
// {
//   return $query->where('bookname',$str);
// }

}
