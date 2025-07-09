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
        <form action="{{ url()->current() }}" method="GET" class="mb-3">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Cari Informasi" value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
        <div class="row" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
            @foreach ($post as $postItem)
            <div class="col-6 col-sm-4 col-md-4 col-lg-4 mb-4">
                <a href="/informasi/{{ $postItem->category->slug }}/{{ $postItem->slug }}" class="card border-0 h-100 text-decoration-none rounded-4">
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
