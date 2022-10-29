<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome',
        'sigla',
        'nome_professor',
        'turma_id',
        'criador_id'
    ];

    public function turma(){
        return $this->belongsTo(Turma::class, 'turma_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'criador_id', 'id');
    }

}
