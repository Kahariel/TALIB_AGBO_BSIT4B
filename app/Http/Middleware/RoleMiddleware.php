<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!$request->user()) {
            abort(403, 'Unauthorized Action!');
        }

        if ($role == 'admin' && $request->user() && $request->user()->role !== 'admin') {
            return redirect()->route('dashboard');
        }

        if ($role == 'user' && $request->user() && $request->user()->role !== 'user') {
            return redirect()->route('admin_dashboard');
        }

        return $next($request);
    }
}
