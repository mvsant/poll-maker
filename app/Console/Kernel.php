<?php

namespace App\Console;

use App\Models\Poll;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

/* 
            Setup a daily cron Job on your server to run this
        $schedule->call(function () {
            $now = date('Y-m-d h:m:i');
            Poll::where(['start_date', '>', $now], ['end_date', '<', $now])->update([
                'is_open' => false,
            ]);
        })->daily();
 */

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
