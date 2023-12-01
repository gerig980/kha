<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Agency;
use Carbon\Carbon;

class UpdateSubscriptionStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'subscription:update-status';

    /**
     * The console command description.
     *
     * @var string
     */

    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $now = Carbon::now();
        $expiredSubscriptions = Agency::where('end_date', '<=', $now)
        ->where('status', '1')
        ->get();

    foreach ($expiredSubscriptions as $subscription) {
        $subscription->update([
            'status' => '0'
        ]);
    }
    }
}
