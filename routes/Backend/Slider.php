<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('slider','SliderController@index')->name('slider');
Route::get('slider/create','SliderController@create')->name('slider.create');
Route::post('slider/store','SliderController@store')->name('slider.store');
Route::get('slider/{id}/edit','SliderController@edit')->name('slider.edit');
Route::patch('slider/{id}','SliderController@update')->name('slider.update');
Route::get('slider/{id}/delete','SliderController@delete')->name('slider.delete');


});

