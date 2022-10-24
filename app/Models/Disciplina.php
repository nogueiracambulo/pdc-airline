<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome',
        'nome_professor',
        'turma_id'
    ];

    public function turma(){
        return $this->belongsTo(Turma::class, 'turma_id', 'id');
    }
}
