<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectType = [
            'progetto Singolo',
            'progetto di Gruppo',
            'progetto Importante',
            'progetto Semplice',
            'progetto Medio',
        ];

        foreach ($projectType as $typeStatics) {

            $type = new Type();

            $type->name = $typeStatics; // tecnologie usate

            $type->save();
        }
    }
}
