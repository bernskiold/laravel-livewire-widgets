<?php

namespace BernskioldMedia\LaravelLivewireWidgets\Livewire;

use BernskioldMedia\LaravelLivewireWidgets\Concerns;
use BernskioldMedia\LaravelLivewireWidgets\Contracts\ComparesValues;
use Livewire\Attributes\Computed;
use function __;
use function array_merge;
use function config;
use function round;

/**
 * @property-read int|float|null $value
 * @property-read int|float|null $previousValue
 * @property-read float|null $change
 * @property-read string|null $changeLabel
 */
abstract class StatisticWidget extends Widget
{
    use Concerns\HasTitle,
        Concerns\HasDescription;

    public bool $showChange = true;

    public bool $invertedChange = false;

    public bool $changeAsPercentage = true;

    protected static function view(): string
    {
        return config('livewire-widgets.livewire.views.statistic-widget');
    }

    protected static function placeholderView(): string
    {
        return config('livewire-widgets.livewire.skeletons.statistic-widget');
    }

    abstract public function getValue(): int|float|null;

    #[Computed]
    public function value(): int|float|null
    {
        return $this->getValue();
    }

    #[Computed]
    public function previousValue(): int|float|null
    {
        if (!$this->showChange || !$this instanceof ComparesValues) {
            return null;
        }

        return $this->getPreviousValue();
    }

    #[Computed]
    public function change(): ?float
    {
        if (!$this->showChange || !$this instanceof ComparesValues) {
            return null;
        }

        if ($this->previousValue === null || $this->value === null) {
            return null;
        }

        if ($this->changeAsPercentage) {
            return ($this->value - $this->previousValue) / $this->previousValue * 100;
        }

        return $this->value - $this->previousValue;
    }

    public function getChangeValueSuffix(): string
    {
        return '%';
    }

    #[Computed]
    public function changeDirection(): ?string
    {
        if ($this->showChange === false || !$this instanceof ComparesValues || !$this->change) {
            return null;
        }

        if ($this->change > 0) {
            return $this->invertedChange ? 'negative' : 'positive';
        }

        if ($this->change < 0) {
            return $this->invertedChange ? 'positive' : 'negative';
        }

        return 'neutral';
    }

    protected function getPlaceholderData(): array
    {
        return array_merge(parent::getPlaceholderData(), [
            'hasChange' => $this->showChange,
            'isComparisonEnabled' => $this instanceof ComparesValues,
        ]);
    }

    protected function getBaseViewData(): array
    {
        return array_merge(
            parent::getBaseViewData(),
            [
                'isComparisonEnabled' => $this instanceof ComparesValues,
            ]
        );
    }

}
