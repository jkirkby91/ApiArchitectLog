<?php

namespace ApiArchitect\Log\Listeners;

use ApiArchitect\Log\Events\RequestLogEvent;
use ApiArchitect\Log\Repositories\RequestLogRepository;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class RequestLogEventListener
 *
 * @package ApiArchitect\Listeners
 * @author James Kirkby <hello@jameskirkby.com>
 */
class RequestLogEventListener implements ShouldQueue
{

    use InteractsWithQueue,DispatchesJobs;

    /**
     * @var $requestLogEvent
     */
    public $requestEvent;

    /**
     * @var HttpLogRepository
     */
    public $repository;

    /**
     * RequestLogEventListener constructor.
     *
     * @param RequestLogEvent $requestLogEvent
     * @param RequestLogRepository $repo
     */
    public function __construct(RequestLogEvent $requestLogEvent,RequestLogRepository $repo)
    {
        $this->requestEvent = $requestLogEvent;

        $this->repository = $repo;
    }

    /**
     * Handle the event.
     *
     * @param RequestLogEvent $event
     */
    public function handle(RequestLogEvent $event)
    {
        $this->repository->createLog($event);
    }
}
