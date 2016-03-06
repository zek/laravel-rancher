<?php

namespace Benmag\Rancher;

use Illuminate\Support\ServiceProvider;

/**
 * Rancher API wrapper for Laravel
 *
 * @package  Rancher
 * @author   @benmagg
 */
class RancherServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__ . '/../config/rancher.php');
        if ( class_exists('Illuminate\Foundation\Application', false) )
        {
            $this->publishes([ $source => config_path('rancher.php') ], 'config');
        }
        $this->mergeConfigFrom($source, 'rancher');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('rancher', function ($app)
        {
            $config = $app['config']->get('rancher');
            $client = new Factories\Client($config['baseUrl'], $config['accessKey'], $config['secretKey']);
            return new Rancher($client);
        });

        $this->app->alias('rancher', 'Benmag\Rancher\Rancher');

    }

}