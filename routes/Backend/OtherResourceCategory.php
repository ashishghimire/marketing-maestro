<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('otherresourcecategory','OtherResourcesCategoryController@index')->name('otherresourcecategory');
Route::get('otherresourcecategory/create','OtherResourcesCategoryController@create')->name('otherresourcecategory.create');
Route::post('otherresourcecategory/store','OtherResourcesCategoryController@store')->name('otherresourcecategory.store');
Route::get('otherresourcecategory/{id}/edit','OtherResourcesCategoryController@edit')->name('otherresourcecategory.edit');
Route::patch('otherresourcecategory/{id}','OtherResourcesCategoryController@update')->name('otherresourcecategory.update');
Route::get('otherresourcecategory/{id}/delete','OtherResourcesCategoryController@delete')->name('otherresourcecategory.delete');


});



