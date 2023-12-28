<livewire-widgets::widget class="ww-widget--statistic">

    <p>{{ $title }}</p>

    <p>{{ $this->value }}</p>

    @if($showChange)
        <p>{{ $this->changeLabel }}</p>
    @endif

    @if(!empty($description))
        <p>{{ $description }}</p>
    @endif

</livewire-widgets::widget>
