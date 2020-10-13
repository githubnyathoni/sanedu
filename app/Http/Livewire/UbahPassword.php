<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Hash;

class UbahPassword extends Component
{
    public $change_pass;
    public $search_pass;

    public function render()
    {
        return view('livewire.ubah-password', [
            'users' => $this->search_pass == null ? User::where('role','user')->get() : User::where('role','user')->where('name','like','%'.$this->search_pass.'%')->get()
        ]);
    }


    public function change($id)
    {
        User::find($id)->update(['password' => Hash::make($this->change_pass)]);
        session()->flash('success','Password berhasil diubah!');
    }
}
