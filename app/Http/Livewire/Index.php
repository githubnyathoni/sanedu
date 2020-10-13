<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Index extends Component
{
    public $promt;
    
    protected $listeners = [
        'refreshParent'
    ];

    public function refreshParent()
    {
        $this->promt = "mantep";
    }

    public function render()
    {
        return view('livewire.index');
    }
}
