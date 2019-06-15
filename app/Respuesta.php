<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table = 'respuestas';
    public $timestamps = false;

    public function encuesta(){
    	return $this->belongsTo('App\Encuesta','id_enc');
    }
}
