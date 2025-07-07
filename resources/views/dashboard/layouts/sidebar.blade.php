<div class="sidebar border border-right col-md-3 col-lg-3 p-0 bg-body-tertiary ">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <div class="nav-link d-flex align-items-center justify-content-center gap-2">
                        <img src="{{ asset('img/fst-warna.png') }}" alt="" width="50px">
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 justify-content-center" aria-current="page"
                        href="/dashboard">
                        <h6 class="fw-bold text-black text-center">
                            <p class="fw-normal m-0 mb-1 p-0 fs-6">Hello Welcome back,</p> {{auth()->user()->name}} 👋
                        </h6>
                    </a>
                </li>
                <li class="nav-item mx-5 {{ Request::is('dashboard') ? 'bg-light rounded' : '' }}">
                    <a class="nav-link d-flex align-items-center gap-2 {{Request::is('dashboard') ? 'text-success fw-normal' : 'text-black fw-normal' }}"
                        aria-current="page" href="/dashboard">
                        @if(Request::is('dashboard'))
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="green"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="black"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @endif
                        Dashboard
                    </a>
                </li>
                <h6 class="dropdown-header text-success fw-semibold my-2 ms-5">PROFIL</h6>
                <li class="nav-item mx-5 {{ Request::is('dashboard/pages') ? 'bg-light rounded' : '' }}">
                    <a class="nav-link d-flex align-items-center gap-2 {{Request::is('dashboard/pages') ? 'text-success fw-normal' : 'text-black fw-normal' }}"
                        href="/dashboard/pages">
                        @if(Request::is('dashboard/pages'))
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="green"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="black"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @endif
                        Pages
                    </a>
                </li>
                <h6 class="dropdown-header text-success fw-semibold my-2 ms-5">ANGGOTA & BIDANG KABINET</h6>
                <li class="nav-item mx-5 {{ Request::is('dashboard/anggota-kabinet') ? 'bg-light rounded' : '' }}">
                    <a class="nav-link d-flex align-items-center gap-2 {{Request::is('dashboard/anggota-kabinet') ? 'text-success fw-normal' : 'text-black fw-normal' }}"
                        href="/dashboard/anggota-kabinet">
                        @if(Request::is('dashboard/anggota-kabinet'))
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="green"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="black"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @endif
                        Anggotas
                    </a>
                </li>
                <li class="nav-item mx-5 {{ Request::is('dashboard/bidang-kabinet') ? 'bg-light rounded' : '' }}">
                    <a class="nav-link d-flex align-items-center gap-2 {{Request::is('dashboard/bidang-kabinet') ? 'text-success fw-normal' : 'text-black fw-normal' }}"
                        href="/dashboard/bidang-kabinet">
                        @if(Request::is('dashboard/bidang-kabinet'))
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="green"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="black"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @endif
                        Bidangs
                    </a>
                </li>
                <li class="nav-item mx-5 {{ Request::is('dashboard/jabatan-kabinet') ? 'bg-light rounded' : '' }}">
                    <a class="nav-link d-flex align-items-center gap-2 {{Request::is('dashboard/jabatan-kabinet') ? 'text-success fw-normal' : 'text-black fw-normal' }}"
                        href="/dashboard/jabatan-kabinet">
                        @if(Request::is('dashboard/jabatan-kabinet'))
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="green"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="black"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @endif
                        Jabatans
                    </a>
                </li>
                <li class="nav-item mx-5 {{ Request::is('dashboard/jurusan-kabinet') ? 'bg-light rounded' : '' }}">
                    <a class="nav-link d-flex align-items-center gap-2 {{Request::is('dashboard/jurusan-kabinet') ? 'text-success fw-normal' : 'text-black fw-normal' }}"
                        href="/dashboard/jurusan-kabinet">
                        @if(Request::is('dashboard/jurusan-kabinet'))
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="green"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="black"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @endif
                        Jurusans
                    </a>
                </li>
                <li class="nav-item mx-5 {{ Request::is('dashboard/angkatan-kabinet') ? 'bg-light rounded' : '' }}">
                    <a class="nav-link d-flex align-items-center gap-2 {{Request::is('dashboard/angkatan-kabinet') ? 'text-success fw-normal' : 'text-black fw-normal' }}"
                        href="/dashboard/angkatan-kabinet">
                        @if(Request::is('dashboard/angkatan-kabinet'))
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="green"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="black"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @endif
                        Angkatans
                    </a>
                </li>
                <h6 class="dropdown-header text-success fw-semibold my-2 ms-5">INFORMASI</h6>
                <li class="nav-item mx-5 {{ Request::is('dashboard/posts') ? 'bg-light rounded' : '' }}">
                    <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/posts') ? 'text-success fw-normal' : 'text-black fw-normal' }}"
                        href="/dashboard/posts">
                        @if(Request::is('dashboard/posts'))
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="green"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="black"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @endif
                        Posts
                    </a>
                </li>
                <li class="nav-item mx-5 {{ Request::is('dashboard/categories') ? 'bg-light rounded' : '' }}">
                    <a class="nav-link d-flex align-items-center gap-2 {{Request::is('dashboard/categories') ? 'text-success fw-normal' : 'text-black fw-normal' }}"
                        href="/dashboard/categories">
                        @if(Request::is('dashboard/categories'))
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="green"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="ms-3"
                        viewBox="0 0 448 512" fill="black"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                        <path d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"/>
                        </svg>
                        @endif
                        Categories
                    </a>
                </li>
            </ul>
        </div>
    </div>