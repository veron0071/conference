<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | ICSET 2027</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-slate-900 min-h-screen flex items-center justify-center p-4 selection:bg-emerald-500 selection:text-white">
    
    <div class="max-w-md w-full">
        <!-- Brand Header -->
        <div class="text-center mb-8">
            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 text-slate-950 font-black text-2xl flex items-center justify-center mx-auto mb-4 shadow-lg shadow-emerald-500/20">
                I
            </div>
            <h1 class="text-2xl font-extrabold text-white tracking-tight">ICSET 2027 Admin Portal</h1>
            <p class="text-xs text-slate-400 mt-1">Faculty of Economics & Business UNWAHAS</p>
        </div>

        <!-- Login Card -->
        <div class="bg-slate-800 rounded-3xl p-8 border border-slate-700 shadow-2xl">
            @if($errors->any())
            <div class="mb-6 p-4 rounded-xl bg-rose-500/10 border border-rose-500/30 text-rose-300 text-xs font-semibold">
                {{ $errors->first() }}
            </div>
            @endif

            <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1.5">Email Address</label>
                    <input type="email" name="email" value="{{ old('email', 'admin@icset2027.unwahas.ac.id') }}" required autofocus
                        placeholder="admin@icset2027.unwahas.ac.id"
                        class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white placeholder-slate-500 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-sm transition-all">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1.5">Password</label>
                    <input type="password" name="password" required
                        placeholder="••••••••"
                        class="w-full px-4 py-3 rounded-xl bg-slate-900 border border-slate-700 text-white placeholder-slate-500 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 outline-none text-sm transition-all">
                </div>

                <div class="flex items-center justify-between text-xs text-slate-400">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded border-slate-700 text-emerald-500 focus:ring-emerald-500">
                        <span>Remember me</span>
                    </label>
                </div>

                <button type="submit" class="w-full py-3.5 px-4 rounded-xl font-bold text-slate-950 bg-gradient-to-r from-emerald-400 to-teal-400 hover:from-emerald-300 hover:to-teal-300 shadow-lg shadow-emerald-500/20 text-sm transition-all">
                    Sign In to Dashboard
                </button>
            </form>

            <div class="mt-6 pt-5 border-t border-slate-700 text-center">
                <p class="text-[11px] text-slate-400">Default login credentials:</p>
                <p class="text-[11px] text-emerald-400 font-mono mt-0.5">admin@icset2027.unwahas.ac.id / admin12345</p>
            </div>
        </div>

        <div class="mt-6 text-center">
            <a href="{{ route('home') }}" class="text-xs text-slate-500 hover:text-slate-300 transition-colors">
                &larr; Back to Public Website
            </a>
        </div>
    </div>

    <script> lucide.createIcons(); </script>
</body>
</html>
