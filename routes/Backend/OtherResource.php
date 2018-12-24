<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('otherresource','OtherResourcesController@index')->name('otherresource');
Route::get('otherresource/create','OtherResourcesController@create')->name('otherresource.create');
Route::post('otherresource/store','OtherResourcesController@store')->name('otherresource.store');
Route::get('otherresource/{id}/edit','OtherResourcesController@edit')->name('otherresource.edit');
Route::patch('otherresource/{id}','OtherResourcesController@update')->name('otherresource.update');
Route::get('otherresource/{id}/delete','OtherResourcesController@delete')->name('otherresource.delete');


Route::get('otherpost','OtherResourcesController@otherpost');
Route::get('featurepost_otherpost/{id}','OtherResourcesController@featurepost_otherpost')->name('ajax.feature.enable');




});



