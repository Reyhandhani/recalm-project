<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECALM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">RECALM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- Konten -->
    <div class="container my-4">
        <!-- Welcome Section -->
        <header class="bg-primary text-white rounded-3 p-4 text-center mb-4">
            <div class="d-flex justify-content-center align-items-center mb-3">
                <img src="profile.png" alt="User Profile" class="rounded-circle" style="width: 50px; height: 50px;">
                <span class="ms-3">Arig X Tery</span>
            </div>
            <h1>Gimana Hari Mu?</h1>
            <p>Ingat, kamu tidak sendirian dalam menghadapi hari-harimu.</p>
        </header>
        <!-- Welcome Section end -->

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
    <!-- Konten end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
