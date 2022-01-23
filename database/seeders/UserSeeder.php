<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        collect(range(1, 10))->each(function ($id) {
            User::factory()->create(['user_name' => "student_{$id}"])->assignRole(Role::ROLE_STUDENT);
        });

        collect(range(1, 20))->each(function ($id) {
            User::factory()->create(['user_name' => "teacher_{$id}"])->assignRole(Role::ROLE_TEACHER);
        });

        collect(range(1, 2))->each(function ($id) {
            User::factory()->create(['user_name' => "admin_{$id}"])->assignRole(Role::ROLE_ADMIN);
        });
    }
}
