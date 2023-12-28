<?php

namespace BernskioldMedia\LaravelLivewireWidgets;

use BernskioldMedia\LaravelLivewireWidgets\Concerns;

class ChartWidget extends Widget
{
    use Concerns\HasTitle,
        Concerns\HasDescription;

    protected static string $view = 'livewire-widgets::chart-widget';

}
