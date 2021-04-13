<?php

namespace Database\Seeders;

use App\Models\TipoCambio;
use Illuminate\Database\Seeder;

class TipoCambioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoCambio::create([
            'tc_venta' => 3.711,
            'tc_compra' => 3.723
        ]);
        TipoCambio::create([
            'tc_venta' => 3.721,
            'tc_compra' => 3.733
        ]);
        TipoCambio::create([
            'tc_venta' => 3.611,
            'tc_compra' => 3.623
        ]);
        TipoCambio::create([
            'tc_venta' => 3.811,
            'tc_compra' => 3.823
        ]);
    }
}
