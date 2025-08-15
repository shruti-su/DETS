<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ManageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $roles): Response
    {
        if (! Auth::check()) {
            return response('Unauthorized: Not logged in.', 403);
        }

        $user = Auth::user();
        $allowedRoles = explode('|', $roles); // e.g., "admin|user"

        if (in_array($user->role, $allowedRoles)) {
            return $next($request);
        }

        return response('Unauthorized: Insufficient role.', 403);
    }
}
