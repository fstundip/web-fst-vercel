<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary ">
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
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active text-black {{Request::is('dashboard') ? 'active' : ''}}"
                        aria-current="page" href="/dashboard">
                        <svg class="bi">
                            <use xlink:href="#house-fill" />
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-black {{Request::is('dashboard/categories') ? 'active' : ''}}"
                        href="/dashboard/categories">
                        <svg class="bi">
                            <use xlink:href="#file-earmark" />
                        </svg>
                        Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-black {{Request::is('dashboard/posts') ? 'active' : ''}}"
                        href="/dashboard/posts">
                        <svg class="bi">
                            <use xlink:href="#file-earmark" />
                        </svg>
                        Posts
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-black {{Request::is('dashboard/pages') ? 'active' : ''}}"
                        href="/dashboard/pages">
                        <svg class="bi">
                            <use xlink:href="#file-earmark" />
                        </svg>
                        Pages
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-black {{Request::is('dashboard/anggota-kabinet') ? 'active' : ''}}"
                        href="/dashboard/anggota-kabinet">
                        <svg class="bi">
                            <use xlink:href="#file-earmark" />
                        </svg>
                        Anggotas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-black {{Request::is('dashboard/bidang-kabinet') ? 'active' : ''}}"
                        href="/dashboard/bidang-kabinet">
                        <svg class="bi">
                            <use xlink:href="#file-earmark" />
                        </svg>
                        Bidangs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-black {{Request::is('dashboard/jabatan-kabinet') ? 'active' : ''}}"
                        href="/dashboard/jabatan-kabinet">
                        <svg class="bi">
                            <use xlink:href="#file-earmark" />
                        </svg>
                        Jabatans
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-black {{Request::is('dashboard/jurusan-kabinet') ? 'active' : ''}}"
                        href="/dashboard/jurusan-kabinet">
                        <svg class="bi">
                            <use xlink:href="#file-earmark" />
                        </svg>
                        Jurusans
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-black {{Request::is('dashboard/angkatan-kabinet') ? 'active' : ''}}"
                        href="/dashboard/angkatan-kabinet">
                        <svg class="bi">
                            <use xlink:href="#file-earmark" />
                        </svg>
                        Angkatans
                    </a>
                </li>
            </ul>
        </div>
    </div>