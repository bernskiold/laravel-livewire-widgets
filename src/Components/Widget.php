<?php

namespace BernskioldMedia\LaravelLivewireWidgets\Components;

use Illuminate\View\Component;

class Widget extends Component
{

    public function __construct(
        public string $title
    )
    {
    }

    public function render()
    {
        return view('livewire-widgets::components.widget');
    }
}
