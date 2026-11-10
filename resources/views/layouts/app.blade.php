<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ICSET 2027 - International Conference on Sustainable Economic Transformation')</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Noto+Sans+Arabic:wght@400;600;700;800&family=Noto+Sans+SC:wght@400;600;700&family=Noto+Sans+JP:wght@400;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Tailwind CSS (CDN for instant standalone rendering in Laragon) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#ecfdf5',
                            100: '#d1fae5',
                            500: '#10b981',
                            600: '#059669',
                            700: '#047857',
                            800: '#065f46',
                            900: '#064e3b',
                            950: '#022c22',
                        },
                        accent: {
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                        }
                    }
                }
            }
        }
    </script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
        .hero-pattern {
            background-color: #042f2e;
            background-image: radial-gradient(rgba(16, 185, 129, 0.15) 1px, transparent 1px), radial-gradient(rgba(14, 165, 233, 0.12) 1px, #042f2e 1px);
            background-size: 40px 40px;
            background-position: 0 0, 20px 20px;
        }
        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .dark-glass {
            background: rgba(6, 78, 59, 0.45);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        /* High-contrast solid container styling for maximum clarity */
        .icset-factsheet-card {
            background-color: #0f172a !important;
            background-image: linear-gradient(135deg, #0f172a 0%, #1e293b 60%, #064e3b 100%) !important;
            color: #ffffff !important;
        }
        .icset-keynote-card {
            background-color: #022c22 !important;
            background-image: linear-gradient(90deg, #0f172a 0%, #022c22 50%, #0f172a 100%) !important;
            color: #ffffff !important;
        }
        .icset-speaker-avatar {
            background-color: #047857 !important;
            background-image: linear-gradient(135deg, #059669 0%, #047857 50%, #064e3b 100%) !important;
            color: #ffffff !important;
            font-weight: 800 !important;
        }
        .icset-proceedings-card {
            background-color: #022c22 !important;
            background-image: linear-gradient(135deg, #022c22 0%, #0f172a 50%, #0f172a 100%) !important;
            color: #ffffff !important;
        }
        .icset-featured-pricing-card {
            background-color: #0f172a !important;
            background-image: linear-gradient(180deg, #0f172a 0%, #064e3b 100%) !important;
            color: #ffffff !important;
        }
        .icset-venue-card {
            background-color: #0f172a !important;
            background-image: linear-gradient(135deg, #0f172a 0%, #064e3b 100%) !important;
            color: #ffffff !important;
        }
        .icset-cfp-card {
            background-color: #1e293b !important;
            background-image: linear-gradient(180deg, #1e293b 0%, #0f172a 100%) !important;
            color: #ffffff !important;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-brand-500 selection:text-white">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Floating Language Selector (Pojok Kiri Bawah) -->
    @include('partials.language-floating')

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Active Navbar on Scroll
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('main-nav');
            if (window.scrollY > 20) {
                navbar.classList.add('shadow-md', 'bg-white/95');
                navbar.classList.remove('bg-white/80');
            } else {
                navbar.classList.remove('shadow-md', 'bg-white/95');
                navbar.classList.add('bg-white/80');
            }
        });
    </script>
</body>
</html>
