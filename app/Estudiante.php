<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'estudiantes';
    protected $fillable = [
        'nombre',
        'fechaNac',
        'genero',
        'telefono',
        'codCarnet',
        'direccion',
        'estado'
    ];
    public $timestamps = false;
    public function proceso(){

        return $this->belongsToMany(TipoProceso::class, 'procesos_estudiantes','estudiante_id','proceso_id')->withPivot('estado');
    }
}
