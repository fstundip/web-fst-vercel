@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <!-- CONTENT -->
    <h1 class="fw-bold">Create New Post</h1>
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
    <form method="post" action="/dashboard/posts" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" readonly>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label"></label>
            <select class="form-select" name="category_id">
                <option value="" selected disabled>-- Pilih Category --</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            <input class="form-control" type="file" id="image" name="image" required>
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" id="summernote" name="body" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

<canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function () {
            fetch(`/dashboard/posts/checkSlug?title=` + title.value)
                .then(response => response.json())
                .then(data => {
                    console.log(data); // Catat data respons
                    slug.value = data.slug;
                })
                .catch(error => console.error('Error:', error)); // Catat kesalahan
        });
    });
</script>
@endsection