<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $todos = [];

    public $todo = '';

    public function add()
    {
        $this->todos[] = $this->todo;

    }
    public function render()
    {
        return view('livewire.home');
    }
}
