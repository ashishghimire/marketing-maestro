<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('video','VideoController@index')->name('video');
Route::get('video/create','VideoController@create')->name('video.create');
Route::post('video/store','VideoController@store')->name('video.store');
Route::get('video/{id}/edit','VideoController@edit')->name('video.edit');
Route::patch('video/{id}','VideoController@update')->name('video.update');
Route::get('video/{id}/delete','VideoController@delete')->name('video.delete');

Route::get('video/ajax-videocat','VideoController@getVideoAjaxCategory');



});

