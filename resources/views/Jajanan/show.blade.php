@extends('layouts.master')

@section('title', $jajanan['nama'])

@section('content')
<div class="card shadow-sm p-3 p-md-4">
    <div class="row g-4">
        <div class="col-md-5">
            <img src="{{ $jajanan['gambar'] }}"
                 alt="{{ $jajanan['nama'] }}"
                 class="img-fluid rounded w-100">
        </div>

        <div class="col-md-7">
            <h2 class="fw-bold">{{ $jajanan['nama'] }}</h2>
            <p class="text-muted">Asal daerah: {{ $jajanan['asal'] }}</p>

            <h4 class="fw-bold">
                Rp{{ number_format($jajanan['harga'], 0, ',', '.') }}
            </h4>

            <hr>

            <h5>Bahan Utama</h5>
            <p>{{ $jajanan['bahan'] }}</p>

            <h5>Deskripsi</h5>
            <p>{{ $jajanan['deskripsi'] }}</p>

            <a href="{{ route('jajanan.index') }}"
               class="btn btn-cokelat mt-2">Kembali ke Katalog</a>
        </div>
    </div>
</div>
@endsection