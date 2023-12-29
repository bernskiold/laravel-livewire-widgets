<?php

namespace BernskioldMedia\LaravelLivewireWidgets\Concerns;

trait Filterable
{
    public array $filters = [];

    public function forcedFilters(): array
    {
        return [];
    }

    public function defaultFilters(): array
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

    public function setFilter(string $key, $value): self
    {
        $this->filters[$key] = $value;

        return $this;
    }

    public function setFilters(array $filters): self
    {
        foreach ($filters as $key => $value) {
            $this->setFilter($key, $value);
        }

        return $this;
    }

    public function removeFilter(string $key): self
    {
        unset($this->filters[$key]);

        return $this;
    }

    public function hasFilter(string $key): bool
    {
        return isset($this->getFilters()[$key]);
    }

    public function getFilter(string $key, mixed $default = null): mixed
    {
        return $this->getFilters()[$key] ?? $default;
    }
}
