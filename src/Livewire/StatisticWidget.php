<?php

namespace BernskioldMedia\LaravelLivewireWidgets\Livewire;

use Bernskioldmedia\LaravelLivewireWidgets\Concerns;
use Livewire\Attributes\Computed;
use function __;
use function round;

/**
 * @property-read int|float|null $value
 * @property-read int|float|null $previousValue
 * @property-read float|null $change
 * @property-read string|null $changeLabel
 */
class StatisticWidget extends Widget
{
    use Concerns\HasTitle,
        Concerns\HasDescription;

    protected static string $view = 'livewire-widgets::statistic-widget';

    public bool $showChange = true;

    protected function getValue(): int|float|null
    {
        return null;
    }

    protected function getPreviousValue(): int|float|null
    {
        return null;
    }

    #[Computed]
    public function value(): int|float|null
    {
        return $this->getValue();
    }

    #[Computed]
    public function previousValue(): int|float|null
    {
        if (!$this->showChange) {
            return null;
        }

        return $this->getPreviousValue();
    }

    #[Computed]
    public function change(): ?float
    {
        if (!$this->showChange) {
            return null;
        }

        if ($this->previousValue === null || $this->value === null) {
            return null;
        }

        return ($this->value - $this->previousValue) / $this->previousValue * 100;
    }

    protected function getChangeValueSuffix(): string
    {
        return '%';
    }

    #[Computed]
    public function changeLabel(): ?string
    {
        if ($this->showChange === false) {
            return null;
        }

        if (!$this->change) {
            return null;
        }

        if ($this->change > 0) {
            return __(':percentage increase', ['percentage' => round($this->change, 2) . $this->getChangeValueSuffix()]);
        }

        if ($this->change < 0) {
            return __(':percentage decrease', ['percentage' => round($this->change, 2) . $this->getChangeValueSuffix()]);
        }

        return __('No change');
    }

    protected function getPlaceholderData(): array
    {
        return array_merge(parent::getPlaceholderData(), [
            'hasChange' => $this->showChange,
        ]);
    }

}
