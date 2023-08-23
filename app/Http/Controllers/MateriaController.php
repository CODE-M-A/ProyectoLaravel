<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;

class MateriaController extends Controller
{
    public function index()
    {
        //materia.index es la ruta
        $materias=Materia::all();
        return view('materia',compact('materias'));
    }
}
