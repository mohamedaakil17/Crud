<?php

use App\Http\Controllers\StudentController;
use App\Models\student;
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
});

Route::get('/index', [StudentController::class,'index']);
Route::get('/edit', [StudentController::class,'edit']);
Route::get('/show', [StudentController::class,'show']);
Route::get('/create', [StudentController::class,'create']);
Route::get('/store', [StudentController::class,'store']);
Route::get('/update', [StudentController::class,'update']);
