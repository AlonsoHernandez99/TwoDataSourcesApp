<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProceso extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'tipos_procesos';
    protected $fillable = ['nombre,horas'];
    public $timestamps = false;

    public function estudiantes(){

        return $this->belongsToMany(Estudiante::class,'procesos_estudiantes','proceso_id','estudiante_id')->withPivot('estado');
    }
}
