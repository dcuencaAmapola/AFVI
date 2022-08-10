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

Route::get('/','App\Http\Controllers\FirstCallReportController@index')->name('firstCallReport.index');
//Route::get('/firstCallReport/{firstCallReport}/edit', 'App\Http\Controllers\FirstCallReportController@edit')->name('firstCallReport.edit');
Route::patch('/firstCallReport/{firstCallReport}', 'App\Http\Controllers\FirstCallReportController@update')->name('firstCallReport.update');
Route::get('/firstCallReport/create', 'App\Http\Controllers\FirstCallReportController@create')->name('firstCallReport.create');
Route::post('/firstCallReport','App\Http\Controllers\FirstCallReportController@store')->name('firstCallReport.store');
Route::get('/firstCallReport/{firstCallReport}', 'App\Http\Controllers\FirstCallReportController@show')->name('firstCallReport.show');
Route::patch('/firstCallReport/{firstCallReport}','App\Http\Controllers\FirstCallReportController@destroy')->name('firstCallReport.destroy');
