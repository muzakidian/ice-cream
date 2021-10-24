@extends('layouts.main')
@section('content')
<div class="container">

<h1>Halaman Pemesanan<h1>
    <form class="text-center border border-light p-5" action="{{ route('simpan') }}" method="POST">
    <p class="h4 mb-4">Pesan Es Krim kamu disini!</P>
    <div class="form-row mb-4">

    <!-- Nama Depan -->
    <div class="row mb-4">
    <div class="col">
        <input type="text" id="namadepan"
        class="form-control" placeholder="Nama Depan" name="namadepan">
    </div>

    <!-- Nama Belakang -->
    <div class="col">
        <input type="text" id="namabelakang"
        class="form-control" placeholder="Nama Belakang" name="namabelakang">
    </div>
    </div>

  <!-- Mau pesan apa -->
  <div class="row mb-4">
  <div class="col">
     <input type="text" id="pesan"
        class="form-control" placeholder="Es Krim apa?" name="pesan">
        </div>
        </div>

  <!-- Email input -->
  <div class="row mb-4">
  <div class="col">
     <input type="email" id="email"
        class="form-control" placeholder="Email" name="email">
        </div>
        </div>
    
    <!-- No HP -->
    <div class="row mb-4">
    <div class="col">
        <input type="text" id="nohp"
            class="form-control" placeholder="No HP" name="nohp">
    </div>
    </div>

  <!-- Submit button -->
  <button class="btn btn-info my-4 btn-dark" type="submit">Pesan Sekarang!</button>
</form>
</div>
@endsection