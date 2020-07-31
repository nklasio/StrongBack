<?php

namespace App\Http\Middleware;

use Closure;

class PasswordSet
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user->password_set === 0) {
            //ddd($user);
            return redirect()->route('password.set');
        }

        return $next($request);
    }
}
