<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'aeroporto_id'
    ];

    public function aeroporto(){
        return $this->belongsTo(Aeroporto::class, 'aeroporto_id');
    }
}
