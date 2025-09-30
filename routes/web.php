<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students',  [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::get('/students/{student}', [StudentController::class, 'show']);
Route::post('/students', [StudentController::class, 'store']);
Route::get('/students/{student}/edit', [StudentController::class, 'edit']);
Route::patch('/students/{student}', [StudentController::class, 'update']);
Route::delete('/students/{student}', [StudentController::class, 'destroy']);






