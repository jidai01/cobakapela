<style>
    #sidebarToggle {
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: 1000;
    }

    #sidebar {
        padding-top: 60px;
    }

    .navbar-toggler {
        display: inline-block;
        cursor: pointer;
    }

    .bar1,
    .bar2,
    .bar3 {
        width: 1.5rem;
        height: 0.3rem;
        background-color: black;
        margin: 0.3rem 0;
        transition: 0.4s;
    }

    .change .bar1 {
        transform: translate(0, 0.6rem) rotate(-45deg);
    }

    .change .bar2 {
        opacity: 0;
    }

    .change .bar3 {
        transform: translate(0, -0.6rem) rotate(45deg);
    }
</style>

<button class="navbar-toggler d-block border-0" type="button" id="sidebarToggle" aria-label="Toggle navigation"
    onclick="myFunction(this)">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
</button>

<nav class="navbar navbar-expand-lg bg-secondary d-flex flex-column min-vh-100" id="sidebar">
    <div class="collapse" id="sidebar-show">
        <div class="container-fluid border-bottom border-2 border-dark d-flex flex-column align-items-center justify-content-center p-3 px-4"
            style="min-height: 80px;">
            <img src="{{ asset('storage/img/logo.png') }}" alt="logo-sanbello" width="50" height="50"
                class="border border-white rounded-circle mb-2">
            <h6 class="text-center m-0 responsive-heading"><strong>Kapela St. Agustinus Bello</strong></h6>
        </div>

        <div class="container-fluid my-2 pe-2">
            <ul class="navbar-nav d-flex flex-column w-100">
                @if (Auth::check())
                    @php $role = Auth::user()->role; @endphp
                    <li class="nav-item">
                        <a class="nav-link text-start text-light btn btn-outline-dark p-1 py-1"
                            href="/beranda/{{ $role }}">
                            Beranda {{ ucfirst(strtolower($role)) }}
                        </a>
                    </li>

                    @if (in_array($role, ['admin', 'humas']))
                        @if ($role === 'admin')
                            <li>
                                <a class="nav-link text-start text-light btn btn-outline-dark p-1"
                                    href="/kelola/data-user">
                                    Data User
                                </a>
                            </li>
                            <li>
                                <a class="nav-link text-start text-light btn btn-outline-dark p-1"
                                    href="/kelola/data-wilayah">
                                    Data Wilayah
                                </a>
                            </li>
                            <li>
                                <a class="nav-link text-start text-light btn btn-outline-dark p-1"
                                    href="/kelola/data-kub">
                                    Data KUB
                                </a>
                            </li>
                            <li>
                                <a class="nav-link text-start text-light btn btn-outline-dark p-1"
                                    href="/kelola/data-sakramen">
                                    Data Sakramen
                                </a>
                            </li>
                            <li>
                                <a class="nav-link text-start text-light btn btn-outline-dark p-1"
                                    href="/kelola/data-umat">
                                    Data Umat
                                </a>
                            </li>
                            <li>
                                <a class="nav-link text-start text-light btn btn-outline-dark p-1"
                                    href="/kelola/data-kegiatan-wilayah">
                                    Data Kegiatan Wilayah
                                </a>
                            </li>
                            <li>
                                <a class="nav-link text-start text-light btn btn-outline-dark p-1"
                                    href="/kelola/data-kegiatan-kub">
                                    Data Kegiatan KUB
                                </a>
                            </li>
                            <li>
                                <a class="nav-link text-start text-light btn btn-outline-dark p-1"
                                    href="/kelola/data-penerimaan-sakramen">
                                    Data Penerimaan Sakramen
                                </a>
                            </li>
                        @endif
                        <li>
                            <a class="nav-link text-start text-light btn btn-outline-dark p-1"
                                href="/kelola/data-pengumuman">
                                Data Pengumuman
                            </a>
                        </li>
                        <li>
                            <a class="nav-link text-start text-light btn btn-outline-dark p-1"
                                href="/kelola/data-berita">
                                Data Berita
                            </a>
                        </li>
                    @endif

                    @if (in_array($role, ['admin', 'ketua']))
                        <li>
                            <a class="nav-link text-start text-light btn btn-outline-dark p-1"
                                href="/laporan/kegiatan-wilayah">
                                Laporan Kegiatan Wilayah
                            </a>
                        </li>
                        <li>
                            <a class="nav-link text-start text-light btn btn-outline-dark p-1"
                                href="/laporan/kegiatan-kub">
                                Laporan Kegiatan KUB
                            </a>
                        </li>
                        <li>
                            <a class="nav-link text-start text-light btn btn-outline-dark p-1"
                                href="/laporan/penerimaan-sakramen">
                                Laporan Penerimaan Sakramen
                            </a>
                        </li>
                    @endif

                    <li class="nav-item">
                        <a class="btn btn-outline-danger text-light nav-link text-start text-dark p-1"
                            onclick="return confirm('Yakin ingin keluar?')" href="/logout">
                            <i class="bi bi-box-arrow-right text-light"></i> LOGOUT
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleButton = document.getElementById("sidebarToggle");
        const sidebarCollapse = document.getElementById("sidebar-show");

        toggleButton.addEventListener("click", function() {
            sidebarCollapse.classList.toggle("show");
        });
    });

    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>
