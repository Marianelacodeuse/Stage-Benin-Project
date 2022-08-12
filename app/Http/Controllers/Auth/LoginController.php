<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    // public function login(Request $request){



    //     $input = $request->all();
    //     $this->validate($request,[
    //         'email'=>'required|email',
    //         'password'=>'required'
    //     ]);
    //      if(auth()->attempt(array('email'=>$input['email'],'password'=>$input['password']))){

    //         if(auth()->user()->role=='candidat'){
    //             return redirect()->route('candidat.dashboard');
    //         }else if(auth()->user()->role=='recruteur'){
    //             return redirect()->route('recruteur.dashboard');
    //         }else{
    //             return redirect()->route('home');
    //         }

    //      }else{
    //         return redirect()->route('login')->with('error','Information non dispo');
    //      }

    // }
}
