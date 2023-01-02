<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voo extends Model
{
    use HasFactory;
    protected $fillable=[
        'numero_voo',
        'dataPartida',
        'horaCheckin',
        'horaEmbarque',
        'horaPartida',
        'horaChegada',
        'percurso_id',
        'aviao_id',
        'administrativo_id'
    ];

    public function percurso(){
        return $this->belongsTo(Percurso::class, 'percurso_id');
    }

    public function aviao(){
        return $this->belongsTo(Aviao::class, 'aviao_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'administrativo_id');
    }
}
