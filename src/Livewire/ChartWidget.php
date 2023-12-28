<?php

namespace BernskioldMedia\LaravelLivewireWidgets\Livewire;

use BernskioldMedia\LaravelHighcharts\Concerns\Livewire\InteractsWithCharts;
use BernskioldMedia\LaravelLivewireWidgets\Concerns;

abstract class ChartWidget extends Widget
{
    use Concerns\HasTitle,
        Concerns\HasDescription,
        InteractsWithCharts;

    protected static function view(): string
    {
        return config('livewire-widgets.livewire.views.chart-widget');
    }
}
