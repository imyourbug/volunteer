<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('user.home');
//     // return view('test');
// });

Route::group(['prefix' => '/', 'namespace' => 'App\Http\Controllers\Users', 'as' => 'users.'], function () {
    Route::get('/', 'UserController@index')->name('home');
    Route::get('login', 'UserController@login')->name('login');
    Route::get('forgot', 'UserController@forgot')->name('forgot');
    Route::post('recover', 'UserController@recover')->name('recover');
    Route::post('login', 'UserController@checkLogin')->name('checkLogin');
    Route::get('register', 'UserController@register')->name('register');
    Route::post('register', 'UserController@checkRegister')->name('checkRegister');
    Route::post('change_password', 'UserController@changePassword')->name('changePassword');
    Route::post('change_avatar', 'UserController@changeAvatar')->name('changeAvatar');
    Route::get('logout', 'UserController@logout')->name('logout');
    #profile
    Route::group(['middleware' => 'auth', 'prefix' => 'profile', 'namespace' => 'Profile', 'as' => 'profile.'], function () {
        Route::get('/index', 'ProfileController@index')->name('index');
        Route::get('/info/detail', 'ProfileController@detail')->name('detail');
        Route::post('/info/detail/update', 'ProfileController@update')->name('update');
        Route::get('/info/parent', 'ProfileController@parent')->name('parent');
        Route::post('/info/parent/update', 'ProfileController@parent_update');
        Route::get('/log/award', 'ProfileController@award')->name('award');
        Route::get('/log/my-log', 'ProfileController@mylog')->name('mylog');
        Route::get('/log/my-log/get-log-data', 'ProfileController@getLogData')->name('getLogData');
        Route::get('/log/my-log/{id}', 'ProfileController@getLogById');
        Route::get('/log/my-cause', 'ProfileController@mycause')->name('mycause');
    });

    #volunteer
    Route::group(['middleware' => 'auth', 'prefix' => 'volunteer', 'namespace' => 'Volunteers', 'as' => 'volunteer.'], function () {
        Route::get('/request', 'VolunteerOpportunityController@request');
        Route::post('/request', 'VolunteerOpportunityController@store');
    });

    #about
    Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
        Route::get('/', function () {
            return view('user.about.index');
        })->name('index');
    });

    #partner
    Route::group(['prefix' => 'partners', 'namespace' => 'Partners', 'as' => 'partner.'], function () {
        Route::get('/', function () {
            return view('user.partner.index');
        })->name('index');
        Route::get('/create', function () {
            return view('user.partner.create');
        })->name('create');
        Route::post('/create', 'PartnerController@store')->name('store');
    });
});

Route::group(['prefix' => 'volunteers', 'namespace' => 'App\Http\Controllers\Volunteers', 'as' => 'volunteers.'], function () {
    Route::post('/create', 'VolunteerController@create')->name('create');
    Route::post('/update', 'VolunteerController@update')->name('update');
    Route::get('/delete/{id}', 'VolunteerController@delete')->name('delete');
    Route::get('/request', 'VolunteerController@delete')->name('delete');
});

Route::group(['prefix' => '/admin', 'namespace' => 'App\Http\Controllers\Admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('index');
    #accounts
    Route::group(['prefix' => 'accounts', 'namespace' => 'Accounts', 'as' => 'accounts.'], function () {
        Route::get('/', 'AccountController@index')->name('index');
        Route::get('/create', 'AccountController@create')->name('create');
        Route::post('/create', 'AccountController@store')->name('store');
        Route::get('/update/{id}', 'AccountController@show')->name('show');
        Route::post('/update', 'AccountController@update')->name('update');
        Route::get('/delete/{id}', 'AccountController@delete')->name('delete');
    });
    #volunteers
    Route::group(['prefix' => 'volunteers', 'namespace' => 'Volunteers', 'as' => 'volunteers.'], function () {
        Route::get('/', 'VolunteerController@index')->name('index');
        Route::get('/request', 'VolunteerController@request')->name('request');
        Route::get('/getData', 'VolunteerController@getData')->name('getData');
        Route::get('/getDataById/{id}', 'VolunteerController@getDataById');
    });
});
