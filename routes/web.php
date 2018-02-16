<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'generalController@home');

Route::get('/test', function() {
    return view('test');
});

Route::get('endorse', [
    'uses' => 'endorsementController@endorse'
]);

Route::post('/endorse/submit', [
    'uses' => 'endorsementController@submit'
]);

Route::get('/vote', 'generalController@vote');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'generalController@admin');

Route::get('/logout', 'Auth\LoginController@logout');

Route::post('/admin/update_endorsement', [
    'uses' => 'generalController@updateEndorsement'
]);
