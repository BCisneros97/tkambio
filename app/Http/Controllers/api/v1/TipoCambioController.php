<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TipoCambio;

class TipoCambioController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except(['index', 'getTcActual']);
    }

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
