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


Route::prefix('webAPI')->group(function () {
    Auth::routes();
    Route::get('/fizz', 'WebAppShellController@index')->name('buzz');
    Route::post('/buzz', 'WebAppShellController@index')->name('fizz');
    Route::get('/user', function(){
        return \Illuminate\Support\Facades\Auth::user();
    })->name('user')->middleware('auth:web');


});

Route::get('/{vue_capture?}', 'WebAppShellController@index')->where('vue_capture', '[\/\w\.-]*')->name('app');
