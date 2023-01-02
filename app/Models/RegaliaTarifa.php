<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegaliaTarifa extends Model
{
    use HasFactory;
    protected $fillable=[
        'regalia_id',
        'tarifa_id'
    ];
}
