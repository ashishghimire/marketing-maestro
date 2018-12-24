<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('post','PostController@index')->name('post');
Route::get('post/create','PostController@create')->name('post.create');
Route::post('post/store','PostController@store')->name('post.store');
Route::get('post/{id}/edit','PostController@edit')->name('post.edit');
Route::patch('post/{id}','PostController@update')->name('post.update');
Route::get('post/{id}/delete','PostController@delete')->name('post.delete');


});

