<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $tipologie = Type::pluck('id');

        for ($i = 0; $i < 10; $i++) {
            $portfolio = new Portfolio();

            $portfolio->titolo = $faker->sentence(3); // titolo breve
            $portfolio->descrizione = $faker->paragraph(4); // descrizione
            $portfolio->type_id = $faker->randomElement($tipologie) ; // categoria di progetto
            $portfolio->link = $faker->url(); // link al progetto

            $portfolio->save();
        }
    }
}
