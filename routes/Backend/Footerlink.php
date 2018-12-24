<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('footerlink','FooterlinkController@index')->name('footerlink');
Route::get('footerlink/create','FooterlinkController@create')->name('footerlink.create');
Route::post('footerlink/store','FooterlinkController@store')->name('footerlink.store');
Route::get('footerlink/{id}/edit','FooterlinkController@edit')->name('footerlink.edit');
Route::patch('footerlink/{id}','FooterlinkController@update')->name('footerlink.update');
Route::get('footerlink/{id}/delete','FooterlinkController@delete')->name('footerlink.delete');


});

