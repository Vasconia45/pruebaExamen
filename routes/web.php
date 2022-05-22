<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/student', [HomeController::class, 'student'])->name('students');

Route::get('/degree', [HomeController::class, 'degree'])->name('degrees');

Route::get('/back', [HomeController::class, 'back'])->name('back');

Route::get('/student/listStudent', [StudentController::class, 'listOfStudents'])->name('listOfStudents');

Route::get('/student/listStudent/{id}', [StudentController::class, 'editStudents'])->name('editStudents');

Route::post('/student/listStudent/update', [StudentController::class, 'updateStudent'])->name('updateStudent');

Route::get('/back2', [StudentController::class, 'back'])->name('backStudent');
