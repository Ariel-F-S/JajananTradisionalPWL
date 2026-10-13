
@extends('layouts.master')

@section('title', 'Katalog Jajanan')

@section('content')
<h2 class="fw-bold">Katalog Jajanan Tradisional</h2>
<p>Temukan jajanan tradisional favoritmu di sini.</p>

<div class="row g-4 mt-2">
    @foreach ($jajanan as $item)
    <div class="col-sm-6 col-lg-4">
        <div class="card shadow-sm h-100">
            <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}">
            <div class="card-body">
                <h5 class="fw-bold">{{ $item['nama'] }}</h5>
                <p class="mb-2">Asal: {{ $item['asal'] }}</p>
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
