<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    @vite('resources/sass/app.scss')
</head>
<body class="bg-light">
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
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="{{ route('home') }}" class="dropdown-item">
                                    Home
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

    <!--Sidebar kiri-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-white d-none d-md-block sidebar">
                <h4 class="fw-bold">Pengaturan</h4>
                <nav class="nav flex-column">
                    <a class="nav-link" href="#"><i class="fas fa-user"></i>Profile</a>
                    <a class="nav-link" href="#"><i class="fas fa-chart-bar"></i>Statistik Mood</a>
                    <a class="nav-link" href="#"><i class="fas fa-link"></i>button opsional</a>
                    <a class="nav-link" href="#"><i class="fas fa-user-cog"></i>button opsional</a>
                    <a class="nav-link" href="#"><i class="fas fa-graduation-cap"></i>button opsional</a>
                    <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i>Logout Account</a>
                </nav>
            </div>

            <!--Bagian sidebar kalo tampilan mobile-->
            <div class="col-12 d-md-none">
                <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarNav" aria-expanded="false" aria-controls="sidebarNav">
                    <i class="fas fa-bars"></i> Menu
                </button>
                <div class="collapse" id="sidebarNav">
                    <nav class="nav flex-column sidebar">
                        <a class="nav-link" href="#"><i class="fas fa-user"></i> Profile</a>
                        <a class="nav-link" href="#"><i class="fas fa-id-card"></i>Statistik Mood</a>
                        <a class="nav-link" href="#"><i class="fas fa-link"></i>button opsional</a>
                        <a class="nav-link" href="#"><i class="fas fa-user-cog"></i>button opsional</a>
                        <a class="nav-link" href="#"><i class="fas fa-graduation-cap"></i>button opsional</a>
                        <a class="nav-link" href="#"><i class="fas fa-envelope"></i>Logout Account</a>
                    </nav>
                </div>
            </div>

            <!--Content start-->
            <div class="col-md-9 p-4">
                <h4>Profil Pengguna</h4>
                <hr>
                <div class="row mb-3">
                    <div class="col-md-2">
                        <img src="https://storage.googleapis.com/a1aa/image/V2YMTDxJg5bMIRNEIvhBvYeRem9Ijk8lS3gAiqg3mlP77afnA.jpg" alt="Profile photo" class="rounded-circle img-fluid" height="200" width="200">
                    </div>
                    <div class="col-md-10">
                        <button class="btn btn-upload" style="background-color: #343a40; color: #fff;">Pilih Foto</button>
                        <p class="text-muted mt-2"><span class="text-danger">*</span> Gambar Profile Anda sebaiknya memiliki rasio 1:1 dan berukuran tidak lebih dari 2MB.</p>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fullName" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                    <input type="text" id="fullName" class="form-control" value="{{ Auth::user()->name }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
                    <small class="form-text text-muted">Anda dapat mengubah alamat email melalui menu <a href="#">Akun</a>.</small>
                </div>
                <div class="mb-3">
                    <label for="headline" class="form-label">Headline <span class="text-danger">*</span></label>
                    <input type="text" id="headline" class="form-control" placeholder="Moto: Tenangkan Pikiran, Bangun Masa Depan." value="">
                    <div class="smal form-text text-muted">
                        Dapat diisi dengan moto Anda.
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary px-3">
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- content end -->


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
    <!-- Footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
