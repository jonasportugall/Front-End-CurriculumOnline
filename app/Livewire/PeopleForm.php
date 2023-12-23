<?php

namespace App\Livewire;

use Livewire\Component;

class PeopleForm extends Component
{

    public $name;
    
    public function render()
    {   
        return view('livewire.people-form');
    }
}
