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
        $techs = [
            'PHP, Laravel, MySQL',
            'JavaScript, Vue.js, TailwindCSS',
            'HTML, CSS, Bootstrap',
            'React, Node.js, MongoDB',
            'Python, Django, PostgreSQL',
            'Java, Spring Boot, Thymeleaf'
        ];


        $tipologie = Type::pluck('id');

        for ($i = 0; $i < 10; $i++) {
            $portfolio = new Portfolio();

            $portfolio->titolo = $faker->sentence(3); // titolo breve
            $portfolio->descrizione = $faker->paragraph(4); // descrizione
            $portfolio->tecnologie = $faker->randomElement($techs); // tecnologie usate
            $portfolio->type_id = $faker->randomElement($tipologie) ; // categoria di progetto
            $portfolio->link = $faker->url(); // link al progetto

            $portfolio->save();
        }
    }
}
