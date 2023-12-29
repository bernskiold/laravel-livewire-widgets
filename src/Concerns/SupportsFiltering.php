<?php

namespace BernskioldMedia\LaravelLivewireWidgets\Concerns;

trait SupportsFiltering
{

    public array $filters = [];

    protected function forcedFilters(): array
    {
        return [];
    }

    protected function defaultFilters(): array
    {
        return [];
    }

    public function getFilters(): array
    {
        return array_merge(
            $this->defaultFilters(),
            $this->filters,
            $this->forcedFilters()
        );
    }

    public function resetFilters(): void
    {
        $this->filters = [];
    }

    public function setFilter(string $key, $value): void
    {
        $this->filters[$key] = $value;
    }

    public function removeFilter(string $key): void
    {
        unset($this->filters[$key]);
    }

    public function hasFilter(string $key): bool
    {
        return isset($this->filters[$key]);
    }

    public function getFilter(string $key): mixed
    {
        return $this->filters[$key] ?? null;
    }
}
