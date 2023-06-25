<?php

use App\Http\Controllers\new_dbController;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\DatabasesController;

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
    return view('index');
});

Route::get('/main', function(){
    return view('form');
});

Route::get('/portfolio2', function (){
    return view('index2');
});

Route::get('/form', 'BlogController@Form');  
Route::post('/proses', 'BlogController@Proses');

Route::get('/user', 'UserController@User');

Route::get('/login', function(){
    return view('login');
});

Route::resource('/new', DatabasesController::class);