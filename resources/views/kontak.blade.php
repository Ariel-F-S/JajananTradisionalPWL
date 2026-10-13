
@extends('layouts.master')

@section('title', 'Kontak')

@section('content')
<div class="text-center mb-4">
    <h2 class="fw-bold">Hubungi Kami</h2>
    <p>Informasi kontak JajanNusantara</p>
</div>

<div class="card shadow-sm p-4 mx-auto" style="max-width: 800px;">
    <h5 class="fw-bold mb-4" style="text-align: center;">Kelompok 7</h5>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <div class="container text-center">
                        <div class="row-2">
                            <div class="col">
                                <img  src="{{ asset('DSC_0009.JPG') }}" alt="Ariel Ferdiansyah Susanto" class="img-fluid mb-3" style="max-width: 150px;">
                            </div>
                            <div class="col" style="text-align: left">
                                <p class="mb-1"><strong>Nama:</strong> Ariel Ferdiansyah Susanto</p>
                                <p class="mb-1"><strong>Kelas:</strong> 2D</p>
                                <p class="mb-1"><strong>NIM:</strong> 253107030055</p>
                                <p class="mb-1"><strong>Nomor Telepon :</strong> <a href="https://wa.me/6285707353189" target="_blank">085707353189</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="container text-center">
                        <div class="row-2">
                            <div class="col">
                                <img  src="{{ asset('veerky.jpeg') }}" alt="Veerky Tandio" class="img-fluid mb-3" style="max-width: 150px;">
                            </div>
                            <div class="col" style="text-align: left">
                                <p class="mb-1"><strong>Nama:</strong> Veerky Tandio</p>
                                <p class="mb-1"><strong>Kelas:</strong> 2D</p>
                                <p class="mb-1"><strong>NIM:</strong> 253107030015</p>
                                <p class="mb-1"><strong>Nomor Telepon :</strong> <a href="https://wa.me/6285736423261" target="_blank">085736423261</a></p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <br>
    <a href="{{ route('jajanan.index') }}"
       class="btn btn-cokelat mt-2">
        Lihat Katalog
    </a>
</div>
@endsection
