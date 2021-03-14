@extends('layouts.main')
@section('content')
@if (session('successMsg'))
    <div class="alert alert-success" role="alert">
        {{ session('successMsg') }}
    </div>
    <h1>Terima kasih telah membeli dari kami!<h1>
        <h2>Mohon segera melakukan pembayaran!</h2>
@endsection