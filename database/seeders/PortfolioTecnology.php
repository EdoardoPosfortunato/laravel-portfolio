<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PortfolioTecnology extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $tecnologieIds = Tecnology::pluck('id')->toArray();

        // per ogni progetto
        foreach (Portfolio::all() as $portfolio) {

            // scelgo da 1 a 3 tecnologie random
            $idsRandom = $faker->randomElements($tecnologieIds, rand(1, 3));

            // le associo al portfolio
            $portfolio->tecnologies()->attach($idsRandom);

        }

        $portfolio->save();

    }
}
