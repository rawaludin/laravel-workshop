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
    return view('posts.index');
});

Route::get('/post', [
    'as'    => 'post',
    function() {
        return view('posts.index');
    }
]);

Route::post('/post', [
    'as'    => 'post.store',
    function() {
        return 'berhasil membuat post baru';
    }
]);

Route::get('/post/{id}', [
    'as'    => 'post.show',
    function($id) {
        $post = App\Post::findOrFail($id);
        return view('posts.show')->with('post', $post);
    }
]);
