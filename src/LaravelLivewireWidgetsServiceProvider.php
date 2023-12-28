<?php

namespace BernskioldMedia\LaravelLivewireWidgets;

use BernskioldMedia\LaravelLivewireWidgets\Components\Widget;
use BernskioldMedia\LaravelLivewireWidgets\Livewire\ChartWidget;
use BernskioldMedia\LaravelLivewireWidgets\Livewire\StatisticWidget;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaravelLivewireWidgetsServiceProvider extends ServiceProvider
{

    public function boot(): void
    {

        AboutCommand::add('Laravel Livewire Widgets', fn() => ['Version' => '1.0.0']);

        Blade::component('livewire-widgets::widget', Widget::class);
        Livewire::component('livewire-widgets::chart-widget', ChartWidget::class);
        Livewire::component('livewire-widgets::statistic-widget', StatisticWidget::class);

        $this->publishes([
            __DIR__ . '/../config/livewire-widgets.php' => config_path('livewire-widgets.php'),
        ]);
    }

    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/livewire-widgets.php', 'livewire-widgets'
        );
    }
}
