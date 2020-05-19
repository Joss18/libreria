<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    
//Query Scope

public function scopeTitulo($query, $titulo){
    if($titulo)
    return $query->where('titulo', 'LIKE', "%$titulo%");
}

public function scopeDirector($query, $director){
    if($director)
    return $query->where('director', 'LIKE', "%$director%");
}

public function scopeGenero($query, $genero){
    if($genero)
    return $query->where('genero', 'LIKE', "%$genero%");
}

}