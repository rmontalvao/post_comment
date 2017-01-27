<?php

use Illuminate\Http\Request;

/*
  |--------------------------------------------------------------------------
  | API Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register API routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | is assigned the "api" middleware group. Enjoy building your API!
  |
 */


Route::group([
    'middleware' => 'auth:api'
        ], function () {
    Route::resource('comments', 'CommentController', array('except' => array('create', 'edit', 'update')));

    Route::resource('posts', 'PostController', array('except' => array('create', 'edit', 'update')));

    Route::resource('users', 'UserController', array('except' => array('create', 'edit', 'update')));

    Route::post('post/like/{postId}', 'PostController@like');
    Route::post('post/dislike/{postId}', 'PostController@dislike');
});
