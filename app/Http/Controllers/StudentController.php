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
        return view('index', compact('students'));
    }

    public function show(Student $student)
    {
        return view('show', compact('student'));
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

    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }

    public function update(Student $student)
    {
        request()->validate([
            'name' => 'required|string|min:4|max:25',
            'price' => 'required|decimal:2',
            'picture' => 'nullable',
            'description' => 'required|string'
        ]);

        $student->name = request('name');
        $student->price = request('price')*100;
        $student->description = request('description');
        $student->picture = request('picture');
        $student->save();
        return redirect('/students/'.$student->id);
    }
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/students');
    }
}
