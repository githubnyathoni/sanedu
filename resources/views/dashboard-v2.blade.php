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

    <p class="font-weight-bold mt-4">Hallo, {{ $user->name}}</p>
    <p class="mb-0">Terima kasih banyak untuk pemesanannya.</p>
    <p>Data pemesanan kamu sudah kami terima!</p>
    <p class="font-weight-bold mt-4">Cek Pesanan Kamu</p>

    <div class="card mt-2 shadow bg-white rounded">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <p class="font-weight-bold mb-0">Produk yang dibeli</p>
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
            <hr>
            <div class="row justify-content-between">
                <div class="col-2">
                    <p class="font-weight-bold text-left">Total</p>
                </div>
                <div class="col-2">
                    <p class="font-weight-bold text-right">Rp. 250000</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="mt-5">

    <p class="font-weight-bold">Transfer ke</p>
    <table class="table table-striped table-bordered table-hover bg-light">
        <tbody>
          <tr>
            <td>Nomor Rekening</td>
            <td><p id="norek">082938712</p></td>
            <td><a href="#" onclick="copyElementText('norek')">Copy</a></td>
          </tr>
          <tr>
            <td>ke Bank</td>
            <td>BRI a.n. Aldi Taher</td>
          </tr>
          <tr>
            <td>Total Biaya</td>
            <td>Rp. 250000</td>
            <td>Copy</td>
          </tr>
        </tbody>
    </table>

    <p class="font-weight-bold mt-2">Catatan</p>
    <ul>
        <li>Setelah melakukan konfirmasi pembayaran, verifikasi pesanan Anda akan kami proses dalam 60 menit dan selambat-lambatnya 1x24 jam.</li>
        <li>Pembayaran diatas jam 21:00 WIB akan diproses hari berikutnya.</li>
        <li>Data pembelian dan petunjuk pembayaran juga sudah kami kirim ke email Anda, silakan cek email dari kami di inbox, promotion, dan atau di folder spam.</li>
    </ul>

    <hr class="mt-5 mb-5">
    <p>
        <strong>Wajib: </strong>Setelah melakukan transfer pembayaran, harap verifikasi pembayaran kamu melalui halaman ini:
    </p>
    <a type="button" href="/verifikasi" class="btn btn-success btn-lg btn-block mb-5">VERIFIKASI PEMBAYARAN</a>
</div>
@endsection

@section('scripts')
<script>
    function copyElementText(id) {
        var text = document.getElementById(id).innerText;
        var elem = document.createElement("textarea");
        document.body.appendChild(elem);
        elem.value = text;
        elem.select();
        document.execCommand("copy");
        alert("Copied to clipboard: " + elem.value);
        document.body.removeChild(elem);
    }
  </script>
  @endsection
