<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntrepriseAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
        if(Auth::user()->role=='recruteur'){
            return $next($request);
        }else{
            $message="You don't have permission to acces this page as candidate";
            return response()->view('pages.accessDinied',['message'=>$message]);
        }
        // if(Auth::user()->role=='recruteur'){
        //     return redirect()->route('entreprise-dashboard');
        // }
        
        // return response()->json(["You don't have permission to acces this page"]);
        
    }
}
