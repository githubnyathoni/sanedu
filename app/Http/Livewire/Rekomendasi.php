<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\User;

class Rekomendasi extends Component
{
    public $search_rekom;
    public $recomendation;

    public function render()
    {
        return view('livewire.rekomendasi', [
            'orders' => Order::where('status',2)->get()
        ]);
    }

    public function recom($id)
    {
        User::find($id)->update(['recomendation' => $this->recomendation]);
        session()->flash('success','Rekomendasi berhasil dikirim!');
    }
}
