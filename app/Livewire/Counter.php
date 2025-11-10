<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 7;
    public $username = 'John Doe';

    public function decrement()
    {
        $this->count--;
    }
    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
