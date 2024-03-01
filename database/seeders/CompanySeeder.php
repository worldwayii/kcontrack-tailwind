<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'user_id' => 1,
            'name' => 'Testerco',
            'first_name' => 'Garry',
            'last_name' => 'Human',
            'staff_size' => 6,
            'description' => 'all things descriptions',
            'category' => 'Insurance',
            'phone_number' => '+0926790965',
            'address' => 'just any address avenue',
            'zip_code' => '098788',
            'logo' => 'no_image',
        ]);
    }
}
