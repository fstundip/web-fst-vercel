@extends('layouts.main')

@section('container')
<div>
    <h2 class="text-center text-white fw-semibold py-4 bg-succes">{{ $page->title }}</h2>

    {{-- Konten halaman --}}
    <div class="container mt-3 text-dark">
        <h4 class="card-title mb-2 fw-semibold">{{$page->title}}</h4>
        <div>
            {!! $page->body !!}
        </div>
    </div>
</div>
</div>
@endsection