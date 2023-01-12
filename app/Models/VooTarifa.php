<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VooTarifa extends Model
{
    use HasFactory;
    protected $fillable=[
        'tarifa_id',
        'voo_id'
    ];
}
