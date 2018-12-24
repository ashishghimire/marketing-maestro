<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('advertising','AdvertisingController@index')->name('advertising');
Route::get('advertising/create','AdvertisingController@create')->name('advertising.create');
Route::post('advertising/store','AdvertisingController@store')->name('advertising.store');
Route::get('advertising/{id}/edit','AdvertisingController@edit')->name('advertising.edit');
Route::patch('advertising/{id}','AdvertisingController@update')->name('advertising.update');
Route::get('advertising/{id}/delete','AdvertisingController@delete')->name('advertising.delete');


Route::get('advertisingpost','AdvertisingController@advertisingpost');


Route::get('featurepostadvertising/{id}','AdvertisingController@featurepostadvertising')->name('ajax.feature.enable');





});

