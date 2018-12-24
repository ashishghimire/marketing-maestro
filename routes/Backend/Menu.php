<?php





Route::group(['namespace'  => 'Marketing'],function(){

 Route::get('cmsmenu' , 'CmsController@index')->name('cmsmenu');
 Route::get('cmsmenu/create' , 'CmsController@create')->name('cmsmenu.create');
 Route::post('cmsmenu/store' , 'CmsController@store')->name('cmsmenu.store');
 Route::get('cmsmenu/{id}/edit' , 'CmsController@edit')->name('cmsmenu.edit');
 Route::get('cmsmenu/{id}/delete' , 'CmsController@delete')->name('cmsmenu.delete');
 Route::patch('cmsmenu/{id}' , 'CmsController@update')->name('cmsmenu.update');
 Route::get('show/{id}' , 'CmsController@show')->name('cmsmenu.show');


	

});