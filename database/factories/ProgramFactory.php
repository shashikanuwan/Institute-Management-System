<?php

namespace Database\Factories;

use App\Models\Grade;
use App\Models\Program;
use App\Models\Role;
use App\Models\Subject;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramFactory extends Factory
{
    protected $model = Program::class;

    public function definition()
    {
        $startDate = Carbon::parse($this->faker->dateTimeBetween('-9 months', '+2 months'));

        return [
            'start_date_time' => $startDate,
            'user_id' => User::role(Role::ROLE_TEACHER)->inRandomOrder()->first()->id,
            'grade_id' => Grade::query()->inRandomOrder()->first()->id,
            'subject_id' => Subject::query()->inRandomOrder()->first()->id,
        ];
    }
}
