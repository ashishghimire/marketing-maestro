<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('advertisingcategory','AdvertisingCategoryController@index')->name('advertisingcategory');
Route::get('advertisingcategory/create','AdvertisingCategoryController@create')->name('advertisingcategory.create');
Route::post('advertisingcategory/store','AdvertisingCategoryController@store')->name('advertisingcategory.store');
Route::get('advertisingcategory/{id}/edit','AdvertisingCategoryController@edit')->name('advertisingcategory.edit');
Route::patch('advertisingcategory/{id}','AdvertisingCategoryController@update')->name('advertisingcategory.update');
Route::get('advertisingcategory/{id}/delete','AdvertisingCategoryController@delete')->name('advertisingcategory.delete');


});

