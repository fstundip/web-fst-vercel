@extends('layouts.main')

@section('container')
<div>
    <h2 class="text-center text-white fw-semibold py-4 bg-succes">{{ $category->name }}</h2>
    <div class="container mt-4">
        @if ($post->isEmpty())
            <div class="alert text-center" role="alert" style="background-color: #d4edda; color: #155724;">
                Belum ada postingan dalam kategori <strong>{{ $category->name }}</strong>.
            </div>
        @else
        <div class="row justify-content-center">
            @foreach ($post->chunk(3) as $chunk)
                <div class="row justify-content-center mb-4">
                    @foreach ($chunk as $postItem)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <a href="/informasi/{{ $postItem->category->slug }}/{{ $postItem->slug }}" class="card border-0 h-100 text-decoration-none rounded-5">
                                <img src="{{ asset('storage/' . $postItem->image) }}" alt="{{ $postItem->title }}" class="img-fluid rounded-5" style="height: 225px; object-fit: cover; object-position: center;">
                                <div class="card-body text-dark">
                                    <span class="badge bg-succes mb-2">{{ $category->name }}</span>
                                    <h5 class="card-title fw-bold text-dark">{{ $postItem->title }}</h5>
                                    <p class="text-muted mb-0">{{ $postItem->created_at->format('d F Y') }}</p>
                                </div>
                                    
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@endsection
