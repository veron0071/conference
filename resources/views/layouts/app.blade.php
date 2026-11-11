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
                        petrol: {
                            DEFAULT: '#005461',
                            950: '#002228',
                            900: '#002d35',
                            800: '#003c45',
                            700: '#004853',
                            600: '#005461',
                            500: '#018790',
                        },
                        teal: {
                            DEFAULT: '#018790',
                            700: '#005461',
                            600: '#016f76',
                            500: '#018790',
                            400: '#029fa9',
                            300: '#1fc2cd',
                        },
                        mint: {
                            DEFAULT: '#00B7B5',
                            600: '#018790',
                            500: '#00B7B5',
                            400: '#22d3d1',
                            300: '#5eead4',
                            200: '#99f6e4',
                            100: '#ccfbf1',
                            50: '#f0fdfa',
                        },
                        offwhite: '#F4F4F4',
                        // Dynamic mapping for backward-compatible classes
                        emerald: {
                            50: '#F4F4F4',
                            100: '#e0f7f6',
                            200: '#b2ebe9',
                            300: '#80dedc',
                            400: '#00B7B5',     // Mint Cyan
                            500: '#018790',     // Classic Teal
                            600: '#005461',     // Deep Petrol Teal
                            700: '#004853',
                            800: '#003c45',
                            900: '#002d35',
                        },
                        brand: {
                            50: '#F4F4F4',
                            100: '#e0f7f6',
                            200: '#b2ebe9',
                            300: '#80dedc',
                            400: '#00B7B5',
                            500: '#018790',
                            600: '#005461',
                            700: '#004853',
                            800: '#003c45',
                            900: '#002d35',
                        },
                        accent: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            200: '#99f6e4',
                            300: '#5eead4',
                            400: '#00B7B5',     // Mint Accent
                            500: '#018790',     // Teal
                            600: '#005461',     // Petrol
                            700: '#004853',
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
        /* Crisp solid background with subtle architectural grid (NO gradients) */
        .hero-pattern {
            background-color: #005461;
            background-image: 
                linear-gradient(rgba(255, 255, 255, 0.06) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.06) 1px, transparent 1px);
            background-size: 36px 36px;
        }
        .glass-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
        }
        .dark-glass {
            background: #005461;
            border: 1px solid rgba(0, 183, 181, 0.3);
        }
        /* Solid Flat Component Styling (No AI gradients) */
        .icset-factsheet-card {
            background-color: #005461 !important;
            color: #ffffff !important;
            border: 1px solid rgba(0, 183, 181, 0.35) !important;
        }
        .icset-keynote-card {
            background-color: #005461 !important;
            color: #ffffff !important;
            border: 1px solid rgba(0, 183, 181, 0.35) !important;
        }
        .icset-speaker-avatar {
            background-color: #018790 !important;
            color: #ffffff !important;
            font-weight: 800 !important;
        }
        .icset-proceedings-card {
            background-color: #005461 !important;
            color: #ffffff !important;
            border: 1px solid rgba(0, 183, 181, 0.35) !important;
        }
        .icset-featured-pricing-card {
            background-color: #005461 !important;
            color: #ffffff !important;
            border: 2px solid #00B7B5 !important;
        }
        .icset-venue-card {
            background-color: #005461 !important;
            color: #ffffff !important;
            border: 1px solid rgba(0, 183, 181, 0.35) !important;
        }
        .icset-cfp-card {
            background-color: #005461 !important;
            color: #ffffff !important;
            border: 1px solid rgba(0, 183, 181, 0.35) !important;
        }
    </style>
</head>
<body class="bg-[#F4F4F4] text-slate-800 antialiased selection:bg-[#00B7B5] selection:text-[#005461]">

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
