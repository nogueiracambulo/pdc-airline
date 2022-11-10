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
        'disciplina_id',
        'criador_id',
        'tipo'
    ];

    public function disciplina(){
        return $this->belongsTo(Disciplina::class, 'disciplina_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'criador_id', 'id');
    }

}
