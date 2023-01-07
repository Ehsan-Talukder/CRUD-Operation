<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/studentList', [StudentController::class,'studentList'])->name('studentList');
Route::get('/studentAdd', [StudentController::class,'studentAdd']);
Route::post('/studentAdd', [StudentController::class, 'studentAddSubmitted'])->name('studentAdd');
Route::get('/studentEdit/{id}/{name}', [StudentController::class, 'studentEdit']);
Route::post('/studentEdit', [StudentController::class, 'studentEditSubmitted'])->name('studentEdit');
Route::get('/studentDelete/{id}/{name}', [StudentController::class, 'studentDelete']);