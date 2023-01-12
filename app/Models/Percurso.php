<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Percurso extends Model
{
    use HasFactory;

  
    public function aeroportos(){
        return $this->belongsToMany(Aeroporto::class, 'aeroporto_percursos','percurso_id','aeroporto_id');
    }
}
  