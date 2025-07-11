@extends('layouts.main')
@section('container')
<section class="home mb-0" id="home" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <img src="img/fst-warna.png" alt="" width="150px" class="mb-4">
        <h1>FORUM STUDI TEKNIK</h1>
    </div>
</section>

<section class="mt-0" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <div class="about-content">
            <h3 class="text-black fw-bold"><b class="text-success"> About</b> Forum Studi Teknik </h3>
            <hr class="border border-success border-3" width="95px">
            <p class="mb-0">Forum Studi Teknik (FST) merupakan unit pelaksana kegiatan Fakultas Teknik Universitas
                Diponegoro yang
                bergerak di bidang riset, kewirausahaan, dan sosial.</p>
        </div>
    </div>
</section>

<section class="mt-0" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <div class="about-content">
            <h3 class="text-black fw-bold"><b class="text-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-gallery"
                    viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path d="M220.6 121.2L271.1 96 448 96l0 96-114.8 0c-21.9-15.1-48.5-24-77.2-24s-55.2 8.9-77.2 24L64 192l0-64 128 0c9.9 0 19.7-2.3 28.6-6.8zM0 128L0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L271.1 32c-9.9 0-19.7 2.3-28.6 6.8L192 64l-32 0 0-16c0-8.8-7.2-16-16-16L80 32c-8.8 0-16 7.2-16 16l0 16C28.7 64 0 92.7 0 128zM168 304a88 88 0 1 1 176 0 88 88 0 1 1 -176 0z"/>
                </svg>
                Gallery</b> Forum Studi Teknik </h3>
            <hr class="border border-success border-3" width="145px">
            <div class="overflow-auto" style="white-space: nowrap;">
                @forelse($post as $item)
                    <div class="d-inline-block me-2" style="width: clamp(150px, 40vw, 300px);">
                        <img src="{{ asset('storage/' . $item->image) }}" 
                            alt="{{ $item->title }}" 
                            class="img-fluid rounded-4 mx-2 my-2 mt-3"
                            style="aspect-ratio: 16/9; object-fit: cover; object-position: center; box-shadow: 0 4px 8px #157347;">
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

<section class="mt-0" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <div class="about-content">
            <h3 class="text-black fw-bold"><b class="text-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                </svg>
                Report</b> Forum Studi Teknik </h3>
            <hr class="border border-success border-3" width="135px">
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
                            box-shadow: 0 4px 12px #157347;
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
                            <div class="text-white text-center fw-bold px-2">{{ $item->title }}</div>
                        </div>
                    </a>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

<section class="mt-0" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <div class="comprof-embed">
            <h3 class="text-black fw-bold"><b class="text-success"><svg xmlns="http://www.w3.org/2000/svg" width="30" 
                        height="30" fill="currentColor" class="bi bi-youtube" viewBox="0 0 576 512">
                        <path 
                        d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/>
                    </svg> Company Profile</b> Forum Studi Teknik </h3>
            <hr class="border border-success border-3" width="285px">
            <div style="aspect-ratio: 16/9; width: 100%; border-radius: 12px; overflow: hidden;  box-shadow: 0 4px 12px #157347;">
                <iframe style="width: 100%; height: 100%; border: 0;"
                    src="https://www.youtube.com/embed/8RQqY6LMc_o?si=wjWw5jlumcJH3orZ" width="100%"
                    height="352" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="mt-0 mb-3" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <div class="orbit-embed">
            <h3 class="text-black fw-bold"><b class="text-success"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                        height="30" fill="currentColor" class="bi bi-spotify" viewBox="0 0 16 16">
                        <path
                            d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.669 11.538a.5.5 0 0 1-.686.165c-1.879-1.147-4.243-1.407-7.028-.77a.499.499 0 0 1-.222-.973c3.048-.696 5.662-.397 7.77.892a.5.5 0 0 1 .166.686m.979-2.178a.624.624 0 0 1-.858.205c-2.15-1.321-5.428-1.704-7.972-.932a.625.625 0 0 1-.362-1.194c2.905-.881 6.517-.454 8.986 1.063a.624.624 0 0 1 .206.858m.084-2.268C10.154 5.56 5.9 5.419 3.438 6.166a.748.748 0 1 1-.434-1.432c2.825-.857 7.523-.692 10.492 1.07a.747.747 0 1 1-.764 1.288" />
                    </svg> ORBIT</b> (Obrolan Forum Studi Teknik) </h3>
            <hr class="border border-success border-3" width="125px">
            <iframe style="border-radius:12px; box-shadow: 0 4px 12px #157347;"
                src="https://open.spotify.com/embed/show/2lcv88nEAHZUUoYQTFGpF9?utm_source=generator" width="100%"
                height="352" frameBorder="0" allowfullscreen=""
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                loading="lazy"></iframe>
        </div>
    </div>
</section>
@endsection