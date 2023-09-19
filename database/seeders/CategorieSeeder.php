<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Lieux de culte','Musée','village','marigot','Cinema','Restaurant','Hotel','agence de voyage','foret'];
        foreach ($categories as $categorie) {
            Categorie::create([
                'nom' => $categorie,
                'created_at' =>now(),
                'updated_at' =>now(),
            
            ]);
    }
    }
}
