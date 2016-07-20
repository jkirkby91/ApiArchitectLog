<?php

namespace ApiArchitect\Log\Contracts;

/**
 * Interface DatabaseLogContract
 *
 * @package ApiArchitect\Contracts
 * @author James Kirkby <hello@jameskirkby.com>
 */
interface DatabaseLogContract
{
    /**
     * @return mixed
     */
    public function getUsername();
}