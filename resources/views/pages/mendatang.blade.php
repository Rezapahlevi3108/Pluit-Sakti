@extends('layouts.main')

@section('content')

<section class="margin-top-145 margin-bottom-118">
    <div class="container">
        <div class="d-block d-md-flex align-items-center justify-content-between">
            <h1 class="font-size-36 font-weight-700 text-white d-none d-md-block">Mendatang</h1>
            <h1 class="font-size-28 font-weight-700 text-white d-block d-md-none">Mendatang</h1>
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

        <div class="row mt-4 mt-md-5">
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

        <div class="row mt-4 mt-md-5">
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

        <x-btn-primary class="d-flex align-items-center mt-3 mt-md-5">
            Lebih Banyak
            <img src="{{ asset('assets/img/refresh-icon.svg') }}" class="ms-2">
        </x-btn-primary>
    </div>
</section>

@endsection