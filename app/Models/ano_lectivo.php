<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ano_lectivo extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao',
        'data_inicio',
        'data_termino',
        'selecionado',
        'criador_id'

    ];


    public function user(){
        return $this->belongsTo(User::class, 'criador_id', 'id');
    }

}
