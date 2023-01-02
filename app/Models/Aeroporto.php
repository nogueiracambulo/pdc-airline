<?php

namespace App\Models;

use App\Models\Aeroporto as ModelsAeroporto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aeroporto extends Model
{
    use HasFactory;
    protected $fillable=[
        'cidade',
        'codigoIATA'
        
    ];
}
