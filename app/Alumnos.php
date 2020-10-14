<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $tabla='alumnos';
    protected $fillable=['nombre', 'apellidos', 'edad', 'grado', 'grupo'];
    protected $guarded=['id'];
    public $timestamps = false;

}
