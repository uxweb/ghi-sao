<?php namespace GhiSao\ServiceProviders;

/**
 * Created by PhpStorm.
 * User: uziel
 * Date: 5/25/14
 * Time: 9:07 AM
 */

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->view->composer('layouts.partials.obra_info', 'GhiSao\Composers\ObraInfoComposer');
    }
}