<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GymController;

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
    return view('tops/welcome');
});
Route::get('/readies', function () {
    return view('readies/index');
});
Route::get('/privacy', function () {
    return view('privacy');
});
Route::get('/gyms',[GymController::class,'index']);
Route::get('/gyms/show',[GymController::class,'show']);
