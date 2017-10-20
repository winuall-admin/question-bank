<?php

namespace App\Http\Middleware;

use Closure;

class isOperator
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
        // Role 1 is for Operator who'll be adding Questions
        if(Auth::user()){
            $user = Auth::user();
            if($user->role==1){
                return $next($request);
            }
        }
        else return 'Sorry, Access Denied';
    }
}
