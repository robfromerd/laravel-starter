<?php

// app/Http/Middleware/CheckUserRole.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (! $request->user() || $request->user()->role != $role) {
            // Redirect to the home page if the user is not logged in or their role is not 'admin'
            return redirect('/');
        }

        return $next($request);
    }
}



