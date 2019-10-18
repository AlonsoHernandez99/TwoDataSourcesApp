<?php

use Illuminate\Database\Seeder;
use App\Alumno;
use Carbon\Carbon;
class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::truncate();

       for ($i=5; $i < 20 ; $i++) { 
            $a = new Alumno();
            $a->id_aspirante = $i;
            $a->fecha_nac = Carbon::Now();
            $a->foto = "FEO".$i.".JPG";
            $a->correo = "alumno".$i."@gmail.com";
            $a->password = bcrypt('123');
            $a->genero = "M";
            $a->direccion = "Chalate";
            $a->celular = "79896521";
            $a->id_carrera = 1;
            $a->save();
       }
    }
}
