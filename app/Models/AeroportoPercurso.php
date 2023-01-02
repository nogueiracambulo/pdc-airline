<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AeroportoPercurso extends Model
{
    use HasFactory;
    protected $fillable=[
        'aeroporto_id',
        'percurso_id'
    ];

}
