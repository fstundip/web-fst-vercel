@extends('layouts.main')

@section('container')
<div style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
    <h2 class="text-center text-white fw-semibold py-4 bg-succes">{{ $page->title }}</h2>
    <div class="container mt-3 text-dark">
        <h4 class="card-title mb-2 fw-semibold">{{$page->title}}</h4>
        <div>
            {!! $page->body !!}
        </div>
    </div>
</div>
</div>
@endsection