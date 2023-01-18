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
        'passageiro_id' 
    ];


    public function tarifa(){
        return $this->belongsTo(Tarifa::class, 'tarifa_id');
    }
    public function titular(){
        return $this->belongsTo(Passageiro::class, 'passageiro_id');
    }
}
