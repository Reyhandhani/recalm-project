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
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ Vite::asset('resources/images/recalm.png') }}" alt="logo-recalm" style="max-width: 110px; height: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown fw-bold">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle bi-person-circle me-1" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img src="{{ Auth::user()->photo ? asset('storage/' . Auth::user()->photo) : asset('images/default_profile.png') }}"
                                alt="Profile photo"
                                class="rounded-circle"
                                style="width: 30px; height: 30px; object-fit: cover; margin-right: 5px;">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="{{ route('profile') }}" class="dropdown-item">
                                    Profile
                                    <i class="bi-person-circle me-1"></i>
                                </a>
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
<header class="container-fluid bg-primary text-white text-center mb-4">
    <div class="row d-flex align-items-center" style="min-height: 50vh;">
        <!-- Bagian Kiri -->
        <div class="col-12 col-md-6 text-center mb-4 mb-md-0">
            <h1 class="mb-3">Gimana Hari Mu?</h1>
            <h3>Ingat, kamu tidak sendirian dalam menghadapi hari-harimu.</h3>
        </div>

        <!-- Bagian Kanan -->
        <div class="col-12 col-md-6">
            <img src="{{ Vite::asset('resources/images/utama.png') }}" alt="utama" class="img-fluid" style="max-height: 50vh;">
        </div>
    </div>
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
                   <a href="{{ route('notes') }}"> <button class="btn btn-primary w-100 py-3">Daily Notes</button></a>
                </div>
                <div class="col-12 col-md-6">
                    <a href="{{ route('chat') }}"> <button class="btn btn-primary w-100 py-3">Perlu Teman Cerita?</button></a>
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
                        <img src="{{ Vite::asset('resources/images/card1.png') }}" class="card-img-top fixed-image" alt="Artikel 1">

                        <div class="card-body">
                            <h6 class="text-muted">English</h6>
                            <h5 class="card-title"><b>Understanding your mental health and looking after others</b></h5>
                            <p class="card-text">Data from AIHW Australian Institute of Health...</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-primary">
                            <small class="text-white">October 13, 2022</small>
                            <a href="https://www.sixdegreesexecutive.com.au/your-career/understanding-your-mental-health" class="btn btn-outline-primary btn-sm bg-light text-primary">Lebih lengkap</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100">
                        <img src="{{ Vite::asset('resources/images/card2.png') }}" class="card-img-top fixed-image" alt="Artikel 2">
                        <div class="card-body">
                            <h6 class="text-muted">Indonesia</h6>
                            <h5 class="card-title"><b>Mengenali Definisi Tepat dari Kesehatan Mental dan Dampaknya</b></h5>
                            <p class="card-text">Jakarta Setiap tahun, dunia memperingati Hari Kesehatan...</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-primary">
                            <small class="text-white">Mei 26, 2023</small>
                            <a href="https://www.halodoc.com/artikel/mengenali-definisi-tepat-dari-kesehatan-mental-dan-dampaknya" class="btn btn-outline-primary btn-sm bg-light text-primary">Lebih lengkap</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100">
                        <img src="{{ Vite::asset('resources/images/card3.png') }}" class="card-img-top fixed-image" alt="Artikel 3">
                        <div class="card-body">
                            <h6 class="text-muted">English</h6>
                            <h5 class="card-title"><b>Building an international mental health support group for people in science</b></h5>
                            <p class="card-text">Jaishree Subrahmanium is a botanist who did her PhD...</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-primary">
                            <small class="text-white">March 04, 2021</small>
                            <a href="https://indiabioscience.org/columns/conversations/building-an-international-mental-health-support-group-for-people-in-science" class="btn btn-outline-primary btn-sm bg-light text-primary">Lebih lengkap</a>
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
