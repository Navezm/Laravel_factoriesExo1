<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TrainingTypeController;
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

Route::get('/', [BuildingController::class,'index']);
Route::get('/training', [TrainingController::class,'index']);
Route::get('/trainingType', [TrainingTypeController::class,'index']);
Route::get('/students', [StudentController::class,'index']);
