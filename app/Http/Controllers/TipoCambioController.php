<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoCambio;

class TipoCambioController extends Controller
{
    public function index()
    {
        $listadoTC = TipoCambio::latest()->get();

        return response()->json($listadoTC);
    }

    public function store(Request $request)
    {
        $tipoCambio = TipoCambio::create(
            $request->only(['tc_compra', 'tc_venta'])
        );

        return response()->json($tipoCambio);
    }

    public function show(TipoCambio $tipoCambio)
    {
        return response()->json($tipoCambio);
    }

    public function update(Request $request, TipoCambio $tipoCambio)
    {
        $tipoCambio->update(
            $request->only(['tc_compra', 'tc_venta'])
        );
        
        return response()->json($tipoCambio);
    }

    public function destroy(Request $request, TipoCambio $tipoCambio)
    {
        $deleted = $tipoCambio->delete();

        return response()->json(compact('deleted'));
    }

    public function getTcActual()
    {
        $tc = TipoCambio::select(['tc_venta', 'tc_compra'])->latest()->first();

        return response()->json($tc);
    }
}
