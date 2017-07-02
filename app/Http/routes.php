<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Http\Controllers\RichardController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'SiteController@index');
Route::get('site/index', 'SiteController@index');
Route::get('site/about', 'SiteController@about');
Route::get('site/recruit', 'SiteController@recruit');
Route::get('site/msg', 'SiteController@msg');
Route::get('site/products', 'SiteController@products');



Route::get('user/test', function () {
    return 'User test';
});

Route::get('richard/index', 'RichardController@index')->middleware("checkage:name");
Route::get('richard/testview', 'RichardController@testview');




//Route::controller('richard', 'RichardController');

