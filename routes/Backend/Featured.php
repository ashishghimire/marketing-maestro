<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('featured','FeaturedController@index')->name('featured');
Route::get('featured/create','FeaturedController@create')->name('featured.create');
Route::post('featured/store','FeaturedController@store')->name('featured.store');
Route::get('featured/{id}/edit','FeaturedController@edit')->name('featured.edit');
Route::patch('featured/{id}','FeaturedController@update')->name('featured.update');
Route::get('featured/{id}/delete','FeaturedController@delete')->name('featured.delete');

/*****ajax*****/
Route::get('featured/ajax-cat','FeaturedController@getAjaxCategory');

Route::get('featured/ajax-sub-cat','FeaturedController@getAjaxSubCategory');


});

