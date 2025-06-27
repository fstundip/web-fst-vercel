<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('img/fst-warna.png') }}" type="image/png">
    <!-- font google -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- <div class="preload">
        <video src="img/intro-fst.MOV" autoplay></video>
    </div> -->
    <!-- NAVBAR  -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/fst-warna.png') }}" alt="" width="50px">
            </a>
            <div class="logo-text front mt-2">
                <h6 class="my-0" style="margin-bottom: 0 !important; color:#000; font-weight:800">FORUM STUDI TEKNIK
                </h6>
                <h6>Universitas Diponegoro</h6>
            </div>
            <button class="navbar-toggler m-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Ganti dengan SVG icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#808080" class="bi bi-filter-right"
                    viewBox="0 0 16 16">
                    <path
                        d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5m0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5m0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5" />
                </svg>
                <!-- /Ganti dengan SVG icon -->
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                    </li>
                    <li class="nav-item dropdown dropdown-xl no-caret show">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil<svg class="svg-inline--fa fa-chevron-right fa-w-10 dropdown-arrow" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="chevron-right" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                </path>
                            </svg>
                        </a>
                        <div class="dropdown-menu overflow-hidden nav-drop">
                            <div class="row no-gutters">
                                <div class="col-lg-12 p-lg-5">
                                    <div class="row">
                                        <div class="col-lg-6 nav-col">
                                            <h6 class="dropdown-header text-success">TENTANG FST UNDIP
                                            </h6>
                                            <a href="/pages/visi-misi" class="dropdown-item fw-normal">Visi - Misi</a>
                                            <a href="/pages/nilai-nilai-inti" class="dropdown-item fw-normal">Nilai -
                                                Nilai
                                                Inti</a>
                                            <a href="/pages/logo-kabinet" class="dropdown-item fw-normal">Logo
                                                Kabinet</a>
                                            <a href="/pages/bidang-kabinet" class="dropdown-item fw-normal">Bidang
                                                Kabinet</a>
                                        </div>
                                        <div class="col-lg-6 nav-col">
                                            <h6 class="dropdown-header text-success">BIDANG KABINET FST UNDIP
                                            </h6>
                                            <a href="/bidang-kabinet/pengurus-harian" class="dropdown-item fw-normal">Pengurus Harian</a>
                                            <a href="/bidang-kabinet/edukasi" class="dropdown-item fw-normal">Edukasi</a>
                                            <a href="/bidang-kabinet/riset" class="dropdown-item fw-normal">Riset</a>
                                            <a href="/bidang-kabinet/media-kreatif" class="dropdown-item fw-normal">Media
                                                Kreatif</a>
                                            <a href="/bidang-kabinet/human-resource-development" class="dropdown-item fw-normal">Human Resource Development</a>
                                            <a href="/bidang-kabinet/public-relation" class="dropdown-item fw-normal">Public
                                                Relation</a>
                                            <a href="/bidang-kabinet/technopreneurship" class="dropdown-item fw-normal">Technopreneurship</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ str_starts_with(url()->current(), url('/blog/')) ? 'active' : '' }}"
                            href="/blog/">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('prestasi') ? 'active' : '' }}" href="/prestasi">Prestasi</a>
                    </li>
                </ul>

                @auth
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{auth()->user()->name}}!
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <button class="dropdown-item ">
                                    <a href="/dashboard">My Dashboard</a>
                                </button>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item ">
                                        <a href="/">Logout</a>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                @endauth
            </div>
        </div>
    </nav>

    <!-- NAVBAR END -->

    <section id="main" class="main pt-0">
        @yield('container')
    </section>

    @extends('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script>
        const dropdownToggle = document.querySelector('.dropdown-toggle');
        const dropdownArrow = document.querySelector('.dropdown-arrow');

        // Toggle dropdown and rotate arrow
        dropdownToggle.addEventListener('click', function () {
            dropdownArrow.classList.toggle('rotate');
        });

        // Close dropdown and reset arrow when clicking outside
        document.body.addEventListener('click', function (event) {
            if (!event.target.closest('.dropdown')) {
                dropdownArrow.classList.remove('rotate');
            }
        });
    </script>



    <!-- <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Tampilkan preloader saat halaman dimuat
            var preloader = document.querySelector(".preload");

            // Tunda penghilangan preloader dan munculnya konten
            setTimeout(function () {
                // Sembunyikan preloader
                preloader.style.opacity = "0";
                preloader.style.pointerEvents = "none";

                // Tampilkan konten
                var content = document.querySelector(".content");
                content.style.opacity = "1";
            }, 3000); // Sesuaikan waktu penundaan sesuai kebutuhan (dalam milidetik)
        });
    </script> -->
</body>

</html>
</body>

</html>