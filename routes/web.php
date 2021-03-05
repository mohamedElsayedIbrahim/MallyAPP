<?php

use App\Http\Controllers\CourceController;
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
})->name('app');

Route::get('/system/main', function(){
    return view('root.main');
})->name('system');

// courses:index
Route::get('/courses', 'CourceController@index')->name('course.index');
// courses:show
Route::get('/courses/dispaly/{id}', 'CourceController@show')->name('course.show');
// courses:create
Route::get('/course/create', function() {
    return view('/cources.create');
})->name('course.create');
Route::post('/courses/store', 'CourceController@store')->name('course.store');
// courses:edit
Route::get('/course/edit/{id}','CourceController@edit')->name('course.edit');
Route::post('/course/update/{id}','CourceController@update')->name('course.update');
// courses:delete
Route::get('/course/delete/{id}','CourceController@delete')->name('course.delete');
