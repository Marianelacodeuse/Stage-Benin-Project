<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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


    public function candidatDetail($id){
$user=User::find($id);


        return view('candidat.candidat-detail',compact('user'));
    }

    public function uui(Request $request)
    {

       $user= User::find($request->id_user);

       if($request->logo != ''){        
        $path = public_path().'/uploads/images/';
        // dd($path);

        //code for remove old file
        if($user->logo_path != ''  && $user->logo_path != null){
             $file_old = $path.$user->logo_path;
             unlink($file_old);
        }

        //upload new file
        $logo = $request->logo;
        // dd($logo);
        $logoname = $logo->getClientOriginalName();
        // dd($logoname);
        $logo->move($path, $logoname);

        //for update in table
        $user->update(['logo_path' => $logoname]);
   }
       $user->update(
            [
                'name' => $request->name,
                'age' => $request->age,
                'genre' => $request->genre,
                'filiere' => $request->filiere,
                'specialite' => $request->specialite,
                'niveau' => $request->niveau,
                'telephone' => $request->telephone,
                'email' => $request->email,
                'adresse' => $request->adresse,
                'description' => $request->description,
                'facebook_url' => $request->facebook_url,
                'linkdin_url' => $request->linkdin_url,

            ]
        );
        return back();
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



    public function delete(){
        $user=User::find(auth()->user()->id);
        $user->delete();
        return view('welcome')->with('message','Compte Supprimer');
    }
}
