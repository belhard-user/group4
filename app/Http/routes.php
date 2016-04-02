<?php

Route::get('/', ['uses' => 'IndexController@home', 'as' => 'homepage']);

Route::group(['prefix' => 'article', 'middleware' => ['web']], function(){

    Route::get('/', ['uses' => 'ArticleController@index']);

    Route::post('{article}/photo', ['uses' => 'ArticleController@addPhoto', 'as' => 'photo']);

    Route::get('create', ['uses' => 'ArticleController@create']);
    Route::post('create', ['uses' => 'ArticleController@store']);
    Route::get('{article}/edit', ['uses' => 'ArticleController@edit', 'as' => 'article.edit']);
    Route::get('{article}', ['uses' => 'ArticleController@show', 'as' => 'article.show']);
    Route::put('{article}/update', ['uses' => 'ArticleController@update', 'as' => 'article.update']);

});


Route::get('db', ['uses' => 'DbController@index']);
Route::get('insert', ['uses' => 'DbController@insert']);
Route::get('update', ['uses' => 'DbController@update']);
Route::get('model/{test}', 'ModelController@index');
Route::get('all', 'ModelController@all');
Route::get('api', 'ModelController@api');

Route::group(['prefix' => 'form', 'middleware' => ['web']], function()
{
    // Article area

    Route::get('insert', ['uses' => 'DbController@add']);
    Route::post('insert', ['uses' => 'DbController@store', 'as' => 'add.test']);
});


Route::get('/about', ['uses' => 'TestController@about']);
Route::get('/{name}', ['uses' => 'TestController@hello']);


Route::group(['namespace' => 'Admin'], function(){
    Route::get('admin-panel', 'IndexController@index');
});


/*Route::group(['middleware' => ['web']], function () {
    //
});*/
