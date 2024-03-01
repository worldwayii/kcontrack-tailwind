<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Scheduler>
 */
class SchedulerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'company_id' => 1,
            'employee_id' => rand(1, 2),
            'start_at' =>  now()->addDays(rand(1, 7))->subHours(5),
            'end_at' => now()->addDays(rand(1, 7))->addHours(2),
            'role' => 'Cleaner',
            'pay_rate' => 'weekly',
            'break' => '30',
            'shift_note' => fake()->text(50),
        ];
    }
}
