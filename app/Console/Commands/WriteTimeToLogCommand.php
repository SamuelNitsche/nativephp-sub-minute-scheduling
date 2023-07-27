<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WriteTimeToLogCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Write time to log';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        \Log::info('The current time is ' . date('Y-m-d H:i:s'));
    }
}
