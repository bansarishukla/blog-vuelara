<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});

Route::get('post', 'PostController@index');
Route::group(['prefix' => 'post'], function () {
    Route::post('add', 'PostController@add');
    // Route::get('edit/{id}', 'BookController@edit');
    // Route::post('update/{id}', 'BookController@update');
    // Route::delete('delete/{id}', 'BookController@delete');
});
