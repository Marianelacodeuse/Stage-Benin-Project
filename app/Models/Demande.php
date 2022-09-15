<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $table = 'demandes';
    protected $fillable = ['cv_path', 'motivation_path', 'recommendation_path', 'carte_etudiant_path', 'etudiant_id', 'entreprise_id'];

    public function etudiants()
    {
        return $this->belongsTo(User::class,'etudiant_id');
    }
    public function entreprises(){
        return $this->belongsTo(User::class,'entreprise_id');
    }
}
