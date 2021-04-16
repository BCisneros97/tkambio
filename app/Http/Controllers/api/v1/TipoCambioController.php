<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\TipoCambioService;

class TipoCambioController extends Controller
{
    private $tipoCambioService;

    public function __construct(TipoCambioService $service)
    {
        $this->tipoCambioService = $service;
        $this->middleware('admin')->except(['index', 'getTcActual']);
    }

    public function index()
    {
        $listadoTC = $this->tipoCambioService->getAll();

        return response()->json($listadoTC);
    }

    public function store(Request $request)
    {
        $tipoCambio = $this->tipoCambioService->create(
            $request->only(['tc_compra', 'tc_venta'])
        );

        return response()->json($tipoCambio);
    }

    public function show($id)
    {
        $tipoCambio = $this->tipoCambioService->findById($id);
        return response()->json($tipoCambio);
    }

    public function update(Request $request, $id)
    {
        $tipoCambio = $this->tipoCambioService->update($id,
            $request->only(['tc_compra', 'tc_venta'])
        );
        
        return response()->json($tipoCambio);
    }

    public function destroy(Request $request, $id)
    {
        $deleted = $this->tipoCambioService->deleteById($id);

        return response()->json(compact('deleted'));
    }

    public function getTcActual()
    {
        $tc = $this->tipoCambioService->getLatest();

        return response()->json($tc);
    }
}
