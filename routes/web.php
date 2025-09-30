<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});



Route::get('home', function () {
    $username = 'Jeanne';
    $password = "azerty";
    return view('home', [
        'name' => $username,
        'password' => $password
    ]);
});





Route::get('/students',  [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::post('/students', [StudentController::class, 'store']);
Route::get('/students/{id}/edit', [StudentController::class, 'edit']);
Route::patch('/students/{id}', [StudentController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);






