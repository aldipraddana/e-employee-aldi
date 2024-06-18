<?php

namespace Database\Factories;

use App\Models\Employee;
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

    protected $model = Employee::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'place_of_birth' => $this->faker->country(),
            'date_of_birth' => $this->faker->date('Y-m-d'),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'work_entry_date' => $this->faker->date('Y-m-d'),
            'work_end_date' => $this->faker->date('Y-m-d'),
            'job' => "Pekerjaan " . $this->faker->numberBetween(1, 4),
            'workplace' => "Kantor " . $this->faker->numberBetween(1, 4),
            'created_by' => 1,
        ];
    }
}
