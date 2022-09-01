<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Carbon;
use App\Models\Post;
use App\Models\PostUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderByDesc('id')->get();
        // $users=User::all();
        foreach ($posts as $post) {
            // dd($post->created_at);
            $date = $post->created_at;
            // dd($date);
            $dateCreate = new Carbon($date);
            $now = Carbon::now();
            // dd($now);
            $diff = $dateCreate->diffAsCarbonInterval($now);
            // dd($diff);
            return view('entreprise.entreprise-dashboard', compact('diff'));

            // return dd($diff);
        };
        // dd($posts);
        // foreach($posts as $post){
        //    return $diff;
        // }
        return view('entreprise.entreprise-dashboard', ['posts' => $posts]);

        // dd($dateCreate);
        // $now=Carbon::now();

        // $diff=$dateCreate->diffInSeconds($now);
        // dd($diff);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => auth()->id()
        ]);
        return back()->with('success', 'POST CREER');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('stage.offre-detail',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/')->with('success', 'Post delete with success');
    }



    public function posting($id){

        PostUser::create([
            'post_id'=>$id,
            'user_id'=>auth()->user()->id,
        ]);


       
        return back()->with('message','Apply with success');

    }

    public function postingUser(){

        $postsUsers=PostUser::all();
        // dd(auth()->user()->id);
        $posts=DB::table('posts')->select('id')->where('user_id','=',auth()->user()->id)->get();
        // dd($posts);

        // $posts=Post::all();

        // dd($posts);
        
        // dd($tesposts);
         $datas = array();
        foreach($posts as $post){
            $id_etu = DB::table('post_user')->select('user_id')->where('post_id','=',$post->id)->distinct()->get();
            // dd($id_etu);
            // $etudiants=DB::table('users')->select('*')->where('id','=',$id_etu[0]->user_id)->get();
            
            foreach($id_etu as $id_et){
                $etudiants=DB::table('users')->select('*')->where('id','=',$id_et->user_id)->get();
                array_push($datas, $etudiants);

                
                // dd($etudiants);
            }
            $dataNews=array();
            foreach($datas as $data ){
               array_push($dataNews,$data[0]);
            }
            dd($dataNews[0]->name);
            
            // $data=$data.array_push($id_etu);
        }


        $postOfdata=DB::table('post')->select('post_id')->where('user_id','=');
        

        return $postsUsers;

    }
}
