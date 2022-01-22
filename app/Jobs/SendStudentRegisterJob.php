<?php

namespace App\Jobs;

use App\Models\User;
use App\Notifications\StudentRegistration;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendStudentRegisterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
    }

    public function handle()
    {
        $admins = User::role('admin')->get();

        foreach ($admins as $admin) {
            $admin->notify(new StudentRegistration($admin));
        }
    }
}
