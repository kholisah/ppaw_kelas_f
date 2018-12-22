<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Role

{
    /**
     * Handle an incoming request
     * 
     * @pram \Illmunite\Http\Request $_REQUEST
     * @pram \Closure $next
     * @return mixed
     */
    public function handle ($request. Closure $next){
        if (Auth::user()->role == 'admin'){
            return $next($request);
        }

        return redirect('/member');
        
    }
        return redirect('/member');
}