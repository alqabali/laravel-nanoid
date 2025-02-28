<?php

namespace Alqabali\LaravelNanoid;

use Illuminate\Support\ServiceProvider;
use Alqabali\LaravelNanoid\Console\Commands\NanoidMigrateMakeCommand;
use Alqabali\LaravelNanoid\Console\Commands\NanoidModelMakeCommand;

class LaravelNanoidServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                NanoidModelMakeCommand::class,
                NanoidMigrateMakeCommand::class,
            ]);
        }
    }
}
