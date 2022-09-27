<?php

namespace App\Models;

use App\Models\Post;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'matricule',
        'password',
        'role',
        'age',
        'genre',
        'filiere',
        'specialite',
        'niveau',
        'telephone',
        'adresse',
        'facebook_url',
        'linkedin_url',
        'instagrame_url',
        'twitter_url',
        'description',
        'logo_path',
        'card_path',
        'site_url',
        'ville',
        'cv_path'
    ];

    public function posts()
    {
        if (auth()->user()->role == 'candidat') {
            return $this->belongsToMany(Post::class);
        }
        return $this->hasMany(Post::class);
    }
    public function faireDemande(){
        return $this->hasMany(Demande::class,'etudiant_id');
    }

    public function recevoirDemande(){
        return $this->hasMany(Demande::class,'entreprise_id');
    }



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
