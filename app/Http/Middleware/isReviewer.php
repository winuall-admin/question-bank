<?php

namespace App\Http\Middleware;

use Closure;

class isReviewer
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
        // Role 3 is for Reviewer who'll review Questions
        if(Auth::user()){
            $user = Auth::user();
            if($user->role==3){
                return $next($request);
            }
        }
        else return 'Sorry, Access Denied';
    }
}
