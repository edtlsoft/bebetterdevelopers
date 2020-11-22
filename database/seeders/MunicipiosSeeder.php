<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Seeder;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipio::create(['nombre' => 'San Cristobal']);
        Municipio::create(['nombre' => 'Libertad']);
        Municipio::create(['nombre' => 'Fernandez Feo']);
        Municipio::create(['nombre' => 'Cardenas']);
        Municipio::create(['nombre' => 'Libertador']);
        Municipio::create(['nombre' => 'Junin']);
        Municipio::create(['nombre' => 'Garcia de Hevia']);
        Municipio::create(['nombre' => 'Bolivar']);
    }
}
