<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passageiro extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'sobrenome',
        'genero',
        'telefone',
        'email',
        'dataNascimento'
    ];
}
