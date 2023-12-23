<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Province;

class TodoList extends Component
{
    public $provincias;
    public $newProvince;

    public function render()
    {
        $this->$provincias = Province::all();
        return view('livewire.todo-list');
    }

    public function addProvince()
    {
        Province::create(['' => $this->newProvince]);
        $this->newProvince = '';
        $this->emit('provinceAdded'); // Emitir evento para atualizações no front-end
    }
}
