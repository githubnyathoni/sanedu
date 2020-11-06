<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\User;
use Livewire\WithPagination;
use App\Http\Livewire\Model;

class Rekomendasi extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search_rekom, $orders;
    public $recomendation;

    public function mount()
    {
        $this->orders = Order::where('status',2)->get();
    }

    public function render()
    {
        return view('livewire.rekomendasi', [
            'orders' => Order::where('status',2)->paginate(10)
        ]);
    }

    public function recom($id)
    {
        User::find($id)->update(['recomendation' => $this->recomendation]);
        session()->flash('success','Rekomendasi berhasil dikirim!');
    }
}
