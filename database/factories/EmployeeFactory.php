<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name'=>$this->faker->name,
            'last_name'=>$this->faker->name,
            'job'=>$this->faker->jobTitle,
            'phone'=>$this->faker->phoneNumber,
            'address'=>$this->faker->address,
            'age'=>$this->faker->numberBetween(1,100),
        ];
    }
}
