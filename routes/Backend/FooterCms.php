<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('footercms','FooterCmsController@index')->name('footercms');
Route::get('footercms/create','FooterCmsController@create')->name('footercms.create');
Route::post('footercms/store','FooterCmsController@store')->name('footercms.store');
Route::get('footercms/{id}/edit','FooterCmsController@edit')->name('footercms.edit');
Route::patch('footercms/{id}','FooterCmsController@update')->name('footercms.update');
Route::get('footercms/{id}/delete','FooterCmsController@delete')->name('footercms.delete');


});

