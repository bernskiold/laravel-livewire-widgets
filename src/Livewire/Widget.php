<?php

namespace BernskioldMedia\LaravelLivewireWidgets\Livewire;

use Bernskioldmedia\LaravelLivewireWidgets\Enums\WidgetHeights;
use Bernskioldmedia\LaravelLivewireWidgets\Enums\WidgetWidths;
use Illuminate\View\View;
use Livewire\Component;
use function config;
use function method_exists;

abstract class Widget extends Component
{

    public string $width = WidgetWidths::Fourth->value;

    public string $height = WidgetHeights::One->value;

    /**
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        return [];
    }

    /**
     * @return view-string
     */
    abstract protected static function view(): string;

    /**
     * @return view-string
     */
    protected static function placeholderView(): string
    {
        return config('livewire-widgets.livewire.skeletons.base');
    }

    protected function getBaseViewData(): array
    {
        $data = [];

        if (method_exists($this, 'getTitle')) {
            $data['widgetTitle'] = $this->showTitle ? $this->getTitle() : null;
        }

        if (method_exists($this, 'getDescription')) {
            $data['widgetDescription'] = $this->showDescription ? $this->getDescription() : null;
        }

        return $data;
    }

    public function render(): View
    {
        return view(static::view(), array_merge(
            $this->getBaseViewData(),
            $this->getViewData(),
        ));
    }

    protected function getPlaceholderData(): array
    {
        return [
            'width' => $this->width,
            'height' => $this->height,
            'hasTitle' => method_exists($this, 'getTitle') && $this->showTitle,
            'hasDescription' => method_exists($this, 'getDescription') && $this->showDescription,
        ];
    }

    public function placeholder(): View
    {
        return view(static::placeholderView(), $this->getPlaceholderData());
    }
}
