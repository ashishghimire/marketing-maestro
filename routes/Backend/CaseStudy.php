<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('casestudy','CaseStudyController@index')->name('casestudy');
Route::get('casestudy/create','CaseStudyController@create')->name('casestudy.create');
Route::post('casestudy/store','CaseStudyController@store')->name('casestudy.store');
Route::get('casestudy/{id}/edit','CaseStudyController@edit')->name('casestudy.edit');
Route::patch('casestudy/{id}','CaseStudyController@update')->name('casestudy.update');
Route::get('casestudy/{id}/delete','CaseStudyController@delete')->name('casestudy.delete');

Route::get('casestudypost','CaseStudyController@casestudypost');


Route::get('casestudypost/{id}','CaseStudyController@featurepostcasestudy');


});

