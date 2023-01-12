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
        'horaPartida',
        'horaCheckin',
        'horaEmbarque',
        'dataChegada',
        'horaChegada',
        'percurso_id',
        'aeronave_id',
        'administrativo_id'
    ];

    public function percurso(){
        return $this->belongsTo(Percurso::class, 'percurso_id');
    }

    public function aeronave(){
        return $this->belongsTo(Aeronave::class, 'aeronave_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'administrativo_id');
    }

    public function tarifas(){
        return $this->belongsToMany(Tarifa::class, 'voos_tarifas','voo_id','tarifa_id');
    }


}
