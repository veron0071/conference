<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel | ICSET 2027')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
                            600: '#016f76',
                            500: '#018790',
                            400: '#029fa9',
                        },
                        mint: {
                            DEFAULT: '#00B7B5',
                            500: '#00B7B5',
                            400: '#22d3d1',
                        },
                        emerald: {
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
                        }
                    }
                }
            }
        }
    </script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-slate-100 text-slate-800 antialiased">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between hidden md:flex flex-shrink-0">
            <div>
                <!-- Brand -->
                <div class="p-6 border-b border-slate-800 flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-[#00B7B5] text-[#005461] font-black flex items-center justify-center text-base shadow-sm">
                        I
                    </div>
                    <div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-base font-extrabold text-white">ICSET 2027</span>
                        </div>
                        <span class="text-[10px] font-bold text-[#00B7B5] uppercase tracking-widest">Admin Control</span>
                    </div>
                </div>

                <!-- Navigation Links -->
                <nav class="p-4 space-y-1.5 text-xs font-semibold">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-emerald-600 text-white font-bold' : 'hover:bg-slate-800 text-slate-300' }}">
                        <i data-lucide="layout-dashboard" class="w-4 h-4"></i>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{ route('admin.registrations') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.registrations*') ? 'bg-emerald-600 text-white font-bold' : 'hover:bg-slate-800 text-slate-300' }}">
                        <i data-lucide="users" class="w-4 h-4"></i>
                        <span>Registrations (Peserta)</span>
                    </a>

                    <a href="{{ route('admin.speakers') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.speakers*') ? 'bg-emerald-600 text-white font-bold' : 'hover:bg-slate-800 text-slate-300' }}">
                        <i data-lucide="mic" class="w-4 h-4"></i>
                        <span>Speakers</span>
                    </a>

                    <a href="{{ route('admin.tracks') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.tracks*') ? 'bg-emerald-600 text-white font-bold' : 'hover:bg-slate-800 text-slate-300' }}">
                        <i data-lucide="layers" class="w-4 h-4"></i>
                        <span>Tracks & Topics</span>
                    </a>

                    <a href="{{ route('admin.timelines') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.timelines*') ? 'bg-emerald-600 text-white font-bold' : 'hover:bg-slate-800 text-slate-300' }}">
                        <i data-lucide="calendar" class="w-4 h-4"></i>
                        <span>Timeline & Dates</span>
                    </a>

                    <a href="{{ route('admin.programmes') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.programmes*') ? 'bg-emerald-600 text-white font-bold' : 'hover:bg-slate-800 text-slate-300' }}">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        <span>Programme Schedule</span>
                    </a>

                    <a href="{{ route('admin.faqs') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.faqs*') ? 'bg-emerald-600 text-white font-bold' : 'hover:bg-slate-800 text-slate-300' }}">
                        <i data-lucide="help-circle" class="w-4 h-4"></i>
                        <span>FAQs</span>
                    </a>

                    <a href="{{ route('admin.partners') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.partners*') ? 'bg-emerald-600 text-white font-bold' : 'hover:bg-slate-800 text-slate-300' }}">
                        <i data-lucide="building-2" class="w-4 h-4"></i>
                        <span>Partners & Sponsors</span>
                    </a>

                    <a href="{{ route('admin.fees') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.fees*') ? 'bg-emerald-600 text-white font-bold' : 'hover:bg-slate-800 text-slate-300' }}">
                        <i data-lucide="tag" class="w-4 h-4"></i>
                        <span>Registration Fees</span>
                    </a>

                    <a href="{{ route('admin.committees') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.committees*') ? 'bg-emerald-600 text-white font-bold' : 'hover:bg-slate-800 text-slate-300' }}">
                        <i data-lucide="users-2" class="w-4 h-4"></i>
                        <span>Organizing Committee</span>
                    </a>

                    <a href="{{ route('admin.settings') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.settings*') ? 'bg-emerald-600 text-white font-bold' : 'hover:bg-slate-800 text-slate-300' }}">
                        <i data-lucide="settings" class="w-4 h-4"></i>
                        <span>Conference Settings</span>
                    </a>
                </nav>
            </div>

            <!-- Bottom user & links -->
            <div class="p-4 border-t border-slate-800 space-y-2">
                <a href="{{ route('home') }}" target="_blank" class="flex items-center justify-between px-3 py-2 rounded-lg bg-slate-800/60 hover:bg-slate-800 text-xs font-semibold text-slate-300">
                    <span class="flex items-center gap-2">
                        <i data-lucide="external-link" class="w-3.5 h-3.5 text-emerald-400"></i>
                        <span>Live Website</span>
                    </span>
                    <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-slate-500"></i>
                </a>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-2 px-3 py-2 rounded-lg text-xs font-semibold text-rose-400 hover:bg-rose-500/10 transition-colors">
                        <i data-lucide="log-out" class="w-3.5 h-3.5"></i>
                        <span>Log Out</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col min-w-0">
            <!-- Topbar -->
            <header class="h-16 bg-white border-b border-slate-200 px-6 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <span class="text-sm font-bold text-slate-700">@yield('header_title', 'Admin Dashboard')</span>
                </div>

                <div class="flex items-center gap-4">
                    <span class="text-xs font-semibold text-slate-500">{{ auth()->user()->name ?? 'Administrator' }}</span>
                    <div class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-800 font-bold flex items-center justify-center text-xs">
                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                    </div>
                </div>
            </header>

            <!-- Alerts -->
            <div class="p-6 pb-0">
                @if(session('success'))
                <div class="p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs sm:text-sm font-semibold flex items-center gap-2.5">
                    <i data-lucide="check-circle" class="w-4 h-4 text-emerald-600"></i>
                    <span>{{ session('success') }}</span>
                </div>
                @endif
                @if(session('error'))
                <div class="p-4 rounded-xl bg-rose-50 border border-rose-200 text-rose-800 text-xs sm:text-sm font-semibold flex items-center gap-2.5">
                    <i data-lucide="alert-circle" class="w-4 h-4 text-rose-600"></i>
                    <span>{{ session('error') }}</span>
                </div>
                @endif
            </div>

            <!-- Page Body -->
            <main class="p-6 flex-1">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
