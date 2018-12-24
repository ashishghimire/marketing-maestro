<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */


Route::get('/', 'FrontendController@index')->name('index');
Route::get('pages/{slug}', 'FrontendController@getPages')->where('slug','[\w\d\-\_]+');
Route::get('advertising/{slug}', 'FrontendController@advertising')->where('slug','[\w\d\-\_]+');
Route::get('show/{slug}', 'FrontendController@showadvertising')->where('slug','[\w\d\-\_]+');
Route::get('advertising','FrontendController@getAdvertisingAll');


Route::get('resource/{slug}', 'FrontendController@resource')->where('slug','[\w\d\-\_]+');
 Route::get('resource/show/{slug}', 'FrontendController@showresource');
Route::get('otherresources','FrontendController@getOtherResourceAll');


Route::get('article/{slug}', 'FrontendController@article')->where('slug','[\w\d\-\_]+');
 Route::get('article/show/{slug}', 'FrontendController@showarticle');
Route::get('article','FrontendController@getArticleAll');




 // Route::get('/posts/tags/{tag}', 'FrontendController@getTagPost');

Route::get('interview/{slug}', 'FrontendController@interview')->where('slug','[\w\d\-\_]+');
Route::get('interview/show/{slug}', 'FrontendController@showinterview')->where('slug','[\w\d\-\_]+');
Route::get('interview','FrontendController@getinterviewAll');


Route::get('casestudy/{slug}', 'FrontendController@casestudy')->where('slug','[\w\d\-\_]+');
Route::get('casestudy/show/{slug}', 'FrontendController@showcasestudy')->where('slug','[\w\d\-\_]+');
Route::get('casestudy','FrontendController@getcasestudyAll');



Route::get('macros', 'FrontendController@macros')->name('macros');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
    });
});
