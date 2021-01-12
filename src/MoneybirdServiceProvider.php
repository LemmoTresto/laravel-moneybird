<?php

namespace LemmoTresto\Moneybird;

use Illuminate\Support\ServiceProvider;
use Picqer\Financials\Moneybird\Connection;
use Picqer\Financials\Moneybird\Moneybird;

class MoneybirdServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/moneybird.php' => config_path('moneybird.php')
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/moneybird.php', 'moneybird');

        $this->app->bind('moneybird', function () {
            $connection = new Connection();
            $connection->setRedirectUrl(config('moneybird.redirect_uri'));
            $connection->setClientId(config('moneybird.client_id'));
            $connection->setClientSecret(config('moneybird.client_secret'));

            if($value = config('moneybird.authorization_token')) {
                $connection->setAuthorizationCode($value);
            }
            if($value = config('moneybird.access_token')) {
                $connection->setAccessToken($value);
            }
            if($value = config('moneybird.administration_id')) {
                $connection->setAdministrationId($value);
            }

            $moneybird = new Moneybird($connection);

            return $moneybird;
        });

    }

    public function provides() {
        return ['moneybird'];
    }
}
