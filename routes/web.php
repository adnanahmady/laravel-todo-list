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

Route::get('/', [
    'uses'  => 'TasksController@index',
    'as'    => 'tasks'
]);

Route::group(['prefix' => 'tasks'], function() {
    Route::post('/', [
        'uses' => 'TasksController@store',
    ]);

    Route::get('{id}', [
        'uses' => 'TasksController@show',
        'as' => 'tasks.show',
    ])
        ->where(['id' => '\d+'])
;
    Route::patch('update/{id}', [
        'uses' => 'TasksController@update'
    ]);
});
Route::get('{username}/tasks', [
    'uses' => 'UsersTasksController@index',
    'as' => 'user.tasks'
]);

Route::get('{username}/tasks/{id}', [
    'uses' => 'UsersTasksController@show',
    'as' => 'user.tasks.show'
]);
