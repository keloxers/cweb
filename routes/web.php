<?php



Route::get('/', 'HomeController@index');


Route::post('/emails/store', [ 'as' => 'homecontroller.store', 'uses' => 'HomeController@store']);
Route::post('/consultas/store', [ 'as' => 'homecontroller.consultas', 'uses' => 'HomeController@consultas']);




?>
