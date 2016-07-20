<?php

namespace ApiArchitect\Log\Contracts;

use Closure;
use Illuminate\Http\Request;

/**
 * Class RequestLogContract
 *
 * @package ApiArchitect\Contracts
 * @author James Kirkby <hello@jameskirkby.com>
 */
interface RequestLogContract
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next);
}