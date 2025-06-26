@extends('layouts.main')

@section('container')
<div class="container">
    <main class="form-signin w-100 m-auto d-flex align-items-center justify-content-center">
        <form class="card border-0 p-4" action="/admin/register" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please register</h1>
            <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" is
                    placeholder="Akhila Zahra" autofocus required value="{{old('name')}}">
                <label for="name">Nama</label>
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" is
                    placeholder="name@example.com" required value="{{old('email')}}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password')is-invalid @enderror"
                    id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
        </form>
    </main>
</div>
@endsection