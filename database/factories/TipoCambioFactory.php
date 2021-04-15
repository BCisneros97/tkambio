<?php

namespace Database\Factories;

use App\Models\TipoCambio;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipoCambioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TipoCambio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $randomNumber = $this->faker->numberBetween(3500, 3800) / 1000.0;
        $randomDate = $this->faker->dateTimeThisMonth();

        return [
            'tc_venta' => $randomNumber,
            'tc_compra' => $randomNumber + 0.01,
            'created_at' => $randomDate,
            'updated_at' => $randomDate
        ];
    }
}
