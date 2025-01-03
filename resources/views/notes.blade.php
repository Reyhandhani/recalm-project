<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle me-1" href="#"
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
    <div>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-12 bg-white sidebar p-4">
                    <form action="{{ route('note.store') }}" method="POST">
                        @csrf
                        <div class="mb-3 text-center">
                            <label for="note" class="form-label" style="font-size: 30px"><b>Ceritain Hari
                                    Kamu</b></label>
                            <textarea class="form-control" id="note-field" name="note-field" rows="10"
                                placeholder="Silahkan apa yang kamu rasakan hari ini" style="font-size: 20px"></textarea>
                            <!--MOOD-->
                            <br>
                            <label for="mood" style="font-size: 20px"><b> Mood</b></label>
                            <select name="mood" id="mood" class="form-control"
                                style="font-size: 20px; height: 60px;">
                                <option value="Sedih">Sedih</option>
                                <option value="Senang">Senang</option>
                                <option value="Marah">Marah</option>
                            </select>
                            <div id="emailHelp" class="form-text" style="font-size:15px">Tenang.. Cerita kamu bakal aman
                                kok!</div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" style="font-size:25px;">Simpan
                            Catatan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Konten end -->

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
                <!-- Social Media Icons -->
                <a href="#" class="text-white me-3"><i class="bi bi-facebook" style="font-size: 1.5rem;"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-twitter" style="font-size: 1.5rem;"></i></a>
                <a href="#" class="text-white"><i class="bi bi-instagram" style="font-size: 1.5rem;"></i></a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
