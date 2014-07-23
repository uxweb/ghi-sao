<?php namespace GhiSao\ServiceProviders;

/**
 * Created by PhpStorm.
 * User: uziel
 * Date: 6/3/14
 * Time: 11:54 PM
 */

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'GhiSao\Repositories\Obra\ObraRepositoryInterface',
            'GhiSao\Repositories\Obra\DbObraRepository'
        );

        $this->app->bind(
            'GhiSao\Repositories\User\SaoUserRepositoryInterface',
            'GhiSao\Repositories\User\DbSaoUserRepository'
        );
    }
}