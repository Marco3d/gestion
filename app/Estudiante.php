<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = "estudiantes";
    
    protected $fillable = ['name','curso_id', ];

     public function curso(){
     	return $this->belongsTo('App\Curso');
     }


}
