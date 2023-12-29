<?php

namespace BernskioldMedia\LaravelLivewireWidgets\Contracts;

interface SupportsFiltering
{

    public function getFilters(): array;

    public function resetFilters(): void;

    public function setFilter(string $key, $value): void;

    public function removeFilter(string $key): void;

    public function hasFilter(string $key): bool;

    public function getFilter(string $key, mixed $default = null): mixed;

}
