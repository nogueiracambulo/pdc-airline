<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'ficheiro',
        'disciplina_id'
    ];

    public function disciplina(){
        return $this->belongsTo(Disciplina::class, 'disciplina_id', 'id');
    }
}
