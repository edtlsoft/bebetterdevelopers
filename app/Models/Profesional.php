<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
    use HasFactory;

    protected $table = 'profesionales';

    protected $fillable = ['nombre', 'cedula', 'fecha_nacimiento', 'direccion', 'telefono', 'sexo', 'profesion_id', 'municipio_id'];

    public function profesion()
    {
        return $this->belongsTo(Profesion::class);
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

    public function vehiculo()
    {
        return $this->hasOne(Vehiculo::class, 'profesional_id');
    }
}
