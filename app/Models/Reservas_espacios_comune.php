<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservas_espacios_comune extends Model
{
    static $rules = [
		'residente_id' => 'required',
        'espacio_comun_id' => 'required',
    ];
    
    use HasFactory;
    protected $fillable = ['residente_id','espacio_comun_id'];
}
