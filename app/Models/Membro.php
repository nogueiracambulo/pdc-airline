<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembroPDC extends Model
{
    use HasFactory;
    protected $fillable=[
        'numero_membro',
        'preferencia_viagem',
        'morada',
        'milha',
        'pais',
        'cidade',
        'refeicao',
        'tipo_lugar',
        'user_id'
    ];


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
