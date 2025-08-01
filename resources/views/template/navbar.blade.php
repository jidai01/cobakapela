{{-- <style>
    nav {
        background-color: rgb(2, 33, 46);
    }

    h1 {
        color: blanchedalmond;
         font-family: "Titan One", monospace;
  font-weight: 100;
  font-style: normal;
    }

    .nav-link {
        color:aliceblue;
        font-family: "Cormorant", serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;

    }

    #login {
        background-color:rgb(0, 109, 160);
        color: wheat;
    }
</style> --}}

<nav class="navbar bg-secondary navbar-expand-lg d-flex flex-column flex-md-column">
    <div class="container-fluid border-bottom border-2 border-white d-flex flex-column flex-md-row align-items-center justify-content-center p-3 px-4"
        style="min-height: 80px;">
        <img src="{{ asset('storage/img/logo.png') }}" alt="logo-sanbello" width="60" height="60"
            class="border border-white rounded-circle mb-2 mb-md-0 me-md-5">
        <h1 class="text-center m-0 responsive-heading"><strong>Kapela St. Agustinus Bello</strong></h1>
    </div>

    <div class="container-fluid my-2 d-flex justify-content-center align-items-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-center align-items-center mx-auto mb-2 mb-lg-0">
                <li class="nav-item mx-1 w-100">
                    <a class="nav-link text-center py-1" href="/">Beranda</a>
                </li>
                <li class="nav-item mx-1 w-100 dropdown">
                    <a class="nav-link text-center py-1 dropdown-toggle" href="/profil" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Profil</a>
                    <ul class="dropdown-menu p-0 py-1">
                        <li><a class="dropdown-item d-flex justify-content-center" href="/profil/sejarah">Sejarah</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider m-0">
                        </li>
                        <li><a class="dropdown-item d-flex justify-content-center" href="/profil/organisasi">Struktur
                                Organisasi</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-1 w-100">
                    <a class="nav-link text-center py-1" href="/pengumuman">Pengumuman</a>
                </li>
                <li class="nav-item mx-1 w-100">
                    <a class="nav-link text-center py-1" href="/berita">Berita</a>
                </li>
                <li class="nav-item mx-1 w-100">
                    <a id="login" class="btn btn-outline-dark text-center py-1 w-100" href="/login">LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
