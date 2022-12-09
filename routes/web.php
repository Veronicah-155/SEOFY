<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
    return view('Ui');
});

//show page info
Route::get('/page', [UserController::class, 'page']);

//services
Route::get('/services', [UserController::class, 'services']);

//blog
Route::get('/blog', [UserController::class, 'blog']);


//contact
Route::get('/contact', [UserController::class, 'contact']);
