<?php
Route::get('db', ['uses' => 'DbController@index']);
Route::get('insert', ['uses' => 'DbController@insert']);
Route::get('update', ['uses' => 'DbController@update']);
Route::get('model/{test}', 'ModelController@index');
Route::get('all', 'ModelController@all');
Route::get('api', 'ModelController@api');

Route::group(['prefix' => 'form', 'middleware' => ['web']], function()
{
    Route::get('insert', ['uses' => 'DbController@add']);
    Route::post('insert', ['uses' => 'DbController@store', 'as' => 'add.test']);
});


Route::get('/', ['uses' => 'TestController@index', 'as' => 'main.index']);
Route::get('/about', ['uses' => 'TestController@about']);
Route::get('/{name}', ['uses' => 'TestController@hello']);


Route::group(['namespace' => 'Admin'], function(){
    Route::get('admin-panel', 'IndexController@index');
});


/*Route::group(['middleware' => ['web']], function () {
    //
});*/
