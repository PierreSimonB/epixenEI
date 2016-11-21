<?php

namespace App\Http\Middleware;

use App\User;
use Illuminate\Support\Facades\Auth;
use Closure;

class AdminMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->guest() || $request->user()->is_admin != 1) {
            
            $request->session()->flash('errormessage', 'Vous n\'avez pas le droit d\'accéder à cette page.');
            return redirect('/');
        }
        return $next($request);
    }

}
