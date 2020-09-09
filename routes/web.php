<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'HomeController@home_index')->name('home_index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/room_list', 'RoomController@onLoadRoomList')->name('room_list');
Route::get('/render_room_detail/{type}/{id}', 'RoomController@onRenderRoomDetail')->name('render_room_detail');

Route::post('/room_list/save_room_detail', 'RoomController@onSaveRoomDetail')->name('save_room_list');


// Route::get('/login_pofo/{username}/{password}', 'HomeController@home_login')->name('home_login');
// Route::get('/home_login/{username}/{password}', 'HomeController@home_login')->name('home_login');
Route::post('/logout', 'HomeController@home_logout')->name('home_logout');


Auth::routes();
