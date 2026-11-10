<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedLocales = ['en', 'id', 'zh', 'ar', 'ja'];
        $locale = session('locale', config('app.locale', 'en'));

        if (in_array($locale, $allowedLocales)) {
            app()->setLocale($locale);
        } else {
            app()->setLocale('en');
        }

        return $next($request);
    }
}
