@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <!-- CONTENT -->
    <div class=" w-100 text-center">
        <span class="badge bg-success fs-5 py-2">
            Edit New Product
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
                    <form action="/admin/logout" method="post">
                        @csrf
                        @method('put')
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
    <!-- SIDEBAR END -->
</div>
<div class="card p-4 border-0 shadow-sm">
    <form method="post" action="/dashboard/products/{{$product->id}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $product->name) }}">
        </div>
        <div class="mb-3">
            <label for="bidang" class="form-label">Category</label>
            <select class="form-select" name="category" required>
                <option value="" disabled {{ old('category', $product->category) == '' ? 'selected' : '' }}>-- Pilih Category --</option>
                <option value="Food & Beverages" {{ old('category', $product->category) == 'Food & Beverages' ? 'selected' : '' }}>Food & Beverages</option>
                <option value="Exclusive Product" {{ old('category', $product->category) == 'Exclusive Product' ? 'selected' : '' }}>Exclusive Product</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" min="0" required value="{{ old('price', $product->price) }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Post Image</label>
            @if ($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @endif
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection