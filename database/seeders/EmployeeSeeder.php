<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'user_id' => 1,
            'company_id' => 1,
            'first_name' => 'Dawg',
            'last_name' => 'White',
            'role' => 'Cleaner',
            'staff_number' => '#123456',
            'pay_rate' => 'weekly',
            'phone_number' => '+278990987',
            'address' => 'just another address street',
            'zip_code' => '509876',
        ]);

        Employee::create([
            'user_id' => 1,
            'company_id' => 1,
            'first_name' => 'Ugwa',
            'last_name' => 'Ebere',
            'role' => 'Cashier',
            'staff_number' => '#123477',
            'pay_rate' => 'weekly',
            'phone_number' => '+278998790',
            'address' => 'just another address street',
            'zip_code' => '509877',
        ]);
    }
}
