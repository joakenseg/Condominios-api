<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condominio extends Model
{

    static $rules = [
		'nombreTorre' => 'required',
    ];
    
    use HasFactory;
    protected $fillable = ['nombreTorre'];
}
