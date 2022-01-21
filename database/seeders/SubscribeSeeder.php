<?php

namespace Database\Seeders;

use App\Models\Subscribe;
use Illuminate\Database\Seeder;

class SubscribeSeeder extends Seeder
{
    public function run()
    {
        Subscribe::factory(20)
            ->create();
    }
}
