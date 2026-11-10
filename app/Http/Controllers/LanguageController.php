<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch(Request $request, $locale)
    {
        $allowedLocales = ['en', 'id', 'zh', 'ar', 'ja'];

        if (in_array($locale, $allowedLocales)) {
            session(['locale' => $locale]);
        }

        $previous = url()->previous();
        // Avoid redirect loop or staying on switcher URL
        if (!$previous || str_contains($previous, '/locale/') || str_contains($previous, '/language/') || str_contains($previous, '/set-locale/') || str_contains($previous, '/lang/')) {
            return redirect()->route('home');
        }

        return redirect()->to($previous);
    }
}
