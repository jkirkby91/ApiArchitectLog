<?php

namespace ApiArchitect\Log\Events;

use ApiArchitect\Core\Abstracts\Events\AbstractEvent;

/**
 * Class RequestLogEvent
 *
 * @package ApiArchitect\Events
 * @author James Kirkby <hello@jameskirkby.com>
 */
class RequestLogEvent extends AbstractEvent
{
    /**
     * Create a new event instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
