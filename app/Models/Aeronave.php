<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aeronave extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'matricula',
        'marca',
        'modelo',
        'foto'
    ];

    public function cabines(){
        return $this->hasMany(Cabine::class, 'aeronave_id');
    }
}
