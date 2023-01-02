<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',
        'codigo'
    ];

    public function regalias(){
        return $this->belongsToMany(Regalia::class, 'regalia_tarifas','tarifa_id','regalia_id');
    }

}
