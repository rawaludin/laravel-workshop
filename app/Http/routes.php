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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [
    'as'    => 'post',
    function() {
        return 'Menampilkan semua post';
    }
]);

Route::post('/post', [
    'as'    => 'post.store',
    function() {
        return 'berhasil membuat post baru';
    }
]);
