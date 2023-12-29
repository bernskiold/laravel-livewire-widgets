<x-livewire-widgets::widget class="ww-widget--statistic"
                            :width="$width"
                            :height="$height">

    <p class="ww-widget__stat-title">{{ $widgetTitle }}</p>

    <p class="ww-widget__stat-value">{{ $this->value }}</p>

    @if($showChange)
        <p @class(['ww-widget__stat-change', 'ww-widget__stat-change--' . $this->changeDirection])>
            @if($this->changeDirection === 'positive')
                <x-livewire-widgets::icons.trending-up class="ww-widget__stat-change-icon"/>
            @elseif($this->changeDirection === 'negative')
                <x-livewire-widgets::icons.trending-down class="ww-widget__stat-change-icon"/>
            @endif
            <span>{{ number_format($this->change, 1) }}{{ $this->getChangeValueSuffix() }}</span>
        </p>
    @endif

</x-livewire-widgets::widget>
