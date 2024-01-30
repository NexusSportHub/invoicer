<?php

namespace App\Http\Controllers;

use App\Models\FACT_METODOS_PAGO;
use App\Models\FACT_PERIODO;
use App\Models\FACT_SUScripcion;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function metodosbyDate(Request $request)
    {
        $xmetodopago = $request->input('X_METODOPAGO');
        $dmetodopago = $request->input('D_METODOPAGO');
        $query = FACT_METODOS_PAGO::query();

        if ($xmetodopago) {
            $query->where('X_METODOPAGO', $xmetodopago);
        }
        if ($dmetodopago) {
            $query->where('D_METODOPAGO', $dmetodopago);
        }
        $metodos = $query->get();

        if ($metodos->isNotEmpty()) {
            return response()->json($metodos);
        } else {
            return response()->json(['message' => 'No se encontraron metodos con los parámetros proporcionados'], 404);
        }
    }


    public function obtenerMetodos()
    {
        return FACT_METODOS_PAGO::all();
    }
    public function obtenerPeriodo()
    {
        return FACT_PERIODO::all();
    }
    public function periodosByDate(Request $request)
    {
        $xperiodo = $request->input('X_PERIODO');
        $fini = $request->input('F_INI');
        $ffin = $request->input('F_FIN');
        $nimportepeticion = $request->input('N_IMPORTE_PETICION');

        $susxsuscripcion = $request->input('SUS_X_SUSCRIPCION');

        $query = FACT_PERIODO::query();

        if ($xperiodo) {
            $query->where('X_PERIODO', $xperiodo);
        }
        if ($fini) {
            $query->where('F_INI', $fini);
        }
        if ($ffin) {
            $query->where('F_FIN', $ffin);
        }
        if ($susxsuscripcion) {
            $query->where('SUS_X_SUSCRIPCION', $susxsuscripcion);
        }
        if ($nimportepeticion) {


            $query->whereRaw("CAST(N_IMPORTE_PETICION AS DECIMAL(10,3)) = $nimportepeticion");
        }
        $periodos = $query->get();
        if ($periodos->isNotEmpty()) {
            return response()->json($periodos);
        } else {
            return response()->json(['message' => 'No se encontraron periodos con los parámetros proporcionados'], 404);
        }


    }
    public function obtenerSuscripcion()
    {
        return FACT_SUScripcion::all();
    }

    public function suscriptionByDate(Request $request)
    {
        $xsuscripcion = $request->input('X_SUSCRIPCION');
        $dsuscripcion = $request->input('D_SUSCRIPCION');
        $etxmetpago = $request->input('MET_X_METPAGO');
        $nporcentajedescuento = $request->input('N_PORCENTAJE_DESCUENTO');
        $nlimiteminimopeticiones = $request->input('N_LIMITE_MINIMO_PETICIONES');
        $query = FACT_SUScripcion::query();

        if ($xsuscripcion) {
            $query->where('X_SUSCRIPCION', $xsuscripcion);
        }
        if ($dsuscripcion) {
            $query->where('D_SUSCRIPCION', $dsuscripcion);
        }
        if ($etxmetpago) {
            $query->where('MET_X_METPAGO', $etxmetpago);
        }
        if ($nporcentajedescuento) {
            $query->where('N_PORCENTAJE_DESCUENTO', $nporcentajedescuento);
        }
        if ($nlimiteminimopeticiones) {
            $query->where('N_LIMITE_MINIMO_PETICIONES', $nlimiteminimopeticiones);
        }
        $periodos = $query->get();

        if ($periodos->isNotEmpty()) {
            return response()->json($periodos);
        } else {
            return response()->json(['message' => 'No se encontraron periodos con los parámetros proporcionados'], 404);
        }
    }
}
