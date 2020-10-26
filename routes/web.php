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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('/employee-list', [\App\Http\Controllers\PostController::class, 'employees_fun']);
Route::get('/employee-list/{id}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('employee.edit');
Route::put('/employee-list/{id}/update', [\App\Http\Controllers\PostController::class, 'update'])->name('employee.update');


//Route::get('/home', function () {
//    return view('home');
//});
//Route::get('/employee-list', function () {
//    return view('employee_list');
//});
