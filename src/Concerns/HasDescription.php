<?php

namespace BernskioldMedia\LaravelLivewireWidgets\Concerns;

trait HasDescription
{

    public ?string $description = null;

    public bool $showDescription = true;

    protected function defaultDescription(): string
    {
        return '';
    }

    protected function getDescription(): string
    {
        if ($this->description) {
            return $this->description;
        }

        return $this->defaultDescription();
    }
}
