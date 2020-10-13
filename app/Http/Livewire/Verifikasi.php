<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;
use File;
use Illuminate\Support\Facades\Redirect;
use Livewire\WithPagination;

class Verifikasi extends Component
{
    use WithPagination;

    public $search_verif;

    public function render()
    {
        return view('livewire.verifikasi', [
            'orders' => $this->search_verif == null ? Order::where('status',1)->get() : Order::where('status',1)->where('id','like','%'.$this->search_verif.'%')->get()
        ]);
    }

    public function verify($id)
    {
        if($id){
            Order::where('id', $id)->update(['status' => 2]);
            $order = Order::where('id',$id)->get();
            // Alert::toast('Pembayaran Berhasil divalidasi!','success');
            session()->flash('success','Pemesanan berhasil divalidasi!');
        }
    }

    public function reject($id)
    {
        if($id){
            $order = Order::where('id', $id)->update(['status' => 0, 'photo' => null]);
            // File::delete('uploads/'.$order->photo);
            session()->flash('reject','Pemesanan berhasil ditolak!');
        }
    }
    
}
