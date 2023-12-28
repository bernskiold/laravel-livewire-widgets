<?php

namespace BernskioldMedia\LaravelLivewireWidgets;

use BernskioldMedia\LaravelLivewireWidgets\Livewire\StatisticWidget;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaravelLivewireWidgetsServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        AboutCommand::add('Laravel Livewire Widgets', fn() => ['Version' => '1.0.0']);

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'livewire-widgets');

        $this->publishes([
            __DIR__ . '/../config/livewire-widgets.php' => config_path('livewire-widgets.php'),
        ], 'livewire-widgets-config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/livewire-widgets'),
        ], 'livewire-widgets-views');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/livewire-widgets.php', 'livewire-widgets'
        );
    }
}
