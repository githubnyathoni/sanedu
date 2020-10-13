<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PasswordForm extends Component
{
    public $change_pass;
    
    public function render()
    {
        return view('livewire.password-form');
    }
}
