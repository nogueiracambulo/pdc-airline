<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabine extends Model
{
    use HasFactory;
    protected $fillable=[
        'capacidade',
        'aeronave_id',
        'tarifa_id'
    ];

    public function tarifa(){
        return $this->belongsTo(Tarifa::class, 'tarifa_id');
    }

  
}
