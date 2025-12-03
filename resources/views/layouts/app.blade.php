<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- App Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Tailwind CDN (if you are NOT using Vite or tailwind built in app.css) -->
    <script src="https://cdn.tailwindcss.com"></script>


    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#D90429', // Main red
                        secondary: '#0A0A0A', // Deep black
                        charcoal: '#1E1E1E', // Dark gray bg
                        lightGray: '#F2F2F2', // Product cards bg
                        midGray: '#BFBFBF', // Borders
                        yellow: '#FFC300', // Accent / Add to cart
                        steelBlue: '#3A6EA5', // Industrial blue accent
                        success: '#2ECC71', // In stock / success
                        offer: '#FF6F00', // Flash sale / deals
                    }
                }
            }
        }
    </script>


    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- GSAP (Only keep if used in animations) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/cm-removebg-preview.png') }}" type="image/x-icon">

    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        a,
        li,
        button,
        input,
        textarea {
            font-family: 'Poppins', sans-serif !important;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

</head>

<body class="m-0 p-0 overflow-x-hidden scroll-smooth">

    @unless (Route::is('login') || Route::is('register'))
        @include('partials.header')
    @endunless


    {{-- @include('partials.header') --}}

    <main>
        @yield('content')
    </main>

    {{-- @include('partials.footer') --}}
    @include('partials.forget-password')

    @unless (Route::is('login') || Route::is('register'))
        @include('partials.footer')
    @endunless



    <!-- WhatsApp Button -->
    <div id="whatsappBtn" class="fixed bottom-6 left-6 z-50 hidden">
        <a href="https://wa.me/919999999999" target="_blank"
            class="text-green-600 text-4xl hover:text-6xl transition-all duration-300 ease-in-out">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <!-- Scroll To Top -->
    <div id="scrollToTop" class="fixed bottom-6 right-6 z-50 hidden">
        <button onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
            class="bg-primary hover:bg-secondary hover:text-primary text-white text-base md:text-lg px-3.5 py-1.5 rounded-full shadow-lg transition duration-300">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>

    <!-- Show/Hide on Scroll -->
    <script>
        const scrollToTopBtn = document.getElementById("scrollToTop");
        const whatsappBtn = document.getElementById("whatsappBtn");

        window.addEventListener("scroll", () => {
            const show = window.scrollY > 200;
            scrollToTopBtn.classList.toggle("hidden", !show);
            whatsappBtn.classList.toggle("hidden", !show);
        });
    </script>

       <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('forgotPasswordBtn');
            const modal = document.getElementById('forgotPasswordModal');
            const closeBtn = document.getElementById('closeForgotPassword');

            if (!btn || !modal || !closeBtn) return;

            btn.addEventListener('click', (e) => {
                e.preventDefault();
                modal.classList.remove('hidden');
                modal.classList.add('flex');
            });


            closeBtn.addEventListener('click', () => {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            });

            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    modal.classList.add('hidden');
                    modal.classList.remove('flex');
                }
            });
        });
    </script>

</body>

</html>
