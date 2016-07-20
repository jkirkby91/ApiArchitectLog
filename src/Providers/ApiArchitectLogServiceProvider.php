<?php

namespace ApiArchitect\Log\Providers;

use Illuminate\Support\ServiceProvider;
use ApiArchitect\Log\Entities\RequestLog;
use ApiArchitect\Log\Repositories\RequestLogRepository;

/**
 * Class ApiArchitectLogServiceProvider
 *
 * @package ApiArchitect\Providers
 * @author James Kirkby <hello@jameskirkby.com>
 */
class ApiArchitectLogServiceProvider extends ServiceProvider
{

    /**
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RequestLogRepository::class, function($app) {
            // This is what Doctrine's EntityRepository needs in its constructor.
            return new RequestLogRepository(
                $app['em'],
                $app['em']->getClassMetaData(RequestLog::class)
            );
        });
    }

    /**
     * Get the services provided by the provider since we are deferring load.
     *
     * @return array
     */
    public function provides()
    {
        return ['ApiArchitect\Log\Repositories\RequestLogRepository'];
    }
}