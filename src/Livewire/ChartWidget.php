<?php

namespace BernskioldMedia\LaravelLivewireWidgets\Livewire;

use Bernskioldmedia\LaravelLivewireWidgets\Concerns;

class ChartWidget extends Widget
{
    use Concerns\HasTitle,
        Concerns\HasDescription;

    protected static string $view = 'livewire-widgets::chart-widget';

}
