<?php

namespace App\Http\Controllers;

use App\Models\FACT_METODOS_PAGO;
use App\Models\FACT_PERIODO;
use App\Models\FACT_SUScripcion;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    //
    public function obtenerMetodos()
    {
        return FACT_METODOS_PAGO::all();
    }
    public function obtenerPeriodo()
    {
        return FACT_PERIODO::all();
    }
    public function obtenerSuscripcion()
    {
        return FACT_SUScripcion::all();
    }
}
