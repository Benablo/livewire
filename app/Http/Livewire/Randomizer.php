<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Randomizer extends Component
{
    public $number = 0;
    public $name = 'Mark';

    public function randomize() {
        $this->number = rand(10,100);
    }

    public function render()
    { 
        return view('livewire.randomizer');
    }
}
