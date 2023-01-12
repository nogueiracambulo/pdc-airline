<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;
    protected $fillable=[
        'titulo',
        'descricao',
        'imagem',
        'user_id'
    ];

    public function criador(){
        return $this->belongsTo(User::class, 'user_id');
    }


}
