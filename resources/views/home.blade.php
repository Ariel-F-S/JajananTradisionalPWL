
@extends('layouts.master')

@section('title', 'Beranda')

@section('content')
<div class="hero p-4 p-md-5 mb-5">
    <h1 class="fw-bold">Jelajahi Jajanan Tradisional Indonesia!</h1>
    <p class="mt-3">
        Kenali aneka jajanan Nusantara dengan cita rasa khas,
        bahan sederhana, dan cerita dari berbagai daerah.
    </p>
    <a href="{{ route('jajanan.index') }}" class="btn btn-cokelat">
        Lihat Katalog
    </a>
</div>

<h3 class="fw-bold mb-3">Jajanan Pilihan</h3>
<div class="row g-4">
    @foreach ($jajanan as $item)
    <div class="col-md-4">
        <div class="card shadow-sm h-100">
            <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}">
            <div class="card-body">
                <h5 class="fw-bold">{{ $item['nama'] }}</h5>
                <p>Asal: {{ $item['asal'] }}</p>
                <p class="fw-bold">
                    Rp{{ number_format($item['harga'], 0, ',', '.') }}
                </p>
                <a href="{{ route('jajanan.show', $item['id']) }}"
                   class="btn btn-cokelat">Lihat Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
