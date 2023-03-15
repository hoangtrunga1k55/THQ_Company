<?php
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::namespace('Auth')->group(function () {
    /*
    |--------------------------------------------------------------------------
    | Auth routes
    |--------------------------------------------------------------------------
    */
    Route::get('/login', 'AuthenticatedSessionController@showLogin')->name('login');
    Route::post('/login', 'AuthenticatedSessionController@login');
    Route::get('/register', 'AuthenticatedSessionController@showLogin')->name('showRegisterForm');
    Route::post('/register', 'AuthenticatedSessionController@register')->name('register');
    Route::post('/logout', 'AuthenticatedSessionController@logout')->name('logout');

    Route::group([
        'middleware' => ['auth:admin'],
    ], function () {
        Route::get('/admin', function () {
            return 'admin';
        })->name('page');

        Route::get('/super-admin', function () {
            return 'super-admin';
        })->name('Spage');
    });
});
