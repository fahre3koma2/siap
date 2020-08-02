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

//home and file
Route::get('/', 'Login@index');

Route::get('home', 'Home@index');
Route::get('home/file', 'Home@file');
Route::post('home/upload', 'Home@upload');
Route::get('home/delete/{par1}', 'Home@delete');
Route::get('home/approval/{par1}', 'Home@approval');

// user
Route::get('user', 'User@index');
Route::post('user/tambah', 'User@tambah');
Route::get('user/edit/{par1}', 'User@edit');
Route::post('user/upload', 'User@upload');
Route::post('user/update', 'User@update');
Route::get('user/delete/{par1}', 'User@delete');
Route::post('user/proses', 'User@proses');
Route::get('user/profil/{par1}', 'User@profil');

// Login
Route::get('login', 'Login@index');
Route::post('login/cek', 'Login@cek');
Route::get('login/lupa', 'Login@lupa');
Route::get('login/logout', 'Login@logout');
