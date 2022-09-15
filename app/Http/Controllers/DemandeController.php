<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;
class DemandeController extends Controller
{
    public function create($id){
         Demande::create([
            'etudiant_id'=> auth()->user()->id,
            'entreprise_id'=>$id,
         ]);
    }
}
