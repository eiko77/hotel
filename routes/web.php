<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
   return view('top');
});

Route::get('admin/', function () {
    return view('admin');
 });

 Route::get('eat/', function () {
   return view('eat');
});


//ControllerのIndexメソッド呼び出し_お客様
Route::get('customer','CustomerController@index');
Route::post('customer','CustomerController@post');

// 入力_会員登録
Route::get('customer/add','CustomerController@add');
Route::post('customer/add','CustomerController@create');

// 会員情報全件取得　テスト
Route::get('customer/all','CustomerController@all');

//Index_予約
Route::get('reservation','ReservationController@index');
Route::post('reservation','ReservationController@post');

// 入力_予約
Route::get('reservation/add','ReservationController@add');
Route::post('reservation/add','ReservationController@create');

//Index_予約詳細
Route::get('reservation_detail','Reservation_detailController@index');
Route::post('reservation_detail','Reservation_detailController@post');

//予約詳細_編集
Route::get('reservation_detail/edit','Reservation_detailController@edit');

Route::post('reservation_detail/edit','Reservation_detailController@update');

//部分検索
Route::get('reservation_detail/show','Reservation_detailController@show');

//Index_お部屋
Route::get('room','RoomController@index');
Route::post('room','RoomController@post');


//Index_お部屋タイプ
Route::get('roomtype','RoomtypeController@index');
Route::post('roomtype','RoomtypeController@post');


// // 削除
// Route::get('hotel/customer/del','RentalController@delete');
// Route::post('rental/del','RentalController@remove');

// //検索
// Route::get('rental/find','RentalController@find');
// Route::post('rental/find','RentalController@search');
// //部分検索
// Route::get('rental/show','RentalController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
