<?php

namespace ApiArchitect\Log\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use ApiArchitect\Log\Entities\RequestLog;
use Doctrine\ORM\ORMInvalidArgumentException;
use ApiArchitect\Core\Abstracts\Repositories\AbstractRepository;

/**
 * Class RequestLogRepository
 *
 * @package ApiArchitect\Repositories\RequestLogRepository
 * @author James Kirkby <hello@jameskirkby.com>
 */
class RequestLogRepository extends AbstractRepository
{

    /**
     * @param  $request
     * @return $requestLog
     */
    public function createLog($request)
    {
        $requestLog = new RequestLog();

        $requestLog->setRoute($request->fullUrl());
        $requestLog->setMethod($request->getMethod());
        $requestLog->setParams(http_build_query(Input::all()));

        $this->_em->persist($requestLog);

        $this->_em->flush();

        return $requestLog;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function create(array $data)
    {
        return false;
    }
//
//    /**
//     * @TODO convert from eloqant to doctrine
//     *
//     * @return mixed
//     * @deprecated apiKeys no longer used
//     */
//    public function apiKey()
//    {
//        return $this->hasOne(Config::get('apiguard.model'));
//    }
//
//    /**
//     * @TODO convert from eloqant to doctrine
//     *
//     * @param $apiKeyId
//     * @param $routeAction
//     * @param $method
//     * @param $keyIncrementTime
//     * @return mixed
//     */
//    public function countApiKeyRequests($apiKeyId, $routeAction, $method, $keyIncrementTime)
//    {
//        return self::where('api_key_id', '=', $apiKeyId)
//            ->where('route', '=', $routeAction)
//            ->where('method', '=', $method)
//            ->where('created_at', '>=', date('Y-m-d H:i:s', $keyIncrementTime))
//            ->where('created_at', '<=', date('Y-m-d H:i:s'))
//            ->count();
//    }
//
//    /**
//     * @TODO convert from eloqant to doctrine
//     *
//     * @param $routeAction
//     * @param $method
//     * @param $keyIncrementTime
//     * @return mixed
//     */
//    public function countMethodRequests($routeAction, $method, $keyIncrementTime)
//    {
//        return self::where('route', '=', $routeAction)
//            ->where('method', '=', $method)
//            ->where('created_at', '>=', date('Y-m-d H:i:s', $keyIncrementTime))
//            ->where('created_at', '<=', date('Y-m-d H:i:s'))
//            ->count();
//    }

    /**
     * @param int $id
     * @param array $updatedEntity
     * @return bool
     * @deprecated
     */
    public function update($id, array $updatedEntity)
    {
        return false;
    }
}