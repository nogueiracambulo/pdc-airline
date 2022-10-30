<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao',
        'anoLectivo_id',
        'criador_id'
    ];

    public function ano_lectivo(){
        return $this->belongsTo(ano_lectivo::class, 'anoLectivo_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'criador_id', 'id');
    }

}
