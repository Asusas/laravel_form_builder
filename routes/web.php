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
    return view('main');
})->name('welcome');

Route::resource('trucks', 'TrucksController');
Route::resource('owners', 'OwnersController');
Route::resource('years', 'TrucksYearsController');
Route::resource('addOwner', 'AttachOwnerController');
Route::resource('comments', 'CommentController');