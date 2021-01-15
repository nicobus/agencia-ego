<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/modelos/todoslosmodelos', 'CarController@index')->name('allCars');

Route::get('/modelos/{category}', 'CarController@listByCategory')->name('carsByCategory');

Route::get('/modelos/{category}/{orderType}', 'CarController@listOrderBy')->name('carsOrderBy');

Route::get('/detallesmodelo/{car_id}', 'CarController@show')->name('carDetail');


