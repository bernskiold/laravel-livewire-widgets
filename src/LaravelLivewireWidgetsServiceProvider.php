<?php

namespace BernskioldMedia\LaravelLivewireWidgets;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaravelLivewireWidgetsServiceProvider extends ServiceProvider
{

    public function boot(): void
    {

        AboutCommand::add('Laravel Livewire Widgets', fn() => ['Version' => '1.0.0']);

        Blade::component('livewire-widgets::widget', \BernskioldMedia\LaravelLivewireWidgets\Components\Widget::class);

//        $this->publishes([
//            __DIR__ . '/../config/highcharts.php' => config_path('highcharts.php'),
//        ]);
    }

    public function register(): void
    {
//        $this->mergeConfigFrom(
//            __DIR__ . '/../config/highcharts.php', 'highcharts'
//        );
    }

}
