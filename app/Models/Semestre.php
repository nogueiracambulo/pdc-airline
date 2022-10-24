<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao',
        'data_inicio',
        'data_termino',
        'anoLectivo_id'
    ];

    public function anoLectivo(){
        return $this->belongsTo(ano_lectivo::class, 'anoLectivo_id', 'id');
    }
}
