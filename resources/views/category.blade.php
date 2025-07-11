@extends('layouts.main')

@section('container')
<div style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <h2 class="text-center text-white fw-semibold py-4 bg-succes">{{ $category->name }}</h2>
    <div class="container mt-3">
        @if ($post->isEmpty())
            <div class="alert text-center" role="alert" style="font-size: clamp(0.8rem, 1.5vw, 1rem); background-color: #d4edda; color: #155724;">
                Belum ada postingan dalam kategori <strong>{{ $category->name }}</strong>.
            </div>
        @else
        <style>
            /* Hilangkan efek biru pada input saat focus */
            .input-group .form-control:focus {
                box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
            }

            .btn-custom {
                background-color: #08ac6c; /* hijau muda */
                border: 1px solid #08ac6c;
                transition: background-color 0.3s ease;
            }

            .btn-custom:hover {
                background-color: #157347; /* hijau lebih gelap */
                color: #fff;
            }

            .btn-custom:focus {
                box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);;
            }
        </style>
        <form action="{{ url()->current() }}" method="GET" class="mb-3">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control border-success" placeholder="Cari {{ $category->name }}" value="{{ request('search') }}">
            <button class="btn btn-custom text-white fw-semibold" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="mx-1 my-1"
                viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/>
                </svg>
            </button>
        </div>
        <div class="row" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
            @foreach ($post as $postItem)
            <div class="col-6 col-sm-4 col-md-4 col-lg-4 mb-3">
                <a href="/informasi/{{ $postItem->category->slug }}/{{ $postItem->slug }}" class="card border-0 h-100 text-decoration-none rounded-4" style=" box-shadow: 0 4px 8px #157347;">
                    <img src="{{ asset('storage/' . $postItem->image) }}" alt="{{ $postItem->title }}" class="img-fluid rounded-4" style="aspect-ratio: 16/9; object-fit: cover; object-position: center;">
                <div class="card-body text-dark">
                    <span class="badge bg-succes mb-2">{{ $category->name }}</span>
                    <p class="card-title fw-semibold d-sm-none">
                        {{ \Illuminate\Support\Str::limit($postItem->title, 22) }}
                    </p>
                    <p class="card-title fw-semibold d-none d-sm-block">
                        {{ $postItem->title }}
                    </p>
                    <p class="text-muted mb-0">{{ $postItem->created_at->format('d F Y') }}</p>
                    </div>         
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection
