<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MemberController@index');


/**
 * Add A New Member
 */
Route::post('/member', 'MemberController@insert');

/**
 * Delete An Existing Member
 */
Route::delete('/member/{id}', 'MemberController@delete');

Route::post('/edit-member/{id}', 'MemberController@go_to_detail');

Route::post('/edit-member/update/{id}', 'MemberController@update');