<?php

use BernskioldMedia\LaravelLivewireWidgets\Concerns\Filterable;

beforeEach(function () {
    $this->testClass = new class
    {
        use Filterable;
    };
});

it('has the filters property', function () {
    expect($this->testClass->filters)->toBeArray();
});

it('can get forced filters', function () {
    expect($this->testClass->forcedFilters())->toBeArray();
});

it('can get default filters', function () {
    expect($this->testClass->defaultFilters())->toBeArray();
});

it('can set filters', function () {
    $this->testClass->setFilter('foo', 'bar');

    expect($this->testClass->filters)->toHaveCount(1)
        ->and($this->testClass->filters['foo'])->toBe('bar');
});

it('can get filters', function () {
    $this->testClass->setFilter('foo', 'bar');

    expect($this->testClass->getFilter('foo'))->toBe('bar');
});

it('can get filter with a default fallback', function () {
    expect($this->testClass->getFilter('foo', 'bar'))->toBe('bar');
});

it('can check if it has a filter', function () {
    $this->testClass->setFilter('foo', 'bar');

    expect($this->testClass->hasFilter('foo'))->toBeTrue()
        ->and($this->testClass->hasFilter('bar'))->toBeFalse();
});

it('can reset filters', function () {
    $this->testClass->setFilter('foo', 'bar');

    expect($this->testClass->filters)->toHaveCount(1);

    $this->testClass->resetFilters();

    expect($this->testClass->filters)->toHaveCount(0);
});

it('can remove a filter', function () {
    $this->testClass->setFilter('foo', 'bar');

    expect($this->testClass->filters)->toHaveCount(1);

    $this->testClass->removeFilter('foo');

    expect($this->testClass->filters)->toHaveCount(0);
});

it('can get all filters with default and forced', function () {
    $class = new class
    {
        use Filterable;

        public function forcedFilters(): array
        {
            return [
                'bar' => 'baz',
            ];
        }

        public function defaultFilters(): array
        {
            return [
                'foo' => 'bar',
            ];
        }
    };

    $class->setFilter('baz', 'foo');

    expect($class->getFilters())
        ->toBeArray()
        ->toHaveCount(3)
        ->toHaveKeys(['foo', 'bar', 'baz']);
});

it('overrides default filters with set filter', function () {
    $class = new class
    {
        use Filterable;

        public function defaultFilters(): array
        {
            return [
                'foo' => 'bar',
            ];
        }
    };

    $class->setFilter('foo', 'baz');

    expect($class->getFilter('foo'))->toBe('baz');
});

it('overrides any default or set filter with forced filters', function () {
    $class = new class
    {
        use Filterable;

        public function forcedFilters(): array
        {
            return [
                'bar' => 'forcedBar',
                'foo' => 'forcedFoo',
            ];
        }

        public function defaultFilters(): array
        {
            return [
                'foo' => 'defaultFoo',
            ];
        }
    };

    $class->setFilters([
        'foo' => 'setFoo',
        'bar' => 'setBar',
    ]);

    expect($class->getFilters())->toBe([
        'foo' => 'forcedFoo',
        'bar' => 'forcedBar',
    ]);
});
