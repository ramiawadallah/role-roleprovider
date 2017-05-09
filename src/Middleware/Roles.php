<?php
// Rami Awadallah Roles Middleware design | 2017 to Laravel 

namespace App\Http\Middleware;

use Closure;

class Roles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        if(auth()->user()){

            if($role == 'admin'){ 

                if(auth()->user()->role == 'admin'){
                    return $next($request);
                }else{
                    return redirect('unauthorized');
                }

            }else{

                if(auth()->user()->role == $role || auth()->user()->role == 'admin'){
                    return $next($request);
                }else{
                    return redirect('unauthorized');
                }

            }

        }
        
    }
}
