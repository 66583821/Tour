<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Site::create([
            'nom'=> 'vieille mosquée',
            'photo' => 'mosque.png',
            'description' => "c\est une vieille mosquée'",
            'video'=> 'mosque.mp4',
            'localisation'=> 'secteur 2',
            'category_id'=> 1
        ]);

        Site::create([
            'nom'=> 'Musée communal',
            'photo' => 'Musée.png',
            'description' => "Beau musée avec de nombreux patrimoine'",
            'video'=> 'Musée.mp4',
            'localisation'=> 'secteur 1',
            'category_id'=> 2
        ]);


    }
}
