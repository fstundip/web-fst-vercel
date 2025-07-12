<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Forum Studi Teknik (FST)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="icon" href="/img/fst-warna.png" type="image/png">
    <!-- font google -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <style>
        .note-editable {
            font-family: 'Poppins', sans-serif !important;
        }
    </style>
</head>

<body>
    <!-- Tombol toggle sidebar (hanya muncul di layar kecil) -->
    <button class="btn d-md-none position-absolute top-0 start-0 m-3 z-3" 
        type="button" 
        data-bs-toggle="offcanvas" 
        data-bs-target="#offcanvas" 
        aria-controls="offcanvas">
        <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-filter-right"
            viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
            <path 
                d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/>
        </svg>
    </button>
    <div class="container-fluid" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
        <div class="row" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
            @include('dashboard.layouts.sidebar')
        </div>
        <main class="col-md-9 ms-sm-auto col-lg-9" style="font-size: clamp(0.8rem, 1.5vw, 1rem);">
            @yield('container')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    {{-- Summernote JS --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script></script>

    <script>
        $(document).ready(function () {
            $('#summernote').summernote({
                height: 200,
            });
        });
    </script>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('input', function () {
            fetch(`/dashboard/posts/checkSlug/${encodeURIComponent(title.value)}`)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
                .catch(error => console.error('Error:', error));
        });
    </script>
</body>

</html>