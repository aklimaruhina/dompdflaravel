<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array

     */
    protected $model = Customer::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'salary' => $this->faker->numberBetween(10000, 200000),
            'department' => $this->faker->randomElement(array('accounting', 'marketing', 'sales', 'quality')),
        ];
    }
}
