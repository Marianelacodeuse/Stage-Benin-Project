<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function contact(){
        return view('contact.index');
    }
    public function blog(){
        return view('blog.index');
    }

    public function blogDetail(){
        return view('blog.blog-detail');
    }


    public function candidatDashboard(){
        return view('candidat.candidat-dashboard');
    }
    public function entrepriseDashboard(){
        return view('entreprise.entreprise-dashboard');
    }
    public function ssg(){
        $posts=POST::all();
        $nbrPosts=$posts->count();
        // dd($posts->count());
        return view('candidat.search-stage-grid',['posts'=>$posts,'nbrPosts'=>$nbrPosts]);
    }
    public function ssl(){
        $posts=POST::all();
        $nbrPosts=$posts->count();
        return view ('candidat.search-stage-list',['posts'=>$posts,'nbrPosts'=>$nbrPosts]);
    }
    public function seg(){
        $users=User::where('role','=','recruteur')->get();
        
        $nbrUser=$users->count();
        return view('candidat.search-entreprise-grid',['users'=>$users,'nbrUser'=>$nbrUser]);
    }

    public function sel(){
        $users=User::where('role','=','recruteur')->get();
        
        $nbrUser=$users->count();
        return view('candidat.search-entreprise-list',['users'=>$users,'nbrUser'=>$nbrUser]);
    }
    public function hmg(){
        return view('candidat.half-map-grid');
    }
    public function hml(){
        return view('candidat.half-map-list');
    }


    public function scg(){
        $users=User::where('role','=','candidat')->get();
        
        $nbrUser=$users->count();
        return view('entreprise.search-candidat-grid',['users'=>$users,'nbrUser'=>$nbrUser]);
    }

    public function scl(){
        $users=User::where('role','=','candidat')->get();
        
        $nbrUser=$users->count();
        return view('entreprise.search-candidat-list',['users'=>$users,'nbrUser'=>$nbrUser]);
    }

    public function detailEntreprise(){
        return view('entreprise.entreprise-detail');
    }
    
}
