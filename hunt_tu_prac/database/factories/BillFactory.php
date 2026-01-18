<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bill_number' => $this->faker->unique()->numerify('BILL-#####'),
            'bill_date' => $this->faker->date(),
            'amount' => $this->faker->randomFloat(2, 100, 1000),
            'ceconomic_code' => $this->faker->randomElement(['101', '102', '103']),
            'description' => $this->faker->sentence(),
            'status' => $this->faker->randomElement(['pending', 'paid', 'overdue']),
        ];
    }
}
