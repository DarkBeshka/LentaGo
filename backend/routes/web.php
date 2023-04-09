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

Route::get('/', 'App\Http\Controllers\ScheduleController@index')->name('home.index');

Route::get('test_page', 'App\Http\Controllers\TestPageController@test_page')->name('test.index');

Route::get('about', 'App\Http\Controllers\AboutController@about')->name('about.index');

Route::get('best_users', 'App\Http\Controllers\BestUsersController@best_users')->name('best_users.index');
Route::get('best_users/create', 'App\Http\Controllers\BestUsersController@create');
Route::get('best_users/update', 'App\Http\Controllers\BestUsersController@update');
Route::get('best_users/delete', 'App\Http\Controllers\BestUsersController@delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
