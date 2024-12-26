<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECALM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        @vite('resources/sass/app.scss')
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ Vite::asset('resources/images/recalm.png') }}" alt="logo-recalm"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {{-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/List/">Bejir</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Other
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/konsul/">Gweh</a></li>
                            <li><a class="dropdown-item" href="/servis/">Mau</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Tidur</a></li>
                        </ul>
                    </li>
                </ul> --}}
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle bi-person-circle me-1" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="{{ route('profile') }}" class="dropdown-item"><i class="bi-person-circle me-1"></i> My
                                    Profile</a>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i
                                        class="bi bi-lock-fill"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Konten -->
    <!-- Welcome Section -->
    <header class="container-fluid col-md-12 d-flex justify-content-center align-items-center bg-primary text-white  text-center  mb-4" style="height:50vh">

        {{-- <div class="container d-flex justify-content-center align-items-center" style="height: 50vh;"> --}}

                <!-- Bagian Kiri -->
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="mb-3 text-center" style="font-size: 1.5rem">
                        <h1>Gimana Hari Mu?</h1>
                        <p>Ingat, kamu tidak sendirian dalam menghadapi hari-harimu.</p>
                    </div>
                </div>

                <!-- Bagian Kanan -->
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="mb-4 text-center">
                        <img src="{{ Vite::asset('resources/images/utama.png') }}" alt="utama" style="height:50vh">
                    </div>
                </div>

        {{-- </div> --}}

    </header>

    <!-- Welcome Section end -->
    <div class="container my-4">

        <!-- Mood Buttons -->
        <section>
            <h2 class="mb-3">Mood Hari Ini</h2>
            <div class="row g-3">
                <!-- Sadly Sad Button -->
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3">Sadly Sad</button>
                </div>
                <!-- Other Buttons -->
                <div class="col-12 col-md-6">
                    <button class="btn btn-primary w-100 py-3">Daily Notes</button>
                </div>
                <div class="col-12 col-md-6">
                    <button class="btn btn-primary w-100 py-3">Perlu Teman Cerita?</button>
                </div>
            </div>
        </section>
        <!-- Mood Buttons end -->

        <!-- Artikel Section -->
        <section class="mt-5">
            <h2 class="mb-3">Artikel</h2>
            <div class="row g-3">
                <!-- Card 1 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100">
                        <img src="dummy.jpg" class="card-img-top" alt="Artikel 1">
                        <div class="card-body">
                            <h6 class="text-muted">Kategori</h6>
                            <h5 class="card-title">Judul Artikel 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor...</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-primary">
                            <small class="text-white">Tanggal</small>
                            <a href="#" class="btn btn-outline-primary btn-sm bg-light text-primary">Lebih lengkap</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100">
                        <img src="dummy.jpg" class="card-img-top" alt="Artikel 2">
                        <div class="card-body">
                            <h6 class="text-muted">Kategori</h6>
                            <h5 class="card-title">Judul Artikel 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor...</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-primary">
                            <small class="text-white">Tanggal</small>
                            <a href="#" class="btn btn-outline-primary btn-sm bg-light text-primary">Lebih lengkap</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100">
                        <img src="dummy.jpg" class="card-img-top" alt="Artikel 3">
                        <div class="card-body">
                            <h6 class="text-muted">Kategori</h6>
                            <h5 class="card-title">Judul Artikel 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor...</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-primary">
                            <small class="text-white">Tanggal</small>
                            <a href="#" class="btn btn-outline-primary btn-sm bg-light text-primary">Lebih lengkap</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Artikel Section end -->
    </div>
    <!-- Footer -->
    <footer id="gray" class="bg-primary text-white text-center py-4">
        <div class="container" style="height: 7vh;">
            <p class="mb-1">&copy; 2024 RECALM. All Rights Reserved.</p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Terms of Service</a></li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
            </ul>
            <div class="mt-3">
                <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </footer>

    <!-- Konten end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
