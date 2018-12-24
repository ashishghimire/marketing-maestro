<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('ourpatner','OurPatnerController@index')->name('ourpatner');
Route::get('ourpatner/create','OurPatnerController@create')->name('ourpatner.create');
Route::post('ourpatner/store','OurPatnerController@store')->name('ourpatner.store');
Route::get('ourpatner/{id}/edit','OurPatnerController@edit')->name('ourpatner.edit');
Route::patch('ourpatner/{id}','OurPatnerController@update')->name('ourpatner.update');
Route::get('ourpatner/{id}/delete','OurPatnerController@delete')->name('ourpatner.delete');


});

