<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        // \App\Models\Post::factory(3)->create();

        \App\Models\User::factory()->create([
            'name' => 'HOUNSOU Mariane',
            'email' => 'mari@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => 'candidat',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Benin Terminale',
            'email' => 'Bt@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => 'recruteur',
        ]);
        \App\Models\Category::factory()->create([
            'title' => 'Informatique,Télécom,Internet',
            'description' => "
            De la conception de produits innovants à la maintenance en passant par la gestion des réseaux et la cybersécurité, les métiers de l’informatique, du numérique et du web sont nombreux. Citons quelques métiers phares : Ingénieur.e réseaux, ingénieur.e cybersécurité, développeur.euse, technicien.ne en télécommunications.",
        ]);
        \App\Models\Category::factory()->create([
            'title' => 'Banque,Assurance,Finance',
            'description' => "
            Le secteur financier est un secteur économique qui regroupe toutes les activités qui se rapportent à la finance. Il comprend principalement, le secteur bancaire et celui de l'assurance. Découvrez ci-dessous les métiers liés à la banque et à la finance",
        ]);
        \App\Models\Category::factory()->create([
            'title' => 'Transport & Logistique',
            'description' => "Le secteur des transports et logistique est tres porteur au Benin aujourd'hui",
        ]);
        \App\Models\Post::factory()->create([
            'title' => 'Stage en Banque,Assurance,Finance',
            'description' => "Le secteur financier est un secteur économique qui regroupe toutes les activités qui se rapportent à la finance. Il comprend principalement, le secteur bancaire et celui de l'assurance. Découvrez ci-dessous les métiers liés à la banque et à la finance",
            'category_id' => '2',
            'user_id' => '2',
        ]);
    }
}
