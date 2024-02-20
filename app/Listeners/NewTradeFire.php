<?php

namespace App\Listeners;

use App\Events\NewTrade;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewTradeFire
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(NewTrade $event): void
    {
        // $trade = new NewTrade();
        // $trade->trade_no = $event->trade_no;
    }
}
