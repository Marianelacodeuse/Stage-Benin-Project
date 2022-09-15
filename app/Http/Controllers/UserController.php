<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

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
                unlink($file_old);
            }
            //upload new file
            $logo = $request->logo;
            // dd($logo);
            $logoname = $logo->getClientOriginalName();
            // dd($logoname);
            $logo->move($path, $logoname);

            //for update in table
            $user->logo_path = $logoname;
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
            $cvname = $cv->getClientOriginalName();
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
        $user->facebook_url = $request->facebook_url;
        $user->linkedin_url = $request->linkedin_url;
        $user->twitter_url = $request->twitter_url;
        $user->instagrame_url = $request->instagrame_url;
        $user->site_url = $request->site_url;
        $user->ville = $request->ville;
        $user->save();

        $user->update(
            [
                'name' => $request->name,
                'age' => $request->age,
                'genre' => $request->genre,
                // 'filiere_secteur' => $request->filiere_secteur,
                'specialite' => $request->specialite,
                // 'niveau_taille' => $request->niveau_taille,
                'telephone' => $request->telephone,
                'email' => $request->email,
                'adresse' => $request->adresse,
                
                'description' => $request->description,
                // 'facebook_url' => $request->facebook_url,
                // 'linkedin_url' => $request->linkedin_url,
                // 'twitter_url' => $request->twitter_url,
                // 'instagrame_url' => $request->instagrame_url,
                // 'site_url' => $request->site_url,

            ]
        );
        return back()->with('success', 'Informations Modifiées avec succès');
    }

    public function uup(Request $request)
    {

        User::find($request->id_user)->update(
            [
                'password' => Crypt::encrypt($request->password),

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
}
