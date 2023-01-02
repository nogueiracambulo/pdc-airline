<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aviao extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'matricula',
        'marca',
        'modelo',
        'capacidade'
    ];
          
}
