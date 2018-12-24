<?php
Route::group(['namespace'=>'Marketing'],function(){

Route::get('interview','InterviewController@index')->name('interview');
Route::get('interview/create','InterviewController@create')->name('interview.create');
Route::post('interview/store','InterviewController@store')->name('interview.store');
Route::get('interview/{id}/edit','InterviewController@edit')->name('interview.edit');
Route::patch('interview/{id}','InterviewController@update')->name('interview.update');
Route::get('interview/{id}/delete','InterviewController@delete')->name('interview.delete');


 Route::get('interviewpost','InterviewController@interviewpost');

// Route::get('interviewpost',function(){

//     return "Asdfasdf";
// });
Route::get('interviewpost/{id}','InterviewController@featuredinterviewpost');




});



