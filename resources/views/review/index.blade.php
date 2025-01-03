<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rewiew Note</title>
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle  me-1" href="#"
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

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar kiri -->
            <div class="col-md-3 bg-white d-none d-md-block sidebar">
                <h4 class="fw-bold">Pengaturan</h4>
                <nav class="nav flex-column">
                    <a class="nav-link" href="{{ route('profile') }}"><i class="fas fa-user"></i> Profile</a>
                    <a class="nav-link" href="{{ route('statistik') }}"><i class="fas fa-chart-bar"></i> Statistik Mood</a>
                    <a class="nav-link" href="{{ route('review.index') }}"><i class="fas fa-user-cog"></i> Riview Note</a>
                    <a class="nav-link" href=""><i class="fas fa-graduation-cap"></i> button opsional</a>
                    <a class="nav-link text-danger" href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout Account
                    </a>
                    <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </nav>
            </div>

            <!-- Sidebar untuk tampilan mobile -->
            <div class="col-12 d-md-none mb-3">
                <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse"
                    data-bs-target="#sidebarNav" aria-expanded="false" aria-controls="sidebarNav">
                    <i class="fas fa-bars"></i> Menu
                </button>
                <div class="collapse" id="sidebarNav">
                    <nav class="nav flex-column sidebar">
                        <a class="nav-link" href="{{ route('profile') }}"><i class="fas fa-user"></i> Profile</a>
                        <a class="nav-link" href="{{ route('statistik') }}"><i class="fas fa-chart-bar"></i> Statistik Mood</a>
                        <a class="nav-link" href="{{ route('review.index') }}"><i class="fas fa-user-cog"></i> Review
                            Note</a>
                        <a class="nav-link" href="#"><i class="fas fa-graduation-cap"></i> button opsional</a>
                        <a class="nav-link text-danger" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form-sidebar-mobile').submit();">
                            <i class="fas fa-sign-out-alt"></i> Logout Account
                        </a>
                        <form id="logout-form-sidebar-mobile" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                    </nav>
                </div>
            </div>

            <!-- Content area -->
            <div class="col-md-9 p-4">
                <h4>Review Notes</h4>
                <hr>
                @foreach ($notes as $note)
                <div class="card border border-primary mb-2">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title text-primary fw-bold">{{ $note->Mood }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted fw-medium">{{ $note->created_at->format('Y-m-d') }}</h6>
                            <p class="card-text m-0 fw-medium">{{ Str::limit($note->Note, 150) }}...</p>
                        </div>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="gray" class="text-white text-center py-4">
        <div class="container">
            <p class="mb-1">&copy; 2024 RECALM. All Rights Reserved.</p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Privacy
                        Policy</a></li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Terms of
                        Service</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
