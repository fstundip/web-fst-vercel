@extends('layouts.main')
@section('container')
<section class="fstore mb-0" id="fstore" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <img src="img/fst-warna.png" alt="" width="150px" class="mb-4">
        <h1>F-STORE</h1>
    </div>
</section>

<section class="mt-0" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <div class="container">
        <div class="about-content">
            <h3 class="text-black fw-bold"><b class="text-success"> About</b> F-Store </h3>
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
            <h3 class="text-black fw-bold"><b class="text-success"> Product</b> F-Store </h3>
            <hr class="border border-success border-3" width="120px">
        </div>
    </div>
    <div class="container mt-3">
        @if ($product->isEmpty())
            <div class="alert text-center" role="alert" style="background-color: #d4edda; color: #155724;">
                Belum ada produk.
            </div>
        @else
            <div class="row" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
            @foreach ($product as $item)
            <div class="col-6 col-sm-4 col-md-3 col-lg-3 mb-4">
                <div class="card border-0 h-100 text-decoration-none rounded-4" style="box-shadow: 0 4px 8px #157347;">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="img-fluid rounded-4" style="aspect-ratio: 1/1; object-fit: cover; object-position: center;">
                <div class="card-body text-dark">
                    <span class="badge bg-succes mb-2">{{ $item->category }}</span>
                    <p class="card-title fw-semibold mb-1">
                        {{ $item->name }}
                    </p>
                    <p class="card-title">
                        Rp {{ number_format($item->price, 0, ',', '.') }},00
                    </p>
                    </div>         
                </div>
            </div>
            @endforeach
        </div>
        @endif
        <style>
            .btn-custom {
                background-color: #08ac6c; /* hijau muda */
                border: 1px solid #08ac6c;
                transition: background-color 0.3s ease;
                padding: 0.5rem 1.5rem; /* menambah ukuran tombol */
                font-size: 1.25rem; /* memperbesar ukuran teks */
            }

            .btn-custom:hover {
                background-color: #157347; /* hijau lebih gelap */
                color: #fff;
            }

            .btn-custom:focus {
                box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);;
            }
        </style>
        <div class="d-flex justify-content-center mb-4">
            <a href="https://www.instagram.com/f.storeundip" class="btn btn-custom text-white fw-semibold rounded-4">
                LET'S BUY!
            </a>
        </div>
    </div>
</section>
@endsection