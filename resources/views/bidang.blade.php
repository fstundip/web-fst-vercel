@extends('layouts.main')

@section('container')
<div>
    <h2 class="text-center text-white fw-semibold py-4 bg-succes">{{ $bidang->name }}</h2>


    @foreach ($anggotaByRows as $row)
        <div class="container mb-4">
            <div class="row justify-content-center">
                @foreach ($row->chunk(3) as $chunk)
                    <div class="row justify-content-center mb-1">
                        @foreach ($chunk as $item)
                            <div class="col-md-6 col-lg-4 text-center text-dark mb-1">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                    class="img-fluid mb-3"
                                    style="width: 225px; height:300px; object-fit: cover; object-position: center top;">
                                <h5 class="fw-semibold mb-1">{{ $item->name }}</h5>
                                <span class="badge bg-succes mb-1">{{ $item->bidang->name }}</span>
                                <p class="mb-1 text-center text-dark">{{ $item->jabatan->name }}</p>
                                <p class="mb-0 text-center text-dark">{{ $item->jurusan->name }} {{ $item->angkatan->tahun }}</p>
                            </div>
                        @endforeach
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
