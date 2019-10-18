<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aspirante extends Model
{
    protected $table = 'aspirantes';
    protected $fillable = [
        'codigo',
        'nombres',
        'apellidos',
        'articulado',
        'telefono',
        'nota1',
        'nota2',
        'aprobado',
        'fecha_registro',
        'id_curso',
        'password',
        'id_carrera',
        'tipo_ingreso'

    ];
    public function usuario()
    {
        return $this->hasOne(Alumno::class);
    }
}
