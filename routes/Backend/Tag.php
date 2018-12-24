<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('tag','TagController@index')->name('tag');
Route::get('tag/create','TagController@create')->name('tag.create');
Route::post('tag/store','TagController@store')->name('tag.store');
Route::get('tag/{id}/edit','TagController@edit')->name('tag.edit');
Route::patch('tag/{id}','TagController@update')->name('tag.update');
Route::get('tag/{id}/delete','TagController@delete')->name('tag.delete');


});

