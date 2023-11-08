<nav class="navbar navbar-expand-lg bg-color-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-0 ms-md-5 me-auto mb-2 mb-lg-0">
                <li class="nav-item me-3">
                    <a class="nav-link font-size-16 font-weight-500 text-white {{ (request()-> is('sedang-tayang')) ? 'active' : '' }}" aria-current="page" href="{{ route('sedang_tayang') }}">Sedang Tayang</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link font-size-16 font-weight-500 text-white {{ (request()-> is('terpopuler')) ? 'active' : '' }}" href="{{ route('terpopuler') }}">Terpopuler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-size-16 font-weight-500 text-white {{ (request()-> is('mendatang')) ? 'active' : '' }}" href="{{ route('mendatang') }}">Mendatang</a>
                </li>
            </ul>
            <form class="search text-start" role="search">
                <input class="border-0" type="search" placeholder="Cari Film ...">
            </form>
        </div>
    </div>
</nav>

<script>
    var nav = document.querySelector('nav');
    window.addEventListener('scroll', function () {
      if(window.pageYOffset > 50) {
        nav.classList.add('shadow');
      }else{
        nav.classList.remove('shadow', );
      }
    });
</script>