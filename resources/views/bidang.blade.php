@extends('layouts.main')

@section('container')
<div style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <h2 class="text-center text-white fw-semibold py-4 bg-succes">{{ $bidang->name }}</h2>
    <div class="container">
        <div class="row text-center">
            <div class="col-6 p-0" id="col-deskripsi">
                <button class="btn-tab w-100 border-0 border-bottom border-4 pb-1 border-0 bg-transparent fs-5 fw-semibold text-success border-success active-tab" onclick="showTab('deskripsi')">Deskripsi</button>
            </div>
            <div class="col-6 p-0" id="col-anggota">
                <button class="btn-tab w-100 border-0 border-bottom border-4 pb-1 border-0 bg-transparent fs-5 fw-semibold text-dark" onclick="showTab('anggota')">Anggota</button>
            </div>
        </div>
    </div>
    {{-- Deskripsi --}}
    <div id="tab-deskripsi" class="tab-content container mt-3">
        <div class="text-dark">
            {!! $bidang->description !!}
        </div>
    </div>

    {{-- Anggota --}}
    <div id="tab-anggota" class="tab-content container mt-3" style="display: none;">
        @foreach ($anggotaByRows as $row)
            <div class="row justify-content-center mb-4">
                @foreach ($row as $item)
                    <div class="col-4 col-sm-4 col-md-3 col-lg-3 text-center text-dark mb-1">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                            class="img-fluid mb-3"
                            style="aspect-ratio: 3 / 4; object-fit: cover; object-position: center top;">
                        <p class="fw-semibold text-center mb-1">{{ $item->name }}</p>
                        <span class="badge bg-succes mb-1">{{ $item->bidang->name }}</span>
                        <p class="mb-1 text-center text-dark">{{ $item->jabatan->name }}</p>
                        <p class="mb-0 text-center text-dark">{{ $item->jurusan->name }} {{ $item->angkatan->tahun }}</p>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
@endsection

<script>
    function showTab(tab) {
        const tabs = ['deskripsi', 'anggota'];

        tabs.forEach(function(t) {
            document.getElementById('tab-' + t).style.display = (t === tab) ? 'block' : 'none';
        });

        const buttons = document.querySelectorAll('.btn-tab');
        buttons.forEach(function(btn) {
            btn.classList.remove('text-success', 'active-tab', 'border-success');
            btn.classList.add('text-dark');
        });

        const activeButton = document.querySelector(`.btn-tab[onclick="showTab('${tab}')"]`);
        activeButton.classList.remove('text-dark');
        activeButton.classList.add('text-success', 'active-tab', 'border-success');
    }
</script>

