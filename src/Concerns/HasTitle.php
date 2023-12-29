<?php

namespace BernskioldMedia\LaravelLivewireWidgets\Concerns;

trait HasTitle
{
    public ?string $title = null;

    public bool $showTitle = true;

    protected function defaultTitle(): string
    {
        return '';
    }

    public function getTitle(): string
    {
        if ($this->title) {
            return $this->title;
        }

        return $this->defaultTitle();
    }
}
