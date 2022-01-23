<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class daily extends Command
{
    protected $signature = 'daily:delete';

    protected $description = 'This will delete the previously completed classes';

    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        DB::table('programs')
            ->where('start_at', "<", Carbon::now()->subDays(1))
            ->delete();
    }
}
