<x-livewire-widgets::widget class="ww-widget--statistic"
                            :width="$width"
                            :height="$height">

    <p class="ww-widget__stat_title">{{ $widgetTitle }}</p>

    <p class="ww-widget__stat_value">{{ $this->value }}</p>

    @if($showChange)
        <p @class(['ww-widget__stat_change', 'ww-widget__stat_change--' . $this->changeDirection])>
            @if($this->changeDirection === 'positive')
                <x-livewire-widgets::icons.trending-up class="ww-widget__stat_change_icon"/>
            @elseif($this->changeDirection === 'negative')
                <x-livewire-widgets::icons.trending-down class="ww-widget__stat_change_icon"/>
            @endif
            <span>{{ number_format($this->change, 1) }}&nbsp;{{ $this->getChangeValueSuffix() }}</span>
        </p>
    @endif

</x-livewire-widgets::widget>
