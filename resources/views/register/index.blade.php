@extends('layouts.main')

@section('container')
<div class="container mt-3 mb-3" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <main class="form-signin w-100 m-auto d-flex align-items-center justify-content-center">
        <form class="card border-0 p-4" action="/admin/register" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-semibold">Register Your FST Account</h1>
            <img src="{{ asset('img/fst-warna.png') }}" class="mb-3 mx-auto d-block" alt="" width="100px">
            <div class="form-floating">
                <input type="text" name="name" class="form-control mb-3 @error('name')is-invalid @enderror" id="name" is
                    placeholder="Zulfa Salsabila" autofocus required value="{{old('name')}}">
                <label for="name">Nama</label>
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control mb-3 @error('email')is-invalid @enderror" id="email" is
                    placeholder="name@example.com" required value="{{old('email')}}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control mb-3 @error('password')is-invalid @enderror"
                    id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            <a href="/admin/login" class="mt-3 d-block text-end">Already have an account?</a>
            <p class="mt-3 mb-3 text-body-secondary">&copy; 2025</p>
        </form>
    </main>
</div>
@endsection