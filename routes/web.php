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


  Route::get('/','adminController@index');
  Route::post('/admin','adminController@login');


Route::group(['middleware' => 'checkUser'], function(){

        Route::get('/home','employerController@home');

        Route::get('/check','carController@check'); //check

        Route::get('/create','employerController@index');
		Route::post('/store','employerController@store');
		Route::get('/details/{id}','employerController@details');
		Route::post('/emp_search','employerController@emp_search');
		Route::get('/edit/{id}','employerController@edit');
		Route::post('/update/{id}','employerController@update');
		Route::get('/delete/{id}','employerController@delete');
		Route::get('/pay_view','PaymentController@home');
		Route::get('/payment', 'PaymentController@index');
		Route::post('/pay','PaymentController@pay');  //insert payment info into database
		Route::get('/edit_pay/{pay_id}','PaymentController@edit');  //edit payment info in form
		Route::post('/update_pay/{pay_id}','PaymentController@update');  //update payment info
		Route::post('/search_pay_details','PaymentController@search_pay_details');
		Route::get('/del/{pay_id}','PaymentController@delete');

		Route::get('/car_form','carController@index');	//car reg form
		Route::post('/car_reg','carController@c_insert');	//car insert
		Route::get('/vehicle_reg_view','carController@view');	//car reg view
		Route::get('/edit_vreg/{v_id}','carController@edit');  //edit car info in form
		Route::post('/update_v/{v_id}','carController@update');  //update 
		Route::get('/del_vreg/{v_id}','carController@delete');  //delete car info

		Route::get('/logout','adminController@logout');  
	    

});




	




