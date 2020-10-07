@extends('layouts.master')
@section('content')
<div class="container">
    <div class="d-flex justify-content-center mt-5">
        <img src="{{ asset('logo_legacy.png')}}" width="100px"/>
    </div>


    <div class="card mt-5 mb-5 shadow bg-white rounded">
        <div class="card-header">
            <p class="text-center mb-0">Sudah Punya Akun? <a href="{{route('login')}}">Login</a></p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <p>Isi data-data dibawah ini untuk informasi akses di website ini.</p>
                <h4>Informasi Pribadi</h4>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama*</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Asal Sekolah*</label>
                    <input type="text" name="school" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomor WhatsApp*</label>
                    <input type="number" class="form-control" name="phone_number" required>
                </div>
                <h4>Informasi Akun</h4>
                <p class="mb-0">Informasi ini digunakan untuk login dan memanfaatkan fasilitas yang disediakan.</p>
                <p>Mohon informasi ini diingat/dicatat untuk menghindari hal-hal yang tidak diinginkan.</p>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat Email*</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password*</label>
                    <input type="password" class="form-control" name="password" required>
                </div>

                
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success btn-lg float-right">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
