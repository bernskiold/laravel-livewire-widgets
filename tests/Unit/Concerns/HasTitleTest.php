<?php

use BernskioldMedia\LaravelLivewireWidgets\Concerns\HasTitle;

beforeEach(function () {
    $this->testClass = new class {
        use HasTitle;
    };
});

it('is initialized as null', function () {
    expect($this->testClass->title)->toBeNull();
});

it('shows by default', function () {
    expect($this->testClass->showTitle)->toBeTrue();
});

it('can set title', function () {
    $this->testClass->title = 'Test title';

    expect($this->testClass->title)->toEqual('Test title');
});

it('can set title visibility', function () {
    $this->testClass->showTitle = false;

    expect($this->testClass->showTitle)->toBeFalse();
});

it('can get a default title', function () {
    $class = new class {
        use HasTitle;

        protected function defaultTitle(): string
        {
            return 'Default title';
        }
    };

    expect($class->getTitle())->toEqual('Default title');
});

it('can get a custom title', function () {
    $class = new class {
        use HasTitle;

        protected function defaultTitle(): string
        {
            return 'Default title';
        }
    };

    $class->title = 'Custom title';

    expect($class->getTitle())->toEqual('Custom title');
});
