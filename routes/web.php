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

// Route::get('/', function () {
//     return view('welcome');
// });

//ControllerのIndexメソッド呼び出し_お客様
Route::get('customer','CustomerController@index');
Route::post('customer','CustomerController@post');

// 追加_顧客情報
Route::get('customer/add','CustomerController@add');
Route::post('customer/add','CustomerController@create');

//Index_予約
Route::get('reservation','ReservationController@index');
Route::post('reservation','ReservationController@post');

// 追加_予約
Route::get('reservation/add','ReservationController@add');
Route::post('reservation/add','ReservationController@create');

//Index_予約詳細
Route::get('reservation_detail','Reservation_detailController@index');
Route::post('reservation_detail','Reservation_detailController@post');

//Index_お部屋
Route::get('room','RoomController@index');
Route::post('room','RoomController@post');


//Index_お部屋タイプ
Route::get('roomtype','RoomtypeController@index');
Route::post('roomtype','RoomtypeController@post');


// // 削除
// Route::get('hotel/customer/del','RentalController@delete');
// Route::post('rental/del','RentalController@remove');
// // 編集
// Route::get('rental/edit','RentalController@edit');
// Route::post('rental/edit','RentalController@update');
// //検索
// Route::get('rental/find','RentalController@find');
// Route::post('rental/find','RentalController@search');
// //部分検索
// Route::get('rental/show','RentalController@show');
