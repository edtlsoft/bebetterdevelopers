<?php

namespace Database\Seeders;

use App\Models\Profesion;
use Illuminate\Database\Seeder;

class ProfesionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesion::create(['nombre' => 'Docente']);
        Profesion::create(['nombre' => 'Ingeniero']);
        Profesion::create(['nombre' => 'Publicista']);
        Profesion::create(['nombre' => 'Medico']);
        Profesion::create(['nombre' => 'Abogado']);
        Profesion::create(['nombre' => 'Programador']);
    }
}
