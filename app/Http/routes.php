<?php

Route::get('/', function () {
    $names = [
        'Neo',
        'Morpheus',
        'Trinity',
        'Tank',
        'Switch',
        'Dozer'
    ];

    return $names;
});


Route::group(['prefix' => 'api'], function(){

    Route::group(['prefix' => 'test'], function(){
        Route::get('balance', function(){
            return "User Balance";
        })->middleware('web');

        Route::get('profile', function(){
            return "User profile";
        });
    });
});

Route::get('foo', ['as' => 'route.name', 'uses' => function(){
    return route('test', [
        'number' => 33,
        'n' => '@neo',
        'foo' => 'bar'
    ]);
}]);

Route::get('hello-world/{number?}/{n}', ['as' => 'test', 'uses'=>function($number='Guest', $n=''){
    return "Hello $number";
}])->where([
    'number' => '\d{1,2}',
    'n' => '@\w+'
]);

/*Route::group(['middleware' => ['web']], function () {
    //
});*/
