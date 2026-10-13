@extends('layouts.master')

@section('title', 'Home - Jajanan Tradisional')

@section('content')

<section class="hero">
    <div class="hero-container">

        <div class="hero-text">
            <span class="hero-label">
                JAJANAN TRADISIONAL INDONESIA
            </span>

            <h1>
                Rasa Lama,<br>
                <span>Cerita Baru.</span>
            </h1>

            <p>
                Temukan berbagai jajanan tradisional Indonesia
                yang kaya rasa, budaya, dan cerita dari berbagai
                penjuru Nusantara.
            </p>

            <a href="{{ route('katalog') }}" class="hero-button">
                Jelajahi Katalog →
            </a>
        </div>

        <div class="hero-image">
            <img
                src="{{ asset('images/hero-jajanan.jpg') }}"
                alt="Jajanan Tradisional Indonesia"
            >

            <div class="hero-badge">
                RASA<br>
                NUSANTARA
            </div>
        </div>

    </div>
</section>

<section class="intro">
    <h2>Warisan Rasa Nusantara</h2>

    <p>
        Indonesia memiliki beragam jajanan tradisional yang
        diwariskan dari generasi ke generasi. Dari klepon yang
        manis hingga lemper yang gurih, setiap jajanan memiliki
        karakter dan cerita tersendiri.
    </p>
</section>

<section class="featured">

    <div class="featured-header">
        <h2>Favorit Nusantara</h2>

        <a href="{{ route('katalog') }}" class="featured-link">
            Lihat Semua →
        </a>
    </div>

    <div class="snack-grid">

        <div class="snack-card">
            <img src="{{ asset('images/klepon.jpg') }}" alt="Klepon">

            <div class="snack-card-content">
                <h3>Klepon</h3>
                <p>Jajanan tradisional khas Jawa dengan isian gula merah.</p>
            </div>
        </div>

        <div class="snack-card">
            <img src="{{ asset('images/lemper.jpg') }}" alt="Lemper">

            <div class="snack-card-content">
                <h3>Lemper</h3>
                <p>Ketan gurih dengan isian ayam yang dibungkus daun pisang.</p>
            </div>
        </div>

        <div class="snack-card">
            <img src="{{ asset('images/serabi.jpg') }}" alt="Serabi">

            <div class="snack-card-content">
                <h3>Serabi</h3>
                <p>Kue tradisional lembut dengan cita rasa khas Nusantara.</p>
            </div>
        </div>

    </div>

</section>

<section class="cta">
    <h2>
        Kenali Jajanan,<br>
        Kenali Indonesia.
    </h2>

    <p>
        Jelajahi katalog dan temukan jajanan tradisional favoritmu.
    </p>

    <a href="{{ route('katalog') }}" class="cta-button">
        Lihat Katalog
    </a>
</section>

@endsection