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


Route::get('/',[StudentController::class,'showStudent'])->name('student.show');

Route::get('/show-student',[StudentController::class,'showStudent'])->name('student.show');
Route::get('/add-student',[StudentController::class,'addStudent'])->name('student.add');
Route::post('/add-student',[StudentController::class,'saveStudent'])->name('save.student');
Route::get('/edit-student/{id}',[StudentController::class,'editStudent'])->name('student.edit');
Route::get('/delete-student/{id}',[StudentController::class,'deleteStudent'])->name('student.delete');
Route::post('/update-student',[StudentController::class,'updateStudent'])->name('student.update');