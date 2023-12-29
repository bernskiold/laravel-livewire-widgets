<x-livewire-widgets::widget class="ww-widget--statistic"
                            :width="$width"
                            :height="$height">

    <p class="ww-widget__stat_title">{{ $widgetTitle }}</p>

    <p class="ww-widget__stat_value">{{ $this->value }}</p>

    @if($showChange)
        <p class="ww-widget__stat_change">{{ $this->changeLabel }}</p>
    @endif

    @if(!empty($widgetDescription))
        <p class="ww-widget__statistic_description">{{ $widgetDescription }}</p>
    @endif

</x-livewire-widgets::widget>
