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
                        burgundy: {
                            DEFAULT: '#800020',
                            950: '#38000d',
                            900: '#4d0013',
                            800: '#5C0017',
                            700: '#6d001b',
                            600: '#800020',
                            500: '#9b1b3b',
                        },
                        rose: {
                            DEFAULT: '#D45060',
                            600: '#be3849',
                            500: '#D45060',
                            400: '#e06e7c',
                            300: '#eb929d',
                            200: '#f5bdc3',
                            100: '#fbe2e5',
                            50: '#fdf2f4',
                        },
                        cream: '#F3E6D5',
                        ivory: '#FFF9F2',
                        petrol: {
                            DEFAULT: '#800020',
                            950: '#38000d',
                            900: '#4d0013',
                            800: '#5C0017',
                            700: '#5C0017',
                            600: '#800020',
                            500: '#5C0017',
                        },
                        teal: {
                            DEFAULT: '#5C0017',
                            700: '#800020',
                            600: '#016f76',
                            500: '#5C0017',
                            400: '#029fa9',
                            300: '#1fc2cd',
                        },
                        mint: {
                            DEFAULT: '#D45060',
                            600: '#5C0017',
                            500: '#D45060',
                            400: '#22d3d1',
                            300: '#5eead4',
                            200: '#99f6e4',
                            100: '#ccfbf1',
                            50: '#f0fdfa',
                        },
                        offwhite: '#FFF9F2',
                        // Dynamic mapping for backward-compatible classes
                        emerald: {
                            50: '#FFF9F2',
                            100: '#e0f7f6',
                            200: '#b2ebe9',
                            300: '#80dedc',
                            400: '#D45060',     // Mint Cyan
                            500: '#5C0017',     // Classic Teal
                            600: '#800020',     // Deep Petrol Teal
                            700: '#5C0017',
                            800: '#5C0017',
                            900: '#4d0013',
                        },
                        brand: {
                            50: '#FFF9F2',
                            100: '#e0f7f6',
                            200: '#b2ebe9',
                            300: '#80dedc',
                            400: '#D45060',
                            500: '#5C0017',
                            600: '#800020',
                            700: '#5C0017',
                            800: '#5C0017',
                            900: '#4d0013',
                        },
                        accent: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            200: '#99f6e4',
                            300: '#5eead4',
                            400: '#D45060',     // Mint Accent
                            500: '#5C0017',     // Teal
                            600: '#800020',     // Petrol
                            700: '#5C0017',
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
            background-color: #800020;
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
            background: #800020;
            border: 1px solid rgba(212, 80, 96, 0.3);
        }
        /* Solid Flat Component Styling (No AI gradients) */
        .icset-factsheet-card {
            background-color: #800020 !important;
            color: #ffffff !important;
            border: 1px solid rgba(212, 80, 96, 0.35) !important;
        }
        .icset-keynote-card {
            background-color: #800020 !important;
            color: #ffffff !important;
            border: 1px solid rgba(212, 80, 96, 0.35) !important;
        }
        .icset-speaker-avatar {
            background-color: #5C0017 !important;
            color: #ffffff !important;
            font-weight: 800 !important;
        }
        .icset-proceedings-card {
            background-color: #800020 !important;
            color: #ffffff !important;
            border: 1px solid rgba(212, 80, 96, 0.35) !important;
        }
        .icset-featured-pricing-card {
            background-color: #800020 !important;
            color: #ffffff !important;
            border: 2px solid #D45060 !important;
        }
        .icset-venue-card {
            background-color: #800020 !important;
            color: #ffffff !important;
            border: 1px solid rgba(212, 80, 96, 0.35) !important;
        }
        .icset-cfp-card {
            background-color: #800020 !important;
            color: #ffffff !important;
            border: 1px solid rgba(212, 80, 96, 0.35) !important;
        }
    </style>
</head>
<body class="bg-[#FFF9F2] text-slate-800 antialiased selection:bg-[#D45060] selection:text-white">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Floating Language Selector (Pojok Kiri Bawah) -->
    @include('partials.language-floating')

    <!-- Floating Action Buttons: Contact Us & Check Status (Pojok Kanan Bawah) -->
    @include('partials.floating-actions')

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
            if (!navbar) return;
            if (window.scrollY > 20) {
                navbar.classList.add('shadow-xl', 'bg-[#800020]');
                navbar.classList.remove('bg-[#800020]/95');
            } else {
                navbar.classList.remove('shadow-xl', 'bg-[#800020]');
                navbar.classList.add('bg-[#800020]/95');
            }
        });
    </script>
</body>
</html>
