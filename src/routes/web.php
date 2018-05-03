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


Route::get('/',function(){
	return view('login');
});


Route::post('/admin','adminController@login');


Route::get('/home','employerController@home');

Route::get('/create','employerController@index');

Route::post('/store','employerController@store');

Route::get('/edit/{id}','employerController@edit');

Route::post('/update/{id}','employerController@update');

Route::get('/delete/{id}','employerController@delete');

Route::get('/pay_view','PaymentController@home');

Route::get('/payment', 'PaymentController@index');

Route::get('/viewpayment', 'PaymentController@view');

Route::post('/pay','PaymentController@pay'); //insert

Route::get('/edit_pay/{pay_id}','PaymentController@edit');

Route::post('/update_pay/{pay_id}','PaymentController@update');

Route::get('/del/{pay_id}','PaymentController@delete');

Route::get('/logout', function(){
	return redirect('/');
});






