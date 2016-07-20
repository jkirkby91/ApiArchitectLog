<?php

namespace ApiArchitect\Log\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use ApiArchitect\Log\Events\RequestLogEvent;
use ApiArchitect\Log\Repositories\RequestLogRepository;

/**
 * Class RequestLog
 *
 * @package Api\Middleware
 * @author James Kirkby <hello@jameskirkby.com>
 */
class RequestLog
{

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
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $this->repository->createLog($request);

        return $next($request);
    }
}