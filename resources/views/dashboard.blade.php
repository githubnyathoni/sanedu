@extends('layouts.master')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#d2d5dc;">
    <img class="navbar-brand" src="{{ asset('logo.png')}}">
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
      
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Hallo, {{ $user->name }}
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
        </form>
      </div>
    </ul>
    </div>
</nav>

<div class="container">
    <div class="d-flex justify-content-center mt-5">
        <img src="{{ asset('logo_legacy.png')}}" width="100px"/>
    </div>

    <div class="card mt-5 shadow bg-white rounded">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <p class="font-weight-bold mb-0">Pesanan Anda</p>
                <p class="font-weight-bold mb-0">Biaya</p>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-2 col-md-2">
                    <img src="{{ asset('logo_legacy_2.png')}}" width="100px"/>
                </div>
                <div class="col-sm-8 col-md-8">
                    <p class="font-weight-bold">Legacy Project III</p>
                </div>
                <div class="col-sm-2 col-md-2">
                    <p class="text-right font-weight-bold">Rp. {{$product->price}}</p>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-2 mt-1">
                    <p class="text-left">Diskon 90%</p>
                </div>
                <div class="col-2 mt-1">
                    <p class="text-right text-danger">- Rp. {{$product->price*0.9}}</p>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-2">
                    <p class="font-weight-bold text-left">Total</p>
                </div>
                <div class="col-2">
                    <p class="font-weight-bold text-right">Rp. 250000</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle-fill text-success" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg>
                    Garansi Uang Kembali 100%*</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-5 shadow bg-white rounded">
        <div class="card-body">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Syarat dan Ketentuan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Syaratnya kamu tidak boleh menuntut kami.
                            Sip, Thank You.
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('order')}}">
                @csrf
                <h4 class="mt-2">Pilih metode pembayaran</h4>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        <input type="radio" name="options" id="dana" value="1" required>Dana
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="gopay" value="2">Gopay
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="bri" value="3">BRI
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="bni" value="4">BNI
                    </label>
                    <label class="btn btn-primary">
                        <input type="radio" name="options" id="alfamart" value="5">Alfamart
                    </label>
                </div>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" name="snk" required>
                    <label class="form-check-label" for="defaultCheck1">
                        Dengan ini saya mendaftar dan menyetujui <a href="#exampleModal" data-toggle="modal" data-target="#exampleModal"> Syarat dan Ketentuan</a> pengguna.
                    </label>
                </div> 
                <div class="row">
                    <div class="col">
                        <p class="font-weight-bold mt-2 mb-0">Total Bayar</p>
                        <h5>Rp. 250000</h5>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-success btn-lg float-right">Bayar Sekarang</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection