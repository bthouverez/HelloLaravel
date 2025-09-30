<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // Aller chercher tous les students dans la base
        $students = Student::all();
        // Envoyer ces students à une vue
        return view('index', [
            'students' => $students
        ]);
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('show', [
            'student' => $student
        ]);
    }
    public function create()
    {
        return view('create');
    }

    public function store()
    {
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
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('edit', compact('student'));
    }

    public function update($id)
    {
        request()->validate([
            'name' => 'required|string|min:4|max:25',
            'price' => 'required|decimal:2',
            'picture' => 'nullable',
            'description' => 'required|string'
        ]);

        $s = Student::findOrFail($id);
        $s->name = request('name');
        $s->price = request('price')*100;
        $s->description = request('description');
        $s->picture = request('picture');
        $s->save();
        return redirect('/students/'.$id);
    }
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('/students');
    }
}
