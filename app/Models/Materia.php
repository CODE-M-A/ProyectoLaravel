<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    use HasFactory;
    protected $primaryKey = 'id_materia';
    protected $table = 'materias';
    protected $fillable = [
        'nombre_materia',
        
       
    ];
}
