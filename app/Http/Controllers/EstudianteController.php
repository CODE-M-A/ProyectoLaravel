<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function index()
    {
        //materia.index es la ruta
        $materias=Materia::all();
        return view('estudiante',compact('estudiantes'));
    }
}
