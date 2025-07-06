@extends('layouts.main')

@section('container')
<div class="container mt-3 mb-3">
    <main class="form-signin w-100 m-auto d-flex align-items-center justify-content-center">
        <form class="card border-0 p-4" action="/admin/login" method="post">
            @csrf
            <h1 class="h3 mb-3 fw-semibold">Login To Your FST Account</h1>
            <img src="{{ asset('img/fst-warna.png') }}" class="mb-3 mx-auto d-block" alt="" width="100px">
            <div class="form-floating">
                <input type="email" name="email" class="form-control mb-3" id="email" is placeholder="name@example.com"
                    autofocus required>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                    required>
                <label for="password">Password</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            <a href="/admin/register" class="mt-3 d-block text-end">Don't have an account yet?</a>
            <p class="mt-3 mb-3 text-body-secondary">&copy; 2025</p>
        </form>
    </main>
</div>
@endsection