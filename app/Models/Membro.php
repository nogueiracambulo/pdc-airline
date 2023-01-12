<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    use HasFactory;
    protected $fillable=[
        'numero_membro',
        'titulo',
        'idioma_preferencia',
        'milhas',
        'user_id',
        'preferencia_id'
    ];


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function preferencia(){
        return $this->belongsTo(Preferencia::class,'preferencia_id');
    }
}
