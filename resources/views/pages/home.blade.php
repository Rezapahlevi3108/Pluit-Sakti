@extends('layouts.main')

@section('content')

<section class="hero margin-top-70" style="min-height: 514px;">
    <div class="container">
        <main class="content">
            <span class="font-size-14 font-weight-500 text-white">ADVENTURE • ACTION • HISTORY</span>
            <h1 class="font-size-64 font-weight-700 text-white mb-0 d-none d-md-block">Indiana Jones and The Dial Of Destiny</h1>
            <h1 class="font-size-32 font-weight-700 text-white mb-1 d-block d-md-none">Indiana Jones and The Dial Of Destiny</h1>
            <span class="font-size-14 font-weight-700 text-white border border-white rounded-4 py-1 px-2">16+</span>
            <div class="d-flex align-items-center mt-3">
                <img src="{{ asset('assets/img/star-icon.svg') }}">
                <span class="font-size-16 font-weight-600 text-white ms-2">9.0</span>
                <span class="font-size-14 font-weight-500 text-white ms-3">2023 | 2j 35m</span>
            </div>
            <p class="col-md-6 font-size-16 font-weight-500 text-white mt-4">Menemukan dirinya berada di era baru, dan mendekati masa pensiun, Indy bergulat dengan dunia yang tampaknya sudah melampaui batasnya. Namun saat tentakel kejahatan yang sangat familiar kembali dalam wujud rival lama...</p>
            <div class="d-md-flex d-block align-items-center mt-4">
                <span class="font-size-16 font-weight-500 color-secondary">Dibintangi :</span>
                <span class="font-size-16 font-weight-600 text-white"> Winona Ryder, David Harbour, Millie Bobby Brown</span>
            </div>
            <x-btn-primary class="mt-4 mt-md-5" onclick="location.href = '/detail-film'">
                <img src="{{ asset('assets/img/eye-icon.svg') }}" class="me-1">
                Lihat Film
            </x-btn-primary>
        </main>
    </div>
</section>

<section class="margin-top-70">
    <div class="container">
        <div class="d-block d-md-flex align-items-center justify-content-between">
            <h1 class="font-size-36 font-weight-700 text-white d-none d-md-block">Sedang Tayang</h1>
            <h1 class="font-size-28 font-weight-700 text-white d-block d-md-none">Sedang Tayang</h1>
            <x-btn-primary class="d-flex align-items-center mt-3 mt-md-0" onclick="location.href = '/sedang-tayang'">
                Lebih Banyak
                <img src="{{ asset('assets/img/chevron-right-icon.svg') }}" class="ms-2">
            </x-btn-primary>
        </div>
        <div class="row mt-5">
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-1.png') }}" title="Baby Driver" year="2017" duration="1h 53m" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-2.png') }}" title="Squid Game" year="2017" duration="1 Season" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-3.png') }}" title="Titans" year="2018" duration="4 Seasons" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-4.png') }}" title="Wednesday" year="2022" duration="1 Season" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-5.png') }}" title="The Witcher" year="2019" duration="2 Seasons" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-6.png') }}" title="1899" year="2022" duration="1 Season" />
                </a>
            </div>
        </div>
    </div>
</section>

<section class="margin-top-145">
    <div class="container">
        <div class="d-block d-md-flex align-items-center justify-content-between">
            <h1 class="font-size-36 font-weight-700 text-white d-none d-md-block">Terpopuler</h1>
            <h1 class="font-size-28 font-weight-700 text-white d-block d-md-none">Terpopuler</h1>
            <x-btn-primary class="d-flex align-items-center mt-3 mt-md-0" onclick="location.href = '/terpopuler'">
                Lebih Banyak
                <img src="{{ asset('assets/img/chevron-right-icon.svg') }}" class="ms-2">
            </x-btn-primary>
        </div>
        <div class="row mt-5">
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-1.png') }}" title="Baby Driver" year="2017" duration="1h 53m" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-2.png') }}" title="Squid Game" year="2017" duration="1 Season" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-3.png') }}" title="Titans" year="2018" duration="4 Seasons" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-4.png') }}" title="Wednesday" year="2022" duration="1 Season" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-5.png') }}" title="The Witcher" year="2019" duration="2 Seasons" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-6.png') }}" title="1899" year="2022" duration="1 Season" />
                </a>
            </div>
        </div>
    </div>
</section>

<section class="margin-top-145">
    <div class="container">
        <div class="d-block d-md-flex align-items-center justify-content-between">
            <h1 class="font-size-36 font-weight-700 text-white d-none d-md-block">Mendatang</h1>
            <h1 class="font-size-28 font-weight-700 text-white d-block d-md-none">Mendatang</h1>
            <x-btn-primary class="d-flex align-items-center mt-3 mt-md-0" onclick="location.href = '/mendatang'">
                Lebih Banyak
                <img src="{{ asset('assets/img/chevron-right-icon.svg') }}" class="ms-2">
            </x-btn-primary>
        </div>
        <div class="row mt-5">
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-1.png') }}" title="Baby Driver" year="2017" duration="1h 53m" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-2.png') }}" title="Squid Game" year="2017" duration="1 Season" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-3.png') }}" title="Titans" year="2018" duration="4 Seasons" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-4.png') }}" title="Wednesday" year="2022" duration="1 Season" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-5.png') }}" title="The Witcher" year="2019" duration="2 Seasons" />
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('detail_film') }}" class="text-decoration-none">
                    <x-movie-card image="{{ asset('assets/img/poster-film-6.png') }}" title="1899" year="2022" duration="1 Season" />
                </a>
            </div>
        </div>
    </div>
</section>

<section class="margin-top-145 margin-bottom-118">
    <div class="container">
        <h1 class="font-size-36 font-weight-700 text-white d-none d-md-block">Genre Tersedia</h1>
        <h1 class="font-size-28 font-weight-700 text-white d-block d-md-none">Genre Tersedia</h1>
        <div class="mt-4">
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Action" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Adventure" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Animation" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Comedy" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Crime" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Documentary" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Drama" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Family" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Fantasy" />
            </a>
        </div>
        <div class="">
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Action" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Adventure" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Animation" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Comedy" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Crime" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Documentary" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Drama" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Family" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Fantasy" />
            </a>
        </div>
        <div class="">
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Action" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Adventure" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Animation" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Comedy" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Crime" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Documentary" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Drama" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Family" />
            </a>
            <a href="{{ route('genre') }}" class="text-decoration-none genre-display">
                <x-genre title="Fantasy" />
            </a>
        </div>
    </div>
</section>

@endsection