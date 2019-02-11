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
Route::post('add/', 'Todo@Add');
Route::get('remove/{id}', 'Todo@Remove');
Route::get('/', 'Todo@Show');
