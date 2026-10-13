
@extends('layouts.master')

@section('title', 'Kontak')

@section('content')
<div class="text-center mb-4">
    <h2 class="fw-bold">Hubungi Kami</h2>
    <p>Informasi kontak JajanNusantara</p>
</div>

<div class="card shadow-sm p-4 mx-auto" style="max-width: 600px;">
    <h5 class="fw-bold mb-3">JajanNusantara</h5>

    <p>🍡 Katalog Kuliner Jajanan Tradisional Indonesia</p>
    <p>📧 Email: jajannusantara@gmail.com</p>
    <p>📍 Lokasi: Indonesia</p>
    <p>📱 Instagram: @jajannusantara</p>

    <a href="{{ route('jajanan.index') }}"
       class="btn btn-cokelat mt-2">
        Lihat Katalog
    </a>
</div>
@endsection
