<?php

namespace App\Livewire;

use App\Models\Student;
use Livewire\Component;

class UpdateStudent extends Component
{
    public $name;
    public $price;

    public function mount()
    {
        $student = Student::find(2);
        $this->name = $student->name;
        $this->price = $student->price;
    }

    public function updateStudent()
    {
        sleep(3);
        $student = Student::find(2);
        $this->validate([
            'name' => 'required|string|max:25',
            'price' => 'required|numeric|min:0',
        ]);
        $student->name = $this->name;
        $student->price = $this->price;
        $student->save();

        session()->flash('message', 'Student updated successfully.');
    }

    public function render()
    {
        return view('livewire.update-student');
    }
}
