<?php

Route::get('/', ['uses' => 'TestController@index', 'as' => 'main.index']);
Route::get('/about', ['uses' => 'TestController@about']);
Route::get('/{name}', ['uses' => 'TestController@hello']);

Route::group(['namespace' => 'Admin'], function(){
    Route::get('admin-panel', 'IndexController@index');
});


/*Route::group(['middleware' => ['web']], function () {
    //
});*/
