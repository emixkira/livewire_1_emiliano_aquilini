<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count--;
    }

    public function incrementBy($value)
    {
        $this->count += $value;
    }

    public function decrementBy($value)
    {
        $this->count -= $value;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}