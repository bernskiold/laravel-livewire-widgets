<?php

use BernskioldMedia\LaravelLivewireWidgets\Concerns\HasDescription;

beforeEach(function () {
    $this->testClass = new class {
        use HasDescription;
    };
});

it('is initialized as null', function () {
    expect($this->testClass->description)->toBeNull();
});

it('shows description by default', function () {
    expect($this->testClass->showDescription)->toBeTrue();
});

it('can set description', function () {
    $this->testClass->description = 'Test description';

    expect($this->testClass->description)->toEqual('Test description');
});

it('can set description visibility', function () {
    $this->testClass->showDescription = false;

    expect($this->testClass->showDescription)->toBeFalse();
});

it('can get a default description', function () {
    $class = new class {
        use HasDescription;

        protected function defaultDescription(): string
        {
            return 'Default description';
        }
    };

    expect($class->getDescription())->toEqual('Default description');
});

it('can get a custom description', function () {
    $class = new class {
        use HasDescription;

        protected function defaultDescription(): string
        {
            return 'Default description';
        }
    };

    $class->description = 'Custom description';

    expect($class->getDescription())->toEqual('Custom description');
});
