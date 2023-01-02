<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable=[
        'primeiro_nome',
        'nome_meio',
        'ultimo_nome',
        'genero',
        'telefone',
        'email',
        'dataNascimento'
    ];

    public function compras(){
        return $this->hasMany(Compra::class,'cliente_id');
    }
}
