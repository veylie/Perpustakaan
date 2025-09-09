<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next, ...$role): Response
    {
        if (!$request->user() || $request->user()->hasAnyRole($role)) {
            // abort(403, 'Anda tidak memiliki hak akses');
            Alert::error('Anda tidak memiliki hak akses Ke Halaman ini');
            return redirect()->to('dashboard');
        }
        return $next($request);
    }
}
