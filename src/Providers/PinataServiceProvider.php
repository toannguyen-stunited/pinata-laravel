<?php

namespace Pinata\Providers;

use Illuminate\Support\ServiceProvider;
use Pinata\Client;

/**
 * @author Daniel Isac <daniel@crosstechit.com>
 */
class PinataServiceProvider extends ServiceProvider
{
    /**
     * @var bool
     */
    protected $defer = true;

    public function register(): void
    {
        $this->app->singleton('pinata', function ($app) {

            $config = $app->make('config')->get('services.pinata');

            return new Client($config['api_key'], $config['secret_key']);
        });

        $this->app->alias('pinata', 'Core\Pinata\Client');
    }

    public function provides(): array
    {
        return ['pinata', 'Core\Pinata\Client'];
    }
}
