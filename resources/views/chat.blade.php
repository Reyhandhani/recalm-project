<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECALM Chat</title>
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

    <!-- Chat Section -->
    <div class="container my-4">
        <h2 class="text-center mb-4">Chat dengan RECALM</h2>

        <div class="card shadow">
            <!-- Chat Area -->
            <div class="card-body" id="chat-area" style="height: 60vh; overflow-y: auto; background-color: #f8f9fa;">
                <!-- Example Messages -->
                <div class="d-flex flex-row mb-3">
                    <div class="p-3 rounded bg-primary text-white">Hai, ada yang bisa aku bantu?</div>
                </div>
                <div class="d-flex flex-row-reverse mb-3">
                    <div class="p-3 rounded bg-secondary text-white">Aku lagi butuh saran untuk menenangkan diri.</div>
                </div>
            </div>

            <!-- Input Area -->
            <div class="card-footer bg-white">
                <form id="chat-form" class="d-flex">
                    <input type="text" class="form-control me-2" id="chat-input" placeholder="Tulis pesan...">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Chat Section end -->

    <!-- Footer -->
    <footer id="gray" class="bg-primary text-white text-center py-4">
        <div class="container" style="height: 7vh;">
            <p class="mb-1">&copy; 2024 RECALM. All Rights Reserved.</p>
            <ul class="list-inline mb-0">
                <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Privacy
                        Policy</a></li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Terms of
                        Service</a></li>
                <li class="list-inline-item">|</li>
                <li class="list-inline-item"><a href="#" class="text-white text-decoration-none">Contact Us</a>
                </li>
            </ul>
            <div class="mt-3">
                <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        const chatForm = document.getElementById('chat-form');
        const chatInput = document.getElementById('chat-input');
        const chatArea = document.getElementById('chat-area');

        chatForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const message = chatInput.value.trim();

            if (message) {
                // Add user message to chat area
                const userMessage = document.createElement('div');
                userMessage.className = 'd-flex flex-row-reverse mb-3';
                userMessage.innerHTML = `<div class="p-3 rounded bg-secondary text-white">${message}</div>`;
                chatArea.appendChild(userMessage);

                // Scroll to the bottom
                chatArea.scrollTop = chatArea.scrollHeight;

                // Clear input
                chatInput.value = '';

                // Simulate bot response
                setTimeout(() => {
                    const botMessage = document.createElement('div');
                    botMessage.className = 'd-flex flex-row mb-3';
                    botMessage.innerHTML =
                        `<div class="p-3 rounded bg-primary text-white">Terima kasih telah berbagi, ada lagi yang bisa aku bantu?</div>`;
                    chatArea.appendChild(botMessage);

                    // Scroll to the bottom
                    chatArea.scrollTop = chatArea.scrollHeight;
                }, 1000);
            }
        });
    </script>
</body>

</html>
