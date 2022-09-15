<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('role');
            $table->string('age')->nullable();
            $table->string('genre')->nullable();
            $table->string('filiere_secteur')->nullable();
            $table->string('specialite')->nullable();
            $table->string('niveau_taille')->nullable();
            $table->string('telephone')->nullable(); 
            $table->string('adresse')->nullable();
            $table->string('ville')->nullable();
            $table->string('site_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('instagrame_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->longText('description')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('carte_etudiant_path')->nullable();
            $table->string('cv_path')->nullable();
            $table->string('motivation_path')->nullable();
            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
