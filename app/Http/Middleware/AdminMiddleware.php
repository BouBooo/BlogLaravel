<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        die('middleware');
        $user = Auth::user();
        if(!$user) {
            return redirect()->route('home');
        }

        if($user->role != 'ADMIN') {
            return redirect()->route('home');
        }
        
        return $next($request);
    }
}
