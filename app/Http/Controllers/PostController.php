<?php

namespace App\Http\Controllers;

use App\Models\Demande;
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
        foreach ($posts as $post) {
            $date = $post->created_at;
            $dateCreate = new Carbon($date);
            $now = Carbon::now();
            $diff = $dateCreate->diffAsCarbonInterval($now);
            return view('entreprise.entreprise-dashboard', compact('diff'));
        };
        return view('entreprise.entreprise-dashboard', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duree' => 'required',
            'niveau_reqcui' => 'required',
            'categorie' => 'required',
            'adresse_stage' => 'required',

        ]);

        // dd($request->all());
        $post = new Post();
        $post->title = $request->title;
        $post->duree = $request->duree;
        $post->adresse_stage = $request->adresse_stage;
        $post->nbr_place = $request->nbr_place;
        $post->niveau_recqui = $request->niveau_recqui;
        $post->expiration = $request->expiration;
        $post->description = $request->description;
        $post->gratification = $request->gratification;
        $post->user_id = auth()->id();
        $post->categorie = $request->category;
        $post->save();
        if ($post->save()) {
            return back()->with('success', 'Offre de stage créer avec succès');
        } else {
            return back()->with('error', "Une erreur s'est produite. Veillez à remplir tous les champs");
        }
        
        // if (Post::create([
        //     'title'=>$request->title,
        //     'duree'=>$request->duree,
        //     'adresse_stage'=>$request->adresse_stage,
        //     'nbr_place'=>$request->nbr_place,
        //     'niveau_recqui'=>$request->niveau_recqui,
        //     'expiration'=>$request->expiration,
        //     'descripition'=>$request->descripition,
        //     'gratification'=>$request->gratification,
        //     'user_id'=>auth()->id(),
        //     'categorie'=>$request->category,
        // ])) {
        //     return back()->with('success', 'Offre de stage créer avec succès');
        // } else {
        //     return back()->with('error', "Une erreure s'est produite. Veillez à remplir tous les champs");
        // }
    }
    public function createDemande($id, Request $request)
    {
        // dd($request);
        $request->validate([
            'motivation' => ['required'],
            'recommandation' => ['required'],

        ]);
        $demande = new Demande();

        $path = public_path() . '/uploads/pdf/';
        $motivation = $request->motivation;
        // dd($cv);
        $motivationname = $motivation->getClientOriginalName();
        // dd($cvname);
        $motivation->move($path, $motivationname);

        //for update in table
        $demande->motivation_path = $motivationname;

        $recommandation = $request->recommandation;
        // dd($cv);
        $recommandationname = $recommandation->getClientOriginalName();
        // dd($cvname);
        $recommandation->move($path, $recommandationname);

        //for update in table
        $demande->recommendation_path = $recommandationname;
        // $user->update(['cv_path' => $cvname]);
        $demande->etudiant_id = auth()->user()->id;
        $demande->entreprise_id = $id;
        $demande->save();
        if (!$demande->save()) {

            return back()->with('error', 'Certaines informations manquent. Veuillez recommencer');
        } else {
            return back()->with('message', 'Demande soumis avec succes');
        }
        // Demande::create([
        //     'etudiant_id' => auth()->user()->id,
        //     'entreprise_id' => $id,

        // ]);

    }
    public function showEtuDemande()
    {
        $demandes = Demande::where('etudiant_id', auth()->user()->id)->get();
        return view('candidat.candidat-dashboard', ['demandes' => $demandes]);
    }
    public function showEntDemande()
    {
        $demandes = Demande::where('entreprise_id', auth()->user()->id)->get();
        // dd($demandes);
        return view('entreprise.entreprise-dashboard', ['demandes' => $demandes]);
    }
    public function changeDemandeStatus(Request $request)
    {

        if ($request->accepter) {
            // dd($request->accepter);
            $demandes = DB::table('demandes')->where('id', $request->id)->update(['statut' => 1]);
            // dd($demandes);
        } else {

            $demandes = DB::table('demandes')->where('id', $request->id)->update(['statut' => 0]);
            // dd($demandes);
        }

        return back();
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
        $post = Post::find($id);
        return view('stage.offre-detail', compact('post'));
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
        // dd($post);
        $post->delete();
        return back()->with('success', 'Post delete with success');
    }



    public function posting($id, Request $request)
    {
        // dd($request->date_debut);
        // dd($id);
        PostUser::create([
            'post_id' => $id,
            'user_id' => auth()->user()->id,
        ]);



        return back()->with('message', 'Apply with success');
    }

    public function postingUser()
    {

        $postsUsers = PostUser::all();
        // dd(auth()->user()->id);
        $posts = DB::table('posts')->select('id')->where('user_id', '=', auth()->user()->id)->get();
        // dd($posts);

        // $posts=Post::all();

        // dd($posts);

        // dd($tesposts);
        $datas = array();
        foreach ($posts as $post) {
            $id_etu = DB::table('post_user')->select('user_id')->where('post_id', '=', $post->id)->distinct()->get();
            // dd($id_etu);
            // $etudiants=DB::table('users')->select('*')->where('id','=',$id_etu[0]->user_id)->get();

            foreach ($id_etu as $id_et) {
                $etudiants = DB::table('users')->select('*')->where('id', '=', $id_et->user_id)->get();
                array_push($datas, $etudiants);


                // dd($etudiants);
            }
            $dataNews = array();
            foreach ($datas as $data) {
                array_push($dataNews, $data[0]);
            }
            dd($dataNews[0]->name);

            // $data=$data.array_push($id_etu);
        }


        $postOfdata = DB::table('post')->select('post_id')->where('user_id', '=');


        return $postsUsers;
    }
}
