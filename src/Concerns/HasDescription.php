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

    public function getDescription(): string
    {
        if (!empty($this->description)) {
            return $this->description;
        }

        return $this->defaultDescription();
    }
}
