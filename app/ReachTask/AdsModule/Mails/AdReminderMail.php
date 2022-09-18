<?php

namespace App\ReachTask\AdsModule\Mails;

use App\ReachTask\AdsModule\Mappers\AdDTOMapper;
use App\ReachTask\AdsModule\Models\Ad;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdReminderMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    private Ad $ad;

    public function __construct(Ad $ad)
    {
        $this->ad = $ad;
    }

    public function build()
    {
        $ad = (new AdDTOMapper())->map($this->ad);
        return $this->view('ad-reminder-mail' , compact('ad'));
    }

}
