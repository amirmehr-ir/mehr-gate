<?php

namespace Amirmehr\MehrGate;

use Illuminate\Support\ServiceProvider;

class MehrGateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('mehrGate', function () {
            return new MehrGate;
        });

        $this->mergeConfigFrom( __DIR__ . '/Config/mehr-gate-config.php', 'mehr-gate');
    }
}
