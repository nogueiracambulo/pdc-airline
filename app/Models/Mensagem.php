<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;
    protected $table="mensagens";

    protected $casts = ['items' => 'array'];

    protected $dates =['date'];

    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    public function Garimpo(){
        return $this->belongsTo('App\Models\Garimpo');
    }
}
