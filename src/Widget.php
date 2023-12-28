<?php

namespace BernskioldMedia\LaravelLivewireWidgets;

use Illuminate\View\View;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use function method_exists;

#[Lazy]
abstract class Widget extends Component
{

    /**
     * @var view-string
     */
    protected static string $view;

    /**
     * @var view-string
     */
    protected static string $placeholderView = 'livewire-widgets::skeletons.widget';

    public int|string $columnSpan = 1;

    public int|string $columnStart = 1;

    /**
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        return [];
    }

    protected function getBaseViewData(): array
    {
        $data = [];

        if (method_exists($this, 'getTitle')) {
            $data['title'] = $this->showTitle ? $this->getTitle() : null;
        }

        if (method_exists($this, 'getDescription')) {
            $data['description'] = $this->showDescription ? $this->getDescription() : null;
        }

        return $data;
    }

    public function render(): View
    {
        return view(static::$view, array_merge(
            $this->getBaseViewData(),
            $this->getViewData(),
        ));
    }

    protected function getPlaceholderData(): array
    {
        return [
            'columnSpan' => $this->columnSpan,
            'columnStart' => $this->columnStart,
            'hasTitle' => method_exists($this, 'getTitle') && $this->showTitle,
            'hasDescription' => method_exists($this, 'getDescription') && $this->showDescription,
        ];
    }

    public function placeholder(): View
    {
        return view(self::$placeholderView, $this->getPlaceholderData());
    }
}
