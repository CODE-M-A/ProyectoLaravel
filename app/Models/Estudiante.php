<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_estudiante';
    protected $foreingKey = 'id_materia';
    protected $table = 'materias';
    protected $fillable = [
        'nombre',
        'edad',
        'id_materia',
    ];

    public function materias()
    {
        return $this->belongsTo('App/models/Materia', 'id_materia', 'id_materia');
    }
}
