@extends('layouts.main')

@section('container')
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active text-black">{{ $bidang }}</li>
    </ol>

    <div class="card border-0 mb-4 card-blog">
        <div class="card-header border-0">
            <h1 class="fw-bold">{{ $bidang }}</h1>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($anggota as $item)
                <div class="col-md-6 col-xl-4 mb-4">
                    <a class="card border-0 h-100 text-decoration-none">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="" class="img-fluid" style="width:300px">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->jabatan->name }}</p>
                            <span class="badge bg-success mb-2">{{ $item->bidang->name }}</span>
                            <p class="card-text">{{ $item->jurusan->name }} {{ $item->angkatan->tahun }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
