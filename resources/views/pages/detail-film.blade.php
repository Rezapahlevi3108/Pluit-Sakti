@extends('layouts.main')

@section('content')

<section class="hero margin-top-70" style="min-height: 646px;">
    <div class="container">
        <main class="content my-4 my-md-0">
            <div class="d-block d-md-flex align-items-center justify-content-between">
                <div class="">
                    <img src="{{ asset('assets/img/poster-film-7.png') }}" alt="Movie Poster">
                </div>
                <div class="ms-0 ms-md-4 mt-4 mt-md-0">
                    <span class="font-size-14 font-weight-500 text-white">ADVENTURE • ACTION • HISTORY</span>
                    <h1 class="font-size-64 font-weight-700 text-white mb-0 d-none d-md-block">Indiana Jones and The Dial Of Destiny</h1>
                    <h1 class="font-size-32 font-weight-700 text-white mb-1 d-block d-md-none">Indiana Jones and The Dial Of Destiny</h1>
                    <span class="font-size-14 font-weight-700 text-white border border-white rounded-4 py-1 px-2">16+</span>
                    <div class="d-flex align-items-center mt-3">
                        <img src="{{ asset('assets/img/star-icon.svg') }}">
                        <span class="font-size-16 font-weight-600 text-white ms-2">9.0</span>
                        <span class="font-size-14 font-weight-500 text-white ms-3">2023 | 2j 35m</span>
                    </div>
                    <p class="col-md-8 font-size-16 font-weight-500 text-white mt-4">Menemukan dirinya berada di era baru, dan mendekati masa pensiun, Indy bergulat dengan dunia yang tampaknya sudah melampaui batasnya. Namun saat tentakel kejahatan yang sangat familiar kembali dalam wujud rival lamanya, Indy harus mengenakan topinya dan mengambil cambuknya sekali lagi untuk memastikan artefak kuno dan kuat tidak jatuh ke tangan yang salah.</p>
                    <div class="d-md-flex d-block align-items-center mt-4">
                        <span class="font-size-16 font-weight-500 color-secondary">Dibintangi :</span>
                        <span class="font-size-16 font-weight-600 text-white"> Winona Ryder, David Harbour, Millie Bobby Brown</span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</section>

<section class="margin-top-70">
    <div class="container">
        <h1 class="font-size-36 font-weight-700 text-white d-none d-md-block">Plot</h1>
        <h1 class="font-size-28 font-weight-700 text-white d-block d-md-none">Plot</h1>
        <p class="font-size 16 font-weight-500 text-white mt-4">Menemukan dirinya berada di era baru, dan mendekati masa pensiun, Indy bergulat dengan dunia yang tampaknya sudah melampaui batasnya. Namun saat tentakel kejahatan yang sangat familiar kembali dalam wujud rival lamanya, Indy harus mengenakan topinya dan mengambil cambuknya sekali lagi untuk memastikan artefak kuno dan kuat tidak jatuh ke tangan yang salah.</p>
    </div>
</section>

<section class="mt-5 mb-5">
    <div class="container">
        <h1 class="font-size-36 font-weight-700 text-white d-none d-md-block">Videos</h1>
        <h1 class="font-size-28 font-weight-700 text-white d-block d-md-none">Videos</h1>
        <iframe src="https://youtube.com/embed/eQfMbSe7F2g" height="727" class="w-100 mt-3" frameborder="0" allowfullscreen></iframe>
    </div>
</section>

<section class="margin-top-70">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="d-block d-md-flex align-items-center justify-content-between mb-4">
                <div>
                    <h1 class="font-size-36 font-weight-700 text-white d-none d-md-block">Dibintangi Oleh</h1>
                    <h1 class="font-size-28 font-weight-700 text-white d-block d-md-none">Dibintangi Oleh</h1>
                </div>
                <div class="mt-3 mt-md-0">
                    <x-btn-primary class="py-2" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </x-btn-primary>
                    <x-btn-primary class="py-2" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </x-btn-primary>
                </div>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                        <div class="col-md-2 col-6">
                            <x-artist-card image="{{ asset('assets/img/artist.png') }}" name="Milly Bobby Brown" title="Jane Hopper" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-2 mt-md-4">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="border-0 active rounded-circle me-2 px-1 py-1" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="border-0 rounded-circle me-2 px-1 py-1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="border-0 rounded-circle px-1 py-1" aria-label="Slide 3"></button>
            </div>
        </div>
    </div>
</section>

<section class="margin-top-70 margin-bottom-118">
    <div class="container">
        <div class="d-block d-md-flex align-items-center justify-content-between">
            <h1 class="font-size-36 font-weight-700 text-white d-none d-md-block">Film Serupa</h1>
            <h1 class="font-size-28 font-weight-700 text-white d-block d-md-none">Film Serupa</h1>
            <x-btn-primary class="d-flex align-items-center mt-3 mt-md-0">
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

@endsection