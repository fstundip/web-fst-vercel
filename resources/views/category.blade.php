@extends('layouts.main')

@section('container')
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a class="/informasi/">Informasi</a>
        </li>
        <li class="breadcrumb-item">
            <a class="d-flex text-dark">{{$category->name}}</a>
        </li>
    </ol>

    <div class="card border-0 mb-4 card-blog">
        <div class="card-header border-0">
            <h1 class="fw-bold">{{$category->name}}</h1>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($post as $post)
                <div class="col-md-6 col-xl-4 mb-4">
                    <a href="/informasi/{{ $post->category->slug }}/{{ $post->slug }}" class="card border-0 h-100 text-decoration-none">
                        <img src="{{ asset('storage/' . $post->image)}}" alt="" class="img-fluid"
                            style="height: 300px;">
                        <div class=" card-body">
                            <span class="badge badge-succes mb-2"> {{$post->category->name}}</span>
                            <h5 class="card-title fw-bold">{{ $post->title }}</h5>
                            <p class="card-text" style="color: #687281;">{{ $post->excerpt }}</p>
                        </div>
                        <div class="card-footer border-0">
                            <p class="text-muted">Diunggah : {{$post->created_at->format('l, F j, Y')}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection