@extends('layouts.main')

@section('container')
<div style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <h2 class="text-center text-white fw-semibold py-4 bg-succes">{{ $bidang->name }}</h2>
    @foreach ($anggotaByRows as $row)
        <div class="container mb-4">
            <div class="row justify-content-center mb-1">
                @foreach ($row as $item)
                    <div class="col-6 col-sm-4 col-md-4 col-lg-3 text-center text-dark mb-1">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                            class="img-fluid mb-3"
                            style="aspect-ratio: 3 / 4; object-fit: cover; object-position: center top;">
                        <p class="fw-semibold  text-center mb-1">{{ $item->name }}</p>
                        <span class="badge bg-succes mb-1">{{ $item->bidang->name }}</span>
                        <p class="mb-1 text-center text-dark">{{ $item->jabatan->name }}</p>
                        <p class="mb-0 text-center text-dark">{{ $item->jurusan->name }} {{ $item->angkatan->tahun }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach

    {{-- Tampilkan deskripsi bidang di sini --}}
    <div class="container mt-2">
        <div class="text-dark">
            {!! $bidang->description !!}
        </div>
    </div>
</div>
@endsection
