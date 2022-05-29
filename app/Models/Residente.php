<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residente extends Model
{
    static $rules = [
		'nombreResidentes' => 'required',
		'telefono' => 'required',
		'condominio_id' => 'required',
    ];
    
    use HasFactory;
    protected $fillable = ['nombreResidentes','telefono','condominio_id'];
}
