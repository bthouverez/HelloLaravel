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

Route::get('/students/create', function() {
    return view('create');
});

Route::get('/students/{id}', function($id) {
    $student = Student::findOrFail($id);
    return view('show', [
        'student' => $student
    ]);
});

Route::post('/students', function() {
    // Valider les données
    request()->validate([
        'name' => 'required|string|min:4|max:25',
        'price' => 'required|decimal:2',
        'picture' => 'nullable',
        'description' => 'required|string'
    ]);

    $s = new Student;
    $s->name = request('name');
    $s->price = request('price')*100;
    $s->description = request('description');
    $s->picture = request('picture');
    $s->save();
    return redirect('/students/'.$s->id);
});






