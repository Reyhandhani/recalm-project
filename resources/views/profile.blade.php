<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Profile</a>
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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>User Profile</h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-4 text-center">
                                <img src="https://via.placeholder.com/150" alt="Profile Picture" class="rounded-circle img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h4 class="text-primary">{{ Auth::user()->name }}</h4>
                                <p class="text-muted">{{ Auth::user()->email }}</p>
                                {{-- <p><strong>Joined:</strong> {{ $user->created_at->format('d M Y') }}</p> --}}
                            </div>
                        </div>
                        <hr>
                        <h5 class="text-secondary">About</h5>
                        <p>{{ $user->about ?? 'No information provided.' }}</p>
                    </div>
                    {{-- <div class="card-footer text-center">
                        <a href="{{ route('profile.edit', $user->id) }}" class="btn btn-warning">Edit Profile</a>
                        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Back to Dashboard</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
