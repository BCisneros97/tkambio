<?php

namespace App\Services;

use App\Models\TipoCambio;

class TipoCambioService
{

  public function getAll()
  {
    $listado = TipoCambio::latest()->get();

    return $listado;
  }

  public function create($tipoCambioFields)
  {
    $tipoCambio = TipoCambio::create($tipoCambioFields);

    return $tipoCambio;
  }

  public function findById($id)
  {
    $tipoCambio = TipoCambio::find($id);

    return $tipoCambio;
  }

  public function update($id, $tipoCambioFields)
  {
    $tipoCambio = $this->findById($id);
    $tipoCambio->update($tipoCambioFields);

    return $tipoCambio;
  }

  public function deleteById($id)
  {
    $tipoCambio = $this->findById($id);
    $deleted = $tipoCambio->delete();

    return $deleted;
  }

  public function getLatest()
  {
    $latest = TipoCambio::select(['tc_venta', 'tc_compra'])->latest()->first();

    return $latest;
  }
}
