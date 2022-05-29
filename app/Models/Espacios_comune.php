<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espacios_comune extends Model
{
    static $rules = [
		'nombreEspacioComun' => 'required',
        'condominio_id' => 'required',
    ];
    
    use HasFactory;
    protected $fillable = ['nombreEspacioComun','condominio_id'];
}
