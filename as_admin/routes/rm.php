<?php

/*
|--------------------------------------------------------------------------
| RM Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/logout', function () {
    session()->flush();

    return redirect('/');
});

Route::group([
    'namespace' => 'Auth',
], function () {
    Route::get('login', 'LoginController@showLoginForm')->name('login')->middleware(['guest:web']);
    Route::post('login', 'LoginController@login')->name('login')->middleware(['guest']);
});

Route::group([
    'middleware' => ['auth'],
], function () {
    Route::get('/', function () {
        return 'lol';
    })->name('rm.home');
});
