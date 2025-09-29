<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TecnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                $projectTecnologies = [
            'HTML',
            'CSS',
            'JS',
            'java',
            'Bopotstrap',
            'Laravel',

        ];

        foreach ($projectTecnologies as $projectTec) {

            $tecnology = new Tecnology();

            $tecnology->tecnologia = $projectTec; // tecnologie usate

            $tecnology->save();
        }
    }
}
