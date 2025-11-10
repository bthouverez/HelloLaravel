<?php

use App\Http\Controllers\StudentController;
use App\Http\Middleware\TestMiddleware;
use App\Livewire\Counter;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::login(User::find(1));

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students',  [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create'])->middleware('connected');
Route::get('/students/{student}', [StudentController::class, 'show']);
Route::post('/students', [StudentController::class, 'store'])->middleware('connected');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->middleware('connected');
Route::patch('/students/{student}', [StudentController::class, 'update'])->middleware('connected');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->middleware('connected');


Route::get('/test', function() {
    //Auth::login(User::find(8));
    Auth::logout();
    Auth::user();
    return view('test');
})->name('login');

Route::get('coucou', function() {})->name('register');

Route::get('/counter', Counter::class);
Route::get('update-student', \App\Livewire\UpdateStudent::class);

