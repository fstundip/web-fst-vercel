@extends('layouts.main')

@section('container')
<div>
    <h2 class="text-center text-white fw-semibold py-4 bg-succes">{{ $post->category->name }}</h2>
    <div class="container mt-3 text-dark">
        <h4 class="card-title mb-3 fw-semibold text-center">{{$post->title}}</h4>
        <div id="img-news" style="display: block;">
            <img src="{{ asset('storage/' . $post->image)}}" alt="" class="img-fluid rounded-5 mb-1 mx-auto d-block"
            style="height: 500px;  object-fit: cover; object-position: center;">
        </div>
        <p class="card-text text-center"><small class="text-muted">{{$post->created_at->format('l, j F Y')}}</small></p>
        <div>
            {!! $post->body !!}
        </div>
    </div>
</div>
@endsection