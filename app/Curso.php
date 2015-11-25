<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "cursos";

    protected $fillable = ['name'];

    //una categoria puede tener muchos articulos
    //relacion uno a muchos
    //se define la función en plural
    public function estudiantes(){
    	return $this->hasMany('App\Estudiante');
    }
}
