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
        TipoCambio::factory()->count(20)->create();
    }
}
