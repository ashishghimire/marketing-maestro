<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('article','ArticleController@index')->name('article');
Route::get('article/create','ArticleController@create')->name('article.create');
Route::post('article/store','ArticleController@store')->name('article.store');
Route::get('article/{id}/edit','ArticleController@edit')->name('article.edit');
Route::patch('article/{id}','ArticleController@update')->name('article.update');
Route::get('article/{id}/delete','ArticleController@delete')->name('article.delete');


Route::get('articlepost','ArticleController@articlepost');


Route::get('featurepostarticle/{id}','ArticleController@featurepostarticle')->name('ajax.feature.enable');


});

