<?php

namespace Database\Seeders;

use App\Models\Manga;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class MangaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        

        for ($i = 0; $i < 10; $i++) {

            $newManga = new Manga();

            $newManga->titolo = $faker->words(3, true);
            $newManga->autore = $faker->name;
            $newManga->volumi = $faker->numberBetween(1, 50);
            $newManga->data_pubblicazione = $faker->date();

            $newManga->save();
            
        }
    }
}
