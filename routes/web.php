<?php

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

Auth::routes();
Route::get('/', 'PagesController@index');
Route::get('/demo', 'PagesController@demo');

// Admin functions
Route::get('/admin', 'AdminController@index');
Route::post('/admin/login/attempt', 'AdminController@login');
Route::get('/admin/dashboard', 'AdminController@dashboard');

// Bills functions
Route::get('/admin/bills', 'BillsController@admin_view');

// Reps functions
Route::get('/admin/reps', 'RepsController@admin_view');