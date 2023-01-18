<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $fillable=[
        'quantidade_passageiro',
        'dataIda',
        'dataRegresso',
        'origem_id',
        'destino_id',
    ];

    public function bilhetes(){
        return $this->belongsToMany(Bilhete::class, 'reserva_bilhetes','reserva_id','bilhete_id');
    }

    public function voos(){
        return $this->belongsToMany(Voo::class, 'reserva_voos','reserva_id','voo_id');
    }

    public function origem(){
        return $this->belongsTo(Origem::class, 'origem_id');
    }
    public function destino(){
        return $this->belongsTo(Destino::class, 'destino_id');
    }
}

