@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <!-- CONTENT -->
    <h1 class="fw-bold">Edit Category</h1>
    <!-- ENDCONTENT -->

    <!-- SIDEBAR -->
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{auth()->user()->name}}!
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
    <form method="post" action="/dashboard/categories/{{$category->id}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $category->name) }}">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug', $category->slug) }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection