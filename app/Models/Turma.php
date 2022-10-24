<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao',
        'semestre_id'
    ];

    public function semestre(){
        return $this->belongsTo(Semestre::class, 'semestre_id', 'id');
    }
}
