<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $entreprises = DB::table('users')->where('role', 'recruteur')->limit(5)->get();
        // dd($entreprises);
        $allPosts = Post::all();
        // dd($allPosts);
        $totalPosts = $allPosts->count();
        $allEntreprises = User::where('role', 'recruteur');
        $totalEntreprises = $allEntreprises->count();
        $allEtudiants = User::where('role', 'candidat');
        $totalEtudiants = $allEtudiants->count();
        $posts = DB::table('posts')->select('*')
            ->join('users', 'users.id', '=', 'user_id')
            ->inRandomOrder()->limit(3)->get();
        // dd($posts);
        return view('welcome', ['entreprises' => $entreprises, 'posts' => $posts, 'totalPosts' => $totalPosts, 'totalEntreprises' => $totalEntreprises, 'totalEtudiants' => $totalEtudiants,]);
    }

    public function contact()
    {
        return view('contact.index');
    }
    public function blog()
    {
        return view('blog.index');
    }

    public function blogDetail()
    {
        return view('blog.blog-detail');
    }


    public function candidatDashboard()
    {
        return view('candidat.candidat-dashboard');
    }
    public function entrepriseDashboard()
    {
        return view('entreprise.entreprise-dashboard');
    }
    public function ssg(Request $request)
    {
        // dd($request);
        // $posts = POST::all();
        $posts = DB::table('posts')
            ->select('*')
            ->join('users', 'posts.user_id', 'users.id')
            ->get();
        // dd($posts);
        // foreach($posts as $post){
        //     dd($post->user->logo_path);
        // }
        $nbrPosts = $posts->count();
        // dd($request->categorie);
        // if ($request->categorie) {
            
        //     // $posts = DB::table('posts')->where('category_id',$request->categorie)->get();
        //     $posts = DB::table('posts')->select('*')
        //     ->join('users', 'posts.user_id', 'users.id')
        //     ->where('categorie','LIKE', '%' .$request->categorie.'%')
        //     ->get();
        //     $nbrPosts = $posts->count();
        //     // dd($posts);
        //     return view('candidat.search-stage-grid', ['posts' => $posts,'nbrPosts'=>$nbrPosts]);
        
        // }
        if ($request->motcle) {
            // dd($request->motcle);
            // $posts = DB::table('posts')->where('title', 'LIKE', '%' . $request->motcle . '%')->get();
            $posts = DB::table('posts')->select('*')
                ->join('users', 'posts.user_id', 'users.id')
                ->where('title', 'LIKE', '%' . $request->motcle . '%')
                ->get();
            $nbrPosts = $posts->count();
            // dd($posts);
            return view('candidat.search-stage-grid', ['posts' => $posts, 'nbrPosts' => $nbrPosts]);
        }
        //  dd($request->adresse_stage);

        
        if ($request->localite) {
            // dd($request->adresse_stage);
            // $posts = DB::table('posts')->where('adresse_stage', 'LIKE', '%' . $request->localite . '%')->get();
            $posts = DB::table('posts')->select('*')
                ->join('users', 'posts.user_id', 'users.id')
                ->where('adresse_stage', 'LIKE', '%' . $request->localite . '%')
                ->get();
            $nbrPosts = $posts->count();
            // dd($posts);
            return view('candidat.search-stage-grid', ['posts' => $posts, 'nbrPosts' => $nbrPosts]);
        }
       
        // dd($request);
        // if ($request->categorie) {
        //     dd($request->categorie);
        //     $posts = DB::table('posts')->where('category_id','LIKE', '%' .$request->categorie. '%')->get();
        //     $nbrPosts = $posts->count();
        //     // dd($posts);
        //     return view('candidat.search-stage-grid', ['posts' => $posts,'nbrPosts'=>$nbrPosts]);
        // }
        // dd($request->motcle);
        // dd($posts->count());
        return view('candidat.search-stage-grid', ['posts' => $posts, 'nbrPosts' => $nbrPosts]);
    }
    public function ssl(Request $request)
    {
        // $posts = POST::all();
        // $nbrPosts = $posts->count();
        // return view('candidat.search-stage-list', ['posts' => $posts, 'nbrPosts' => $nbrPosts]);
           // dd($request);
        // $posts = POST::all();
        $posts = DB::table('posts')
            ->select('posts.id','posts.title','posts.duree','users.name','users.logo_path','posts.adresse_stage')
            ->join('users', 'posts.user_id', 'users.id')
            ->get();
        // dd($posts);
        // foreach($posts as $post){
        //     dd($post->user->logo_path);
        // }
        $nbrPosts = $posts->count();
        // dd($request->categorie);
        // if ($request->categorie) {
            
        //     // $posts = DB::table('posts')->where('category_id',$request->categorie)->get();
        //     $posts = DB::table('posts')->select('*')
        //     ->join('users', 'posts.user_id', 'users.id')
        //     ->where('categorie','LIKE', '%' .$request->categorie.'%')
        //     ->get();
        //     $nbrPosts = $posts->count();
        //     // dd($posts);
        //     return view('candidat.search-stage-grid', ['posts' => $posts,'nbrPosts'=>$nbrPosts]);
        
        // }
        if ($request->motcle) {
            // dd($request->motcle);
            // $posts = DB::table('posts')->where('title', 'LIKE', '%' . $request->motcle . '%')->get();
            $posts = DB::table('posts')->select('*')
                ->join('users', 'posts.user_id', 'users.id')
                ->where('title', 'LIKE', '%' . $request->motcle . '%')
                ->get();
            $nbrPosts = $posts->count();
            // dd($posts);
            return view('candidat.search-stage-list', ['posts' => $posts, 'nbrPosts' => $nbrPosts]);
        }
        //  dd($request->adresse_stage);

        
        if ($request->localite) {
            // dd($request->adresse_stage);
            // $posts = DB::table('posts')->where('adresse_stage', 'LIKE', '%' . $request->localite . '%')->get();
            $posts = DB::table('posts')->select('*')
                ->join('users', 'posts.user_id', 'users.id')
                ->where('adresse_stage', 'LIKE', '%' . $request->localite . '%')
                ->get();
            $nbrPosts = $posts->count();
            // dd($posts);
            return view('candidat.search-stage-list', ['posts' => $posts, 'nbrPosts' => $nbrPosts]);
        }
       
        // dd($request);
        // if ($request->categorie) {
        //     dd($request->categorie);
        //     $posts = DB::table('posts')->where('category_id','LIKE', '%' .$request->categorie. '%')->get();
        //     $nbrPosts = $posts->count();
        //     // dd($posts);
        //     return view('candidat.search-stage-grid', ['posts' => $posts,'nbrPosts'=>$nbrPosts]);
        // }
        // dd($request->motcle);
        // dd($posts->count());
        return view('candidat.search-stage-list', ['posts' => $posts, 'nbrPosts' => $nbrPosts]);
    }
    public function seg()
    {
        $users = User::where('role', '=', 'recruteur')->get();

        $nbrUser = $users->count();
        return view('candidat.search-entreprise-grid', ['users' => $users, 'nbrUser' => $nbrUser]);
    }

    public function sel()
    {
        $users = User::where('role', '=', 'recruteur')->get();

        $nbrUser = $users->count();
        return view('candidat.search-entreprise-list', ['users' => $users, 'nbrUser' => $nbrUser]);
    }
    public function hmg()
    {
        return view('candidat.half-map-grid');
    }
    public function hml()
    {
        return view('candidat.half-map-list');
    }


    public function scg()
    {
        $users = User::where('role', '=', 'candidat')->get();

        $nbrUser = $users->count();
        return view('entreprise.search-candidat-grid', ['users' => $users, 'nbrUser' => $nbrUser]);
    }

    public function scl()
    {
        $users = User::where('role', '=', 'candidat')->get();

        $nbrUser = $users->count();
        return view('entreprise.search-candidat-list', ['users' => $users, 'nbrUser' => $nbrUser]);
    }

    public function detailEntreprise($id)
    {
        // dd($id);
        $user = User::find($id);
        // dd($user);
        $posts = Post::where('user_id', '=', $id)->get();
        return view('entreprise.entreprise-detail', ['user' => $user, 'posts' => $posts]);
    }
}
