<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ano_lectivo extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao',
        'data_inicio',
        'data_termino',
        'user_id',
        'selecionado'
    ];


    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
