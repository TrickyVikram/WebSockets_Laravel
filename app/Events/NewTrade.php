<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewTrade implements ShouldBroadcast 
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    // my VARIABLE
    public $tradeId;

    /**
     * Create a new event instance.
     */
    public function __construct($tradeId)
    {
        //
        $this->tradeId = $tradeId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            // new PrivateChannel('channel-name'),
            new Channel("TradeChannel". $this->tradeId),
        ];
    }
}
