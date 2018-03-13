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

Route::get('/', 'AttendancesController@index');


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::resource('attendances', 'AttendancesController');

// Route::get('/store', 'AttendancesController@store');
// Route::get('/update', 'AttendancesController@update');


// Route::get('/users/{id}/{name}', function($id, $name){
//     return 'This is id number '.$id.' with a user name '.$name;
// });