<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Spatie\Permission\Models\Role;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Check for adam
        if (!DB::table('users')->where('email', 'blue@gmail.com')->first()) {

            // Create adam
            DB::table('users')->insert([
                [
                    'uuid' => (string) Str::uuid(),
                    'email' => 'chuma@gmail.com',
                    'email_verified_at' => Carbon::now()->toDateTimeString(),
                    'password' => bcrypt('password'),
                    'created_at' => Carbon::now()->toDateTimeString(),
                    'updated_at' => Carbon::now()->toDateTimeString(),
                ],
            ]);

            // Retrieve adam
            $company =  User::where('email', 'chuma@gmail.com')->first();

            if ($company) {

                // Retrieve specific application role
                $companyRole = Role::where('name', 'company')->first();

                // Assign the role to adam
                $company->assignRole($companyRole);

                // Create a company for adam
                DB::table('companies')->insert([
                    [
                        'uuid' => (string) Str::uuid(),
                        'name' => fake()->name(),
                        'first_name' => fake()->firstName(),
                        'last_name' => fake()->firstName(),
                        'staff_size' => 5,
                        'description' => fake()->text(),
                        'category' => 1,
                        'zip_code' => 'AX1 0TD',
                        'address' => fake()->address(),
                        'user_id' => $company->id,
                        'created_at' => Carbon::now()->toDateTimeString(),
                        'updated_at' => Carbon::now()->toDateTimeString(),
                    ],
                ]);

            }
        }

    }
}
