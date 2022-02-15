<?php

namespace MehrGate;

use Illuminate\Support\ServiceProvider;

class MehrGateServiceProvide extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('mehrGate', function () {
            return new MehrGate;
        });

        $this->mergeConfigFrom( __DIR__ . '/Config/mehr-gate-config.php', 'mehr-gate');
    }
}
