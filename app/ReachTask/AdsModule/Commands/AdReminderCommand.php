<?php

namespace App\ReachTask\AdsModule\Commands;

use App\ReachTask\AdsModule\Mails\AdReminderMail;
use App\ReachTask\AdsModule\Models\Ad;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class AdReminderCommand extends Command
{

    protected $signature = 'ad-reminder';

    public function handle()
    {
        $ads = Ad::whereDate('start_date', Carbon::tomorrow())->with(['tags', 'category', 'advertiser'])->get();

        foreach ($ads as $ad) {
            if ($ad->advertiser)
                Mail::to($ad->advertiser->email)->send(new AdReminderMail($ad));

        }

    }

}
