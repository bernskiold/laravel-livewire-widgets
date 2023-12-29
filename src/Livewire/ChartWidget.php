<?php

namespace BernskioldMedia\LaravelLivewireWidgets\Livewire;

use BernskioldMedia\LaravelHighcharts\Concerns\Livewire\InteractsWithCharts;
use BernskioldMedia\LaravelLivewireWidgets\Concerns;

abstract class ChartWidget extends Widget
{
    use Concerns\HasDescription,
        Concerns\HasTitle,
        InteractsWithCharts;

    protected static function view(): string
    {
        return config('livewire-widgets.livewire.views.chart-widget');
    }

    protected static function placeholderView(): string
    {
        return config('livewire-widgets.livewire.skeletons.chart-widget');
    }
}
