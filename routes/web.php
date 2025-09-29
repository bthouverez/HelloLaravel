<?php

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





Route::get('/students', function() {
    // Aller chercher tous les students dans la base
    $students = Student::all();
    // Envoyer ces students à une vue
    return view('index', [
        'students' => $students
    ]);
});

Route::get('/students/{id}', function($id) {
    $student = Student::findOrFail($id);
    return view('show', [
        'student' => $student
    ]);
});







