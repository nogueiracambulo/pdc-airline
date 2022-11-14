<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garimpo extends Model
{
    use HasFactory;

    protected $table="garimpos";

    protected $casts = ['items' => 'array'];

    protected $dates =['date'];



    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    // public function garimpos(){
    //     return $this->hasMany('App\Models\Garimpo');
    // }

    public function mensagens(){
        return $this->hasMany('App\Models\Mensagem');
    }
}
