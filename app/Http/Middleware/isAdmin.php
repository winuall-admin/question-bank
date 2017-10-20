<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class isAdmin
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
        // Role 2 is for Admin
        if(Auth::user()){
            $user = Auth::user();
            if($user->role==2){
                return $next($request);
            }
        }
        else return 'Sorry, Access Denied';
    }
}
