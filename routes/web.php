<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('master','master');
Route::view('addemploye','addEmploye');
Route::post('addemploye',[EmployeController::class,'addEmploye']);
Route::get('/',[EmployeController::class,'showEmploye']);
Route::get('editemploye/{id}',[EmployeController::class,'editEmploye']);
Route::post('updateemploye',[EmployeController::class,'updateEmploye']);
Route::post('delete/{id}',[EmployeController::class,'deleteEmploye']);
Route::get('chart-js',[EmployeController::class,'chartEmploye']);
Route::get('location-js',[EmployeController::class,'locationChart']);
Route::get('age',[EmployeController::class,'ageChart']);



