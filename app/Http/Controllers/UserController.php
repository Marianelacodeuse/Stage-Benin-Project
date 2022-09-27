<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use function PHPUnit\Framework\fileExists;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // public function uui(Request $request)
    // {
    //     // session(['name' => 'aha']);
    //     // $request->session()->get('key');
    //     $data=$request->session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
    //     // $data = $request->session()->all();
    //     // dd($request->session()->all());
    //     // return $data;
    //     $sname=session(['name' => auth()->user()->name]);
    //     $user=User::find($data);
    //     //  dd($data);
    //     // $user->name=$request->name;

    //     dd($user->name);

    //     // dd($sname);

    //     // $user->specialite=$request->specialite;

    //     // $user->save();


    //     return back();
    // }
    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::HOME;
    public function customRegister(Request $request)
    {
        // dd($request);
        // if($request->role!='candidat'){
        //     dd('ok');
        // }
        if ($request->role != 'candidat' && $request->role == 'recruteur') {
            $request->validate(
                [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                    'role' => ['required', 'string'],
                    'num_ifu' => ['required', 'string', 'min:12', 'max:13'],
                ],
                [
                    'required' => 'Le champs :attribute ne doit pas etre vide.',
                    'password.confirmed' => 'Soit gentil et entre un bon mot de passe',
                ]
            );
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->matricule = $request->num_ifu;
            $user->save();
            // $dataUser = [
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'password' => $request->password,
            //     'role' => $request->role,
            //     'carte_etudiant_path' => $request->num_ifu,
            // ];
            // User::create($dataUser);
            return redirect('/login')->with('success', 'Inscription réussie. Connectez vous à présent');
        } else {
            $request->validate(
                [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'matricule' => ['required', 'string', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                    'role' => ['required', 'string'],
                    'img_carte' => ['required'],
                ],
                [
                    'required' => 'Le champs :attribute ne doit pas etre vide.',
                    'password.confirmed' => 'Soit gentil et entre un bon mot de passe',
                ]
            );
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->matricule = $request->matricule;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $carte_etudiant = $request->img_carte;
            // dd($cv);
            $carte_etudiant_nom = 'Carte_Etudiant_De_' . $request->name . '.' . $carte_etudiant->extension();
            // dd($cvname);
            $path = public_path() . '/uploads/images/';
            $carte_etudiant->move($path, $carte_etudiant_nom);

            //for update in table
            $user->carte_etudiant_path = $carte_etudiant_nom;
            // $user->update(['cv_path' => $cvname]);
            $user->save();

            return redirect('/login')->with('success', 'Inscription réussie. Connectez vous à présent');
        }
    }

    public function candidatDetail($id)
    {
        $user = User::find($id);


        return view('candidat.candidat-detail', compact('user'));
    }

    public function uui(Request $request)
    {

        $user = User::find($request->id_user);

        if ($request->logo != '') {
            $path = public_path() . '/uploads/images/';
            // dd($path);

            //code for remove old file
            if ($user->logo_path != ''  && $user->logo_path != null) {
                $file_old = $path . $user->logo_path;
                if (fileExists($file_old)) {
                    unlink($file_old);
                }
            }
            //upload new file
            $logo = $request->logo;
            // dd($logo);
            $logoname = $logo->getClientOriginalName();
            $logoname = 'Image_De_' . $request->name . '.' . $logo->extension();
            // dd($logoname);
            $logo->move($path, $logoname);

            //for update in table
            $user->logo_path = $logoname;
            $user->save();
            // $user->update(['logo_path' => $logoname]);
        }
        if ($request->banner != '') {
            $path = public_path() . '/uploads/images/';
            // dd($path);

            //code for remove old file
            if ($user->banner_path != ''  && $user->banner_path != null) {
                $file_old = $path . $user->banner_path;
                if (fileExists($file_old)) {
                    unlink($file_old);
                }
            }
            //upload new file
            $banner = $request->banner;
            // dd($logo);
            $bannername = $banner->getClientOriginalName();
            // dd($logoname);
            $banner->move($path, $bannername);

            //for update in table
            $user->banner_path = $bannername;
            $user->save();
            // $user->update(['logo_path' => $logoname]);
        }
        //    dd( $request->cv);
        if ($request->cv != '') {
            $path = public_path() . '/uploads/pdf/';
            // dd($path);

            //code for remove old file
            if ($user->cv_path != ''  && $user->cv_path != null) {
                $file_old = $path . $user->cv_path;
                unlink($file_old);
            }
            //upload new file
            $cv = $request->cv;
            // dd($cv);
            // $cvname = $cv->getClientOriginalName();
            $cvname = 'Cv_De_' . $request->name . '.' . $cv->extension();
            // dd($cvname);
            $cv->move($path, $cvname);

            //for update in table
            $user->cv_path = $cvname;
            // $user->update(['cv_path' => $cvname]);
            $user->save();
            // return 'Cool';
        }
        // dd($request->filiere_secteur);
        // dd($request);

        $user->filiere_secteur = $request->filiere_secteur;
        $user->niveau_taille = $request->niveau_taille;
        // $user->facebook_url = $request->facebook_url;
        // $user->linkedin_url = $request->linkedin_url;
        // $user->twitter_url = $request->twitter_url;
        // $user->instagrame_url = $request->instagrame_url;
        // $user->site_url = $request->site_url;
        // $user->ville = $request->ville;
        // $user->age = $request->age;
        // $user->genre = $request->genre;

        $user->save();

        $user->update(
            [
                'name' => $request->name,
                'age' => $request->age,
                'genre' => $request->genre,
                'filiere_secteur' => $request->filiere_secteur,
                'specialite' => $request->specialite,
                'niveau_taille' => $request->niveau_taille,
                'telephone' => $request->telephone,
                'email' => $request->email,
                'adresse' => $request->adresse,
                'description' => $request->description,
                'facebook_url' => $request->facebook_url,
                'linkedin_url' => $request->linkedin_url,
                'twitter_url' => $request->twitter_url,
                'instagrame_url' => $request->instagrame_url,
                'site_url' => $request->site_url,
                'ville' => $request->ville

            ]
        );
        return back()->with('success', 'Informations Modifiées avec succès');
    }
    public function updateCv(Request $request)
    {

        $user = User::find($request->id_user);


        if ($request->cv != '') {
            $path = public_path() . '/uploads/pdf/';
            // dd($path);

            //code for remove old file
            if ($user->cv_path != ''  && $user->cv_path != null) {
                $file_old = $path . $user->cv_path;
                unlink($file_old);
            }
            //upload new file
            $cv = $request->cv;
            // dd($cv);
            $cvname = $cv->getClientOriginalName();
            // dd($cvname);
            $cv->move($path, $cvname);

            //for update in table
            $user->cv_path = $cvname;
            // $user->update(['cv_path' => $cvname]);
            $user->save();
            // return 'Cool';
        }

        return back()->with('success', 'Informations Modifiées avec succès');
    }

    public function uup(Request $request)
    {

        User::find($request->id_user)->update(
            [
                'password' => Hash::make($request->password),

            ]
        );
        return back()->with('success', 'Mot de passe modifier avec succes');


        // $password = Hash::make($request->password);

        // if (auth()->user()->password == $password) {
        //     User::find($request->id_user)->update([
        //         'password' => $password
        //     ]);
        //     // $user->password = Hash::make($request->password);
        //     // $user->save();
        //     return back()->with('success', 'Mot de passe modifier avec succes');
        // } else {
        //     return back()->with('error', 'Mot de passe invalide');
        // }
    }

    public function delete()
    {
        $user = User::find(auth()->user()->id);
        $user->delete();
        return view('welcome')->with('message', 'Compte Supprimer');
    }

    public function download($file)
    {
        return response()->download(public_path('uploads/pdf/' . $file));
    }
    public function downloadImg($file)
    {
        return response()->download(public_path('uploads/img/' . $file));
    }
    public function display()
    {
        $users = DB::table('users')->where('id', auth()->user()->id)->get();
        // dd($user);
        return view('candidat.candidat-cv-display', ['users' => $users]);
    }
}
