<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VoteEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $vote;
    public $total;

    public function __construct($vote, $total)
    {
        $this->vote = $vote;
        $this->total = $total;
    }

    public function broadcastOn()
    {
        return ['poll-channel'];
    }

    public function broadcastAs()
    {
        return 'vote-event';
    }
}
