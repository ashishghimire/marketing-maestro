<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('socialmedia','SocialMediaController@index')->name('socialmedia');
Route::get('socialmedia/create','SocialMediaController@create')->name('socialmedia.create');
Route::post('socialmedia/store','SocialMediaController@store')->name('socialmedia.store');
Route::get('socialmedia/{id}/edit','SocialMediaController@edit')->name('socialmedia.edit');
Route::patch('socialmedia/{id}','SocialMediaController@update')->name('socialmedia.update');
Route::get('socialmedia/{id}/delete','SocialMediaController@delete')->name('socialmedia.delete');


});

