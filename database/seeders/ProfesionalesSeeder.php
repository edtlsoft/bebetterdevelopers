<?php

namespace Database\Seeders;

use App\Models\Profesion;
use App\Models\Municipio;
use App\Models\Profesional;
use Illuminate\Database\Seeder;

class ProfesionalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profesional::create([
            'nombre' => 'Maria Ramirez',
            'cedula' => 'V14234569',
            'fecha_nacimiento' => '1978-07-04',
            'direccion' => 'Santa Teresa',
            'sexo' => 'F',
            'profesion_id' => Profesion::where('nombre', 'Docente')->first()->id,
            'municipio_id' => Municipio::where('nombre', 'San Cristobal')->first()->id,
        ])->vehiculo()->create([
            'tipo' => 'Camioneta',
            'marca' => 'Ford',
            'ano' => '2005',
        ]);

        Profesional::create([
            'nombre' => 'Carlos Castillo',
            'cedula' => '15367789',
            'fecha_nacimiento' => '1979-04-23',
            'direccion' => 'San Cristobal',
            'telefono' => '0276-3435566',
            'sexo' => 'M',
            'profesion_id' => Profesion::where('nombre', 'Ingeniero')->first()->id,
            'municipio_id' => Municipio::where('nombre', 'San Cristobal')->first()->id,
        ])->vehiculo()->create([
            'tipo' => 'Camioneta',
            'marca' => 'Ford',
            'ano' => '2005',
        ]);
    }
}
