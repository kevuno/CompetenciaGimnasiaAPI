<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class CompetenciaGeneral extends Model
{
    use CrudTrait;
    /**
     * Obtener todas las gimnastas de esta competencia
     */
    public function gimnastas(){
        return $this->hasMany('App\Gimnasta');
    }
}
