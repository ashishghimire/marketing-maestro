<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('articlecategory','ArticleCategoryController@index')->name('articlecategory');
Route::get('articlecategory/create','ArticleCategoryController@create')->name('articlecategory.create');
Route::post('articlecategory/store','ArticleCategoryController@store')->name('articlecategory.store');
Route::get('articlecategory/{id}/edit','ArticleCategoryController@edit')->name('articlecategory.edit');
Route::patch('articlecategory/{id}','ArticleCategoryController@update')->name('articlecategory.update');
Route::get('articlecategory/{id}/delete','ArticleCategoryController@delete')->name('articlecategory.delete');


});

