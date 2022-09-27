<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getLoginPage(){
        return view('auth.admin-login');
    }
    public function getDashboard()
    {
        $users=DB::table('users')->get();
// dd($users);
        return view('admin.index',['users'=>$users]);
    }
    public function getEtudiants()
    {
        $etudiants=DB::table('users')->where('role','candidat')->get();

        return view('admin.etudiant',['etudiants'=>$etudiants]);
    }
    public function getEtudiantCandidatures($id)
    {
        $etudiants=DB::table('users')->where('role','candidat')->get();

        return view('admin.etudiant',['etudiants'=>$etudiants]);
    }
    public function getEtudiantDemandes($id)
    {
        $etudiants=DB::table('users')->where('role','candidat')->get();

        return view('admin.etudiant',['etudiants'=>$etudiants]);
    }
    public function getEntreprises()
    {$entreprises=DB::table('users')->where('role','recruteur')->get();
        return view('admin.entreprise',['entreprises'=>$entreprises]);
    }
}
