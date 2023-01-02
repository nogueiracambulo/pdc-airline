<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilhete extends Model
{
    use HasFactory;
    protected $fillable=[
        'estado',
        'referencia',
        'tipo',
        'tarifa_id',
        'origem_id',
        'destino_id'
    ];

    public function origem(){
        return $this->belongsTo(Origem::class, 'origem_id');
    }
    public function destino(){
        return $this->belongsTo(Destino::class, 'destino_id');
    }
    public function tarifa(){
        return $this->belongsTo(Tarifa::class, 'tarifa_id');
    }
}
