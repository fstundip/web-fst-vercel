@extends('layouts.main')
@section('container')
<section class="home mb-lg-0" id="home" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <img src="img/fst-warna.png" alt="" width="150px" class="mb-4">
        <h1>FORUM STUDI TEKNIK</h1>
    </div>
</section>

<section class="mt-lg-0" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <div class="about-content">
            <h3 class="text-black fw-bold"><b class="text-success"> About</b> Forum Studi Teknik </h3>
            <hr class="border border-success border-3" width="95px">
            <p>Forum Studi Teknik (FST) merupakan unit pelaksana kegiatan Fakultas Teknik Universitas
                Diponegoro yang
                bergerak di bidang riset, kewirausahaan, dan sosial.</p>
        </div>
    </div>
</section>

<section class="" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <div class="about-content">
            <h3 class="text-black fw-bold"><b class="text-success"> Galeri</b> Forum Studi Teknik </h3>
            <hr class="border border-success border-3" width="90px">
            <div class="overflow-auto" style="white-space: nowrap;">
                @forelse($post as $item)
                    <div class="d-inline-block me-2" style="width: clamp(150px, 40vw, 300px);">
                        <img src="{{ asset('storage/' . $item->image) }}" 
                            alt="{{ $item->title }}" 
                            class="img-fluid rounded-4 shadow mt-3"
                            style="aspect-ratio: 16/9; object-fit: cover; object-position: center;">
                    </div>
                @empty
                    <div class="alert text-center" role="alert" 
                        style="background-color: #d4edda; color: #155724;">
                        Tunggu Kegiatan Kami Selanjutnya...
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>

<section class="" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <div class="about-content">
            <h3 class="text-black fw-bold"><b class="text-success"> Report</b> Forum Studi Teknik </h3>
            <hr class="border border-success border-3" width="90px">
            @if ($report->isEmpty())
                <div class="alert text-center" role="alert" style="background-color: #d4edda; color: #155724;">
                    Belum ada report.
                </div>
            @else
                <div class="row" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
                @foreach ($report as $item)
                <div class="col-4">
                    <style>
                        .image-hover-wrapper {
                            position: relative;
                            overflow: hidden;
                        }

                        .image-hover-wrapper .overlay {
                            background-color: rgba(0, 0, 0, 0.6); /* gelap saat hover */
                            opacity: 0;
                            transition: opacity 0.3s ease-in-out;
                        }

                        .image-hover-wrapper:hover .overlay {
                            opacity: 1;
                        }
                    </style>
                    <a href="{{ $item->link }}" class="image-hover-wrapper position-relative d-block text-decoration-none">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                            class="img-fluid" style="aspect-ratio: 4/5; object-fit: cover; object-position: center;">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                            <div class="text-white text-center fw-bold fs-3 px-2">{{ $item->title }}</div>
                        </div>
                    </a>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

<section class="" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <div class="comprof-embed">
            <h3 class="text-black fw-bold"><b class="text-success"><svg xmlns="http://www.w3.org/2000/svg" width="30" 
                        height="30" fill="currentColor" class="bi bi-youtube" viewBox="0 0 576 512">
                        <path 
                        d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/>
                    </svg> Company Profile</b> Forum Studi Teknik </h3>
            <hr class="border border-success border-3" width="285px">
            <div style="aspect-ratio: 16/9; width: 100%; border-radius: 12px; overflow: hidden;">
                <iframe style="width: 100%; height: 100%; border: 0;"
                    src="https://www.youtube.com/embed/8RQqY6LMc_o?si=wjWw5jlumcJH3orZ" width="100%"
                    height="352" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="mt-lg-0" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <div class="orbit-embed">
            <h3 class="text-black fw-bold"><b class="text-success"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                        height="30" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.669 11.538a.5.5 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686m.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858m.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288" />
                    </svg> ORBIT</b> (Obrolan Forum Studi Teknik) </h3>
            <hr class="border border-success border-3" width="125px">
            <iframe style="border-radius:12px;"
                src="https://open.spotify.com/embed/show/2lcv88nEAHZUUoYQTFGpF9?utm_source=generator" width="100%"
                height="352" frameBorder="0" allowfullscreen=""
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                loading="lazy"></iframe>
        </div>
    </div>
</section>
@endsection