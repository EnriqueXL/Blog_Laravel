<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    /* Metodo, función */
    public function saludo()
    {
        /* Retorna la vista */
        return view ('saludo1');
    }
}
