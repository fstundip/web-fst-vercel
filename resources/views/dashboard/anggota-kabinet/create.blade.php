@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <!-- CONTENT -->
    <div class=" w-100 text-center">
        <span class="badge bg-success fs-5 py-2">
            Create New Anggota
        </span>
    </div>
    <!-- ENDCONTENT -->

    <!-- SIDEBAR -->
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{auth()->user()->name}}!
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/">Back to Web</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
    <!-- SIDEBAR END -->
</div>
<div class="card p-4 border-0 shadow-sm">
    <form method="post" action="/dashboard/anggota-kabinet" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="bidang" class="form-label">Bidang</label>
            <select class="form-select" name="bidang_id" required>
                <option value="" selected disabled>-- Pilih Bidang --</option>
                @foreach($bidang as $b)
                <option value="{{$b->id}}">{{$b->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <select class="form-select" name="jabatan_id" required>
                <option value="" selected disabled>-- Pilih Jabatan --</option>
                @foreach($jabatan as $jbt)
                <option value="{{$jbt->id}}">{{$jbt->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select" name="jurusan_id" required>
                <option value="" selected disabled>-- Pilih Jurusan --</option>
                @foreach($jurusan as $jrs)
                <option value="{{$jrs->id}}">{{$jrs->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select class="form-select" name="angkatan_id" required>
                <option value="" selected disabled>-- Pilih Angkatan --</option>
                @foreach($angkatan as $akt)
                <option value="{{$akt->id}}">{{$akt->tahun}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <input class="form-control" type="file" id="image" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection