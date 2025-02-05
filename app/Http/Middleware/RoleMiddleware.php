<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {   
        if (!Auth::check() || Auth::user()->role !== $role) {
            // Optionally, you can redirect to a specific page or return a 403 response
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
