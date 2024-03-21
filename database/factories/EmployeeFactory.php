<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\User;
use App\Models\Company;
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
    public function definition(): array
    {
        $faker = fake();
        return [

        'uuid' => Str::uuid(),
        'user_id' => function () {
            return User::factory()->create()->id;
        },
        'company_id' => function () {
            return Company::factory()->create(['user_id' => User::factory()->create()->id])->id;
        },
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'role' => $faker->randomElement(['Manager', 'Employee', 'Supervisor']),
        'staff_number' => $faker->unique()->numberBetween(1000, 9999),
        'pay_rate' => $faker->randomFloat(2, 10, 100),
        'phone_number' => $faker->phoneNumber(),
        'address' => $faker->address(),
        'zip_code' => $faker->postcode(),
        ];
    }
}
