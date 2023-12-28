<x-livewire-widgets::widget class="ww-widget--statistic">

    <p class="ww-widget__stat_title">{{ $title }}</p>

    <p class="ww-widget__stat_value">{{ $this->value }}</p>

    @if($showChange)
        <p class="ww-widget__stat_change">{{ $this->changeLabel }}</p>
    @endif

    @if(!empty($description))
        <p class="ww-widget__statistic_description">{{ $description }}</p>
    @endif

</x-livewire-widgets::widget>
