<?php

namespace Database\Factories;

use App\Models\Program;
use App\Models\Role;
use App\Models\Subscribe;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscribeFactory extends Factory
{
    protected $model = Subscribe::class;

    public function definition()
    {
        return [
            'user_id' => User::role(Role::ROLE_STUDENT)->inRandomOrder()->first()->id,
            'program_id' => Program::query()->inRandomOrder()->first()->id,
        ];
    }
}
