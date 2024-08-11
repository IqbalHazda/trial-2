<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CustomAuthenticate
{
    public function handle($request, Closure $next, ...$guards)
    {
        if (Auth::check()) {
            $user = Auth::user();
            
            // Cek apakah pengguna masih ada di database
            if (!$user || !$user->exists) {
                Auth::logout();
                return redirect()->route('login')->withErrors('Akun Anda tidak ditemukan.');
            }
        }
        
        return $next($request);
    }
}
