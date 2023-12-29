<?php

namespace BernskioldMedia\LaravelLivewireWidgets\Contracts;

interface SupportsFiltering
{

    public function getFilters(): array;

    public function resetFilters(): void;

    public function setFilter(string $key, $value): self;

    public function removeFilter(string $key): self;

    public function hasFilter(string $key): bool;

    public function getFilter(string $key, mixed $default = null): mixed;

}
